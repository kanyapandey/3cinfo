
<?php
define('DB_NAME', 'info_tech');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_HOST', 'localhost');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS);

if(!$link)
{
    die('Could not connect to database: ' . mysqli_error());
}

$db_select = mysqli_select_db($link,DB_NAME);

if(!$db_select)
{
    die('Can\'t use ' . DB_NAME . ': ' . mysqli_error());
}

echo "HOLY EFF";
$name = mysqli_real_escape_string($link,$_POST['name']);
$subject = mysqli_real_escape_string($link,$_POST['subject']);
$email = mysqli_real_escape_string($link,$_POST['email']);
$message = mysqli_real_escape_string($link,$_POST['message']);

  //Email information
  $admin_email = "info@3Cinfotech.com";
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $message = $_REQUEST['message'];
  
  //send email
  mail($admin_email, "$subject", $message, "From:" . $email);
  
  //Email response

if(!empty($_POST['name']) || !empty($_POST['subject']) || !empty($_POST['email']) || !empty($_POST['message'])){
$query = "INSERT INTO contact_us (name,subject,email,message) VALUES ('$name', '$subject', '$email', '$message')";

if(!mysqli_query($link,$query))
{
    die("DAMMIT");
}
else{ echo "<script> location.href='coming.php'; </script>";}

mysqli_close($link);

}



?>