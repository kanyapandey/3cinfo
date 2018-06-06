
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
$First_Name = mysqli_real_escape_string($link,$_POST['First_Name']);
$Last_Name = mysqli_real_escape_string($link,$_POST['Last_Name']);
$Email_Address = mysqli_real_escape_string($link,$_POST['Email_Address']);
$Position = mysqli_real_escape_string($link,$_POST['Position']);
$Phone = mysqli_real_escape_string($link,$_POST['Phone']);

  $admin_email = "career@3Cinfotech.com";
  $First_Name = $_REQUEST['First_Name'];
  $Last_Name = $_REQUEST['Last_Name'];
  $Email_Address = $_REQUEST['Email_Address'];
  $Position = $_REQUEST['Position'];
  $Phone = $_REQUEST['Phone'];
  
  //send email
  mail($admin_email, "$First_Name", "$Last_Name", $Position, $Phone, "From:" . $Email_Address);

if(!empty($_POST['First_Name']) || !empty($_POST['Last_Name']) || !empty($_POST['Email_Address']) || !empty($_POST['Position']) || !empty($_POST['Phone'])){
$query = "INSERT INTO apply (First_Name,Last_Name,Email_Address,Position,Phone) VALUES ('$First_Name', '$Last_Name', '$Email_Address', '$Position', '$Phone')";

if(!mysqli_query($link,$query))
{
    die("DAMMIT");
}
else{ echo "<script> location.href='coming.php'; </script>";}

mysqli_close($link);

}

?>