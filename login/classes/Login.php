<?php

/**
 * Class login
 * handles the user's login and logout process
 */
class Login
{
    /**
     * @var object The database connection
     */
    private $db_connection = null;
    /**
     * @var array Collection of error messages
     */
    public $errors = array();
    /**
     * @var array Collection of success / neutral messages
     */
    public $messages = array();

    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$login = new Login();"
     */
    public function __construct()
    {
        // create/read session, absolutely necessary
        session_start();

        // check the possible login actions:
        // if user tried to log out (happen when user clicks logout button)
        if (isset($_GET["logout"])) {
            $this->doLogout();
        }
        // login via post data (if user just submitted a login form)
        elseif (isset($_POST["login"])) {
            $this->dologinWithPostData();
        }
    }

    /**
     * log in with post data
     */
    private function dologinWithPostData()
    {
        // check login form contents
        if (empty($_POST['user_name'])) {
            $this->errors[] = "Du måste skriva in ett användarnamn";
        } elseif (empty($_POST['user_password'])) {
            $this->errors[] = "Du måste skriva in ett lösenord.";
        } elseif (!empty($_POST['user_name']) && !empty($_POST['user_password'])) {

            // create a database connection, using the constants from config/db.php (which we loaded in index.php)
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // change character set to utf8 and check it
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // if no connection errors (= working database connection)
            if (!$this->db_connection->connect_errno) {

                // escape the POST stuff
                $user_name = $this->db_connection->real_escape_string($_POST['user_name']);

                // database query, getting all the info of the selected user (allows login via email address in the
                // username field)
                $sqlBusiness = "SELECT business_name, email, password, business_id
                                FROM business
                                WHERE business_name = '" . $user_name . "' OR email = '" . $user_name . "';";
                $sqlStudent =   "SELECT student_name, email, password, role
                                FROM student
                                WHERE student_name = '" . $user_name . "' OR email = '" . $user_name . "';";
                $result_of_loginBusiness_check = $this->db_connection->query($sqlBusiness);
                $result_of_loginStudent_check = $this->db_connection->query($sqlStudent);

                // if this user exists
                if ($result_of_loginBusiness_check->num_rows == 1) {

                    // get result row (as an object)
                    $result_row_business = $result_of_loginBusiness_check->fetch_object();

                    // using PHP 5.5's password_verify() function to check if the provided password fits
                    // the hash of that user's password
                    if (password_verify($_POST['user_password'], $result_row_business->password)) {

                        // write user data into PHP SESSION (a file on your server)
                        $_SESSION['user_name'] = $result_row_business->business_name;
                        $_SESSION['user_email'] = $result_row_business->email;
                        $_SESSION['user_id'] = $result_row_business->business_id;
                        $_SESSION['user_login_status'] = 1;
                        $_SESSION['isBusiness'] = 1;

                    } else {
                        $this->errors[] = "Fel lösenord. Försök igen.";
                    }
                } 
                elseif($result_of_loginStudent_check->num_rows == 1){

                    $result_row_student = $result_of_loginStudent_check->fetch_object();

                    if(password_verify($_POST['user_password'], $result_row_student->password)){

                    $_SESSION['user_name'] = $result_row_student->student_name;
                    $_SESSION['user_email'] = $result_row_student->email;
                    $_SESSION['user_login_status'] = 1;
                    $_SESSION['role'] = $result_row_student->role;

                    } else {
                        $this->errors[] = "Fel lösenord. Försök igen.";
                    }

                } else {
                    $this->errors[] = "Den här användaren finns inte.";
                }

            }  
            else {
                $this->errors[] = "Databasanslutningsfel.";
            }
        }
    }

    public function isUserAdmin()
    {
        if(isset($_SESSION['role']) AND $_SESSION['role'] == 1) {
            return true;
        }
        //default return
        return false;
    }

    public function isUserBusiness()
    {
        if(isset($_SESSION['isBusiness']) AND $_SESSION['isBusiness'] == 1){
            return true;
        }
        return false;
    }

    /**
     * perform the logout
     */
    public function doLogout()
    {
        // delete the session of the user
        $_SESSION = array();
        session_destroy();
        // return a little feeedback message
        $this->messages[] = "Du har blivit utloggad.";

    }

    /**
     * simply return the current state of the user's login
     * @return boolean user's login status
     */
    public function isUserLoggedIn()
    {
        if (isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] == 1) {
            return true;
        }
        // default return
        return false;
    }
}
