<?php
session_start();
$dsn= 'mysql:host=localhost;dbname=business_contact_list';

$username = 'varin';
$password= 'password';

$db = new PDO($dsn, $username, $password);


			if(isset($_POST["prop_id"]))
							{
							
								$id = $_POST['prop_id']  ;
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
								echo $res['contact_no']."</br>";?>
								<img id="photo" src="<?php  echo $imageurl?>">
				<?php
							}
				?>
				