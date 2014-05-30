<?php

/**
 * Class registration
 * handles the user registration
 */
class RegistrationStudent
{
    /**
     * @var object $db_connection The database connection
     */
    private $db_connection = null;
    /**
     * @var array $errors Collection of error messages
     */
    public $errors = array();
    /**
     * @var array $messages Collection of success / neutral messages
     */
    public $messages = array();

    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$registration = new Registration();"
     */
    public function __construct()
    {
        if (isset($_POST["register"])) {
            $this->registerNewUser();
        }
    }

    /**
     * handles the entire registration process. checks all error possibilities
     * and creates a new user in the database if everything is fine
     */
    private function registerNewUser()
    {
        if (empty($_POST['student_name'])) {
            $this->errors[] = "Inget användarnamn";
        } elseif (empty($_POST['student_password_new']) || empty($_POST['student_password_repeat'])) {
            $this->errors[] = "Inget lösenord";
        } elseif ($_POST['student_password_new'] !== $_POST['student_password_repeat']) {
            $this->errors[] = "Lösenord och repetera lösenord är inte likadana";
        } elseif (strlen($_POST['student_password_new']) < 6) {
            $this->errors[] = "Lösenordet måste vara minst 6 tecken";
        } elseif (strlen($_POST['student_name']) > 64 || strlen($_POST['student_name']) < 2) {
            $this->errors[] = "Användarnamnet kan inte vara kortare än 2 eller längre än 64 tecken.";
        } elseif (!preg_match('/^[a-z\s-]{2,64}$/i', $_POST['student_name'])) {
            $this->errors[] = "Användarnamne matchar inte mönstret: bara a-Ö är tillåtet, 2 till 64 tecken.";
        } elseif (empty($_POST['student_email'])) {
            $this->errors[] = "Email kan inte vara tom.";
        } elseif (strlen($_POST['student_email']) > 64) {
            $this->errors[] = "Email kan inte vara längre än 64 tecken.";
        } elseif (!filter_var($_POST['student_email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = "Din email är inte i ett godkänt format.";
        } elseif (!empty($_POST['student_name'])
            && strlen($_POST['student_name']) <= 64
            && strlen($_POST['student_name']) >= 2
            && preg_match('/^[a-z\s-]{2,64}$/i', $_POST['student_name'])
            && !empty($_POST['student_email'])
            && strlen($_POST['student_email']) <= 64
            && filter_var($_POST['student_email'], FILTER_VALIDATE_EMAIL)
            && !empty($_POST['student_password_new'])
            && !empty($_POST['student_password_repeat'])
            && ($_POST['student_password_new'] === $_POST['student_password_repeat'])
        ) {
            // create a database connection
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // change character set to utf8 and check it
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // if no connection errors (= working database connection)
            if (!$this->db_connection->connect_errno) {

                // escaping, additionally removing everything that could be (html/javascript-) code
                $student_name = $this->db_connection->real_escape_string(strip_tags($_POST['student_name'], ENT_QUOTES));
                $student_email = $this->db_connection->real_escape_string(strip_tags($_POST['student_email'], ENT_QUOTES));

                $student_password = $_POST['student_password_new'];

                // crypt the user's password with PHP 5.5's password_hash() function, results in a 60 character
                // hash string. the PASSWORD_DEFAULT constant is defined by the PHP 5.5, or if you are using
                // PHP 5.3/5.4, by the password hashing compatibility library
                $student_password_hash = password_hash($student_password, PASSWORD_DEFAULT);

                // check if user or email address already exists
                $sql = "SELECT * FROM student WHERE student_name = '" . $student_name . "' OR email = '" . $student_email . "';";
                $query_check_student_name = $this->db_connection->query($sql);

                if ($query_check_student_name->num_rows == 1) {
                    $this->errors[] = "Sorry, that username / email address is already taken.";
                } else {
                    // write new user's data into database
                    $sql = "INSERT INTO student (student_name, password, email)
                            VALUES('" . $student_name . "', '" . $student_password_hash . "', '" . $student_email . "');";
                    $query_new_student_insert = $this->db_connection->query($sql);

                    // if user has been added successfully
                    if ($query_new_student_insert) {
                        $this->messages[] = "Ditt konto har skapats! Du kan nu logga in.";
                    } else {
                        $this->errors[] = "Ledsen, men registreringen misslyckades. Var vänlig att gå tillbaka och försök igen.";
                    }
                }
            } else {
                $this->errors[] = "Ingen databasanslutning.";
            }
        } else {
            $this->errors[] = "Ett okänt fel har inträffat.";
        }
    }
}
