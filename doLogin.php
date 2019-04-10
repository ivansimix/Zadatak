<?php



function connect_sql() {
    $link = mysqli_connect("localhost", "root", "");
    if ( mysqli_connect_errno() ) {
        
        die ('Failed to connect to MySQL: ' . mysqli_connect_error());
    }
    mysqli_select_db($link, "zadatak");
    return $link;

}

session_start();



$email = $_POST['email'];
$pass = $_POST['pass'];


if ($email == null || $pass == null) {

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
    
    
}


$link = connect_sql(); 

$realpass=mysqli_fetch_assoc(mysqli_query($link, "select password from users where email='$email'"));

if ($realpass == null)  {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
	exit();
}

$hashedpass = crypt($pass, $realpass['password']);


if (hash_equals($hashedpass, $realpass['password']) ) {
    $_SESSION['loggedin'] = TRUE;
	$_SESSION['name'] = $_POST['email'];
    header('Location: ' . "homepage.php");
    exit();
    
}

else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}












?>
