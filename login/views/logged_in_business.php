<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
Hej, <?php echo $_SESSION['user_name']; ?>. Du är inloggad.
</br></br>
<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
<a id="loggedIn" href="index.php?logout">Logga ut</a>
