<!----File name:Business_contacts.php--->
<!----Author's name:Varin Upadhyay--->
<!----http://localhost/Project/Business_Contacts_Link.php ---->
<!----File Description: This is the login form.In which, user has to enter his/her username and password for accessing the database--->
<?php
session_start();
$dsn= 'mysql:host=localhost;dbname=business_contact_list';

$username = 'varin';
$password= 'password';

$db = new PDO($dsn, $username, $password);
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/Style.css">
<script type="text/javascript">

var image1 = new Image()
image1.src ="image/varin2.jpg";
var image2 = new Image()
image2.src ="image/Varin.jpg";
var image3 = new Image()
image3.src ="image/varin1.jpg";

</script>
	<title>My First Web page
	</title>
<body>
	<div id="container1">
		<!----nav---->
			<nav>
			<ul >
				<li><a href="index.html"> Home Page</a>
				<li><a href="About-me.html">About Me</a>
				<li><a href="Project-page.html">Projects</a></li>
				<li><a href="Service-page.html">Services</a></li>
				<li><a href="https://github.com/Varin6033/Business-Contact-List">Git Hub</a></li>
				<li><a href="Contact-me.html">Contact Me</a></li>
				<li><a href="Business_Contacts_Link.php">Business Contacts</a></li>
			</ul> 
			</nav>	
		
		<!----header---->
		<header>
		<image id="logo" src="image/varin_logo.png"></img>
		</header>
		<?php
		if(isset($_SESSION["isloggedin"]))
		{
			if(!$_SESSION["isloggedin"])
			{
				$_SESSION['err_msg']='Not Authorized';
				header("Location:Business_Contacts_Link.php");
				return;
			}
		}
		else
		{
			$_SESSION['err_msg']='Not Authorized';
			header("Location:Business_Contacts_Link.php");	
			return;
		}
		?>
		<div class="container">
		<!-----aside---->
		<aside>
			<p></p><br/><br/>
			<h3>My contact</h3>
			<hr>
			<div id="inside">
			<div class="contacts">
			 <address>
			   <strong>Full Address:</strong>1901,Martin Grove Road,Etobicoke<br>
               <strong>City:</strong>Toronto<br>
			   <strong>Country:</strong>Canada<br>
               <strong>Telephone:</strong>+647-892-7203<br>
               <strong>Email ID:</strong>varin6033@gmail.com
            </address>
			</div>
		</div>
		</aside>
		
		<!----section---->
		<section id="content">
			<div class="inside">
				<?php
							if(isset($_GET["prop_id"]))
							{
							
								$id = $_GET['prop_id']  ;
								$query1="SELECT * FROM business_contacts where business_contacts_id='$id'";
								$result=$db->query($query1); 
							
								$res = $result->fetch();
       
								$image=$res["image"];
								$path="image/";
       
								$imageurl=$path.$image;
								echo $res['name']."</br>";
								echo $res['date_of_birth']."</br>";
								echo $res['profession']."</br>";
								echo $res['address']."</br>";
								echo $res['contact_no']."</br>";
								;?>
								<img id="photo" src="<?php  echo $imageurl?>">
				<?php
							}
				?> 
				
			<h3>Business Contact List</h3><h1><a href="logout.php">Logout</a></h1>
				<hr>
					<form action="Business_contacts_db.php" method="post">
					<ul class="projects">
						<li><h4><a href="Business_contacts.php?prop_id=1 ">Bill Gates</a></h4></li>
						<li><h4><a href="Business_contacts.php?prop_id=2 ">Carlos Slim</h4></li>
						<li><h4><a href="Business_contacts.php?prop_id=3 ">Mukesh Ambani </h4></li>
						<li><h4><a href="Business_contacts.php?prop_id=4 ">Warren Buffet </h4></li>
					</ul>
					</form>
			</div>
		</section>
		</div>
	</div>
		
		<!----footer---->
		<footer>		
		<div class="img">
			<a target="_blank" href="https://twitter.com"><img src="image/twitter.png" alt="Klematis"></a>
			<a target="_blank" href="https://ca.linkedin.com/"><img src="image/linkedin.png" alt="Klematis"></a>
			<a target="_blank" href="http://www.youtube.com/"><img src="image/youtube.png" alt="Klematis"></a>
			<a target="_blank" href="https://www.facebook.com/"><img src="image/facebook.png" alt="Klematis"></a>
		</div>
	
		<div id="copyright">Copyright By:Varin Upadhyay</div>
		</footer>
	
</body>
</html>
</html>