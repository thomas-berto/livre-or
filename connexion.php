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
</header>
<main>
		
				<section> 
				<form class="formu" method="post">
						<div class="titre">
						<legend>Connexion</legend>
					</div>
			
						<input type="text" name="login" placeholder="login"required/>
						
						<input type="password" name="pass"  placeholder="mot de passe"required/>
		
						<input type="submit" value="Connexion" name="Connexion"required/>
						
					
				</form>
</section>
</main>
</body></html>

	<?php

if(isset($_POST["Connexion"]))
{

	$login=$_POST["login"];
	$password=$_POST["pass"];
	$connexion=mysqli_connect("localhost","root","","livreor");
	$requete = "SELECT * FROM utilisateurs WHERE login='$login'";
	$query=mysqli_query($connexion,$requete);
	$resultat=mysqli_fetch_all($query);

	
  if(!empty($resultat))
  {

    if ($password == $resultat[0][2])
    {
    	session_start();
      $_SESSION['id']=$resultat[0][0];
      $_SESSION['login']=$resultat[0][1];
    mysqli_close($connexion);
    header('Location: livre-or.php');
    
    }

  }
}

?>