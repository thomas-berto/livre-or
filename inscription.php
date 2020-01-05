<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title>Inscription</title>
	</head>




<body>
		

<header class="topnav">
 <nav>
<ul>
<?php include('header.php') ?>
</ul>
 </nav>
</header>			<main>	
				<section >
				<form  class="formu" method="post">
						<div class="titre">
						<legend>Inscription</legend>
					</div>
				
						<input type="text" name="login" placeholder="login"required/>
						
						<input type="password" name="pass"  placeholder="mot de passe"required/>
						
						<input type="password" name="confirmpass" placeholder="confirme mot de passe"required/></p>
						
						<input type="submit" value="Inscription" name="inscription"required/>
					
						
				</form>
			
</section>
</main>
</body>
</html>

<?php

if(isset($_POST["inscription"]))
{

	$login=$_POST["login"];
	$password=$_POST["pass"];
	$confirmpassword=$_POST["confirmpass"];

		if($password==$confirmpassword)
		{
		
		$connexion=mysqli_connect("localhost","root","","livreor");
		$requete = 	"INSERT INTO utilisateurs (id,login,password) values (NULL,'$login','$password')";
		$query=mysqli_query($connexion, $requete);
		
	
		mysqli_close($connexion);
		header('Location: connexion.php');

		}
		


}

?>



