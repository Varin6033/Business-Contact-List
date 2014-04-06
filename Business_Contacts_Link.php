<!----File name:index.html.--->
<!-----Author's name:Varin Upadhyay--->
<!-------http://localhost/Project/index.html ---->
<!-------File Description: This is the index file of this project--->
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
		
		<div class="container">
		<!-----aside---->
		<aside>
			<p></p><br/><br/>
			<h3>Contacts</h3>
			<hr>
		<div id="inside">
			<h2>My Contacts</h2>
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
			<div id="banner">
			<h2>Log in<span></span></h2>
            <form id="feedback-form" action="Business_Contacts_Link_db.php" method="post">
               <fieldset>
			   <div class="field">
					<label>Username:</lable>
					<input type="text" value="" name="username"/>
					
			   </div>
			   <div class="field">
					<label>Password:</lable>
					<input type="password" value="" name="password">
				</div>
			   <div class="field1">
					<label><input type="submit" name="submit" value="Login"></label>
				</div>	
				</fieldset>
			</form>
			<?php
			if(isset($_SESSION['err_msg']))
			{
				echo "<font color='red'>".$_SESSION['err_msg']."</font>";
				unset($_SESSION['err_msg']);
			}
			?>
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