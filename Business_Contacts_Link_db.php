<!----File name:Business_Contacts_Link_db.php--->
<!----Author's name:Varin Upadhyay--->
<!----File Description: This is the database file of Business_Contacts_Link.--->
<?php
session_start();
$dsn= 'mysql:host=localhost;dbname=business_contact_list';

$username = 'varin';
$password= 'password';

$db = new PDO($dsn, $username, $password);
//this section of code logs out the user
if(isset($_GET["login"])){
	if($_GET["login"])
	{
		$_SESSION["isloggedin"] = false;
		$_SESSION["username"] = "";
		/*session_destroy();*/
		return;
	}
}

	$username = $_POST["username"];
	$password = $_POST["password"];

	$query= "select * from `admin` where username = '".$username."' and  password = '".$password."'";    
	$records = $db->query($query);
	$userfound = false;
	foreach($records as $row)
	{
		$pass = $row['password']; 
		$userfound = true;
	}

	if($userfound)
	{
		if($password == $pass)
		{
			$_SESSION["isloggedin"] = true;
			$_SESSION["username"] = $username;
			echo "welcome: " . $_SESSION["username"];
			header("location:Business_contacts.php");
		}
		else
		{
			$_SESSION["isloggedin"] = false;
			$_SESSION["username"] = "guest";
			echo "password incorrect";
		}
	}
	else
	{
		$_SESSION["isloggedin"] == false;
		$_SESSION['err_msg']='Please enter the username and password';
		header("location:Business_Contacts_Link.php");
	}
?>