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
			
			<?php

	if(isset($_POST["inscription"]))
	{	
	
	    $login=$_POST["login"];
	    $connexion=mysqli_connect("localhost","root","","livreor");
	    $sql = "SELECT * FROM utilisateurs WHERE login='$login'";
	    $query=mysqli_query($connexion, $sql);
	    $req2 = mysqli_num_rows($query); 

	    if(($_POST['pass']!=$_POST['confirmpass']))
	    {
	     	echo"<p class='bug'>Mots de passes rentrés différents</p>";
	    }
	    else if($req2==1)
	    {
			echo "<p class='bug'>*Login existant</p>";
		}
		else
		{
			$password=$_POST["pass"];
			$password= sha1($password);

	        $confirmpassword=$_POST["confirmpass"];
			$requete ="INSERT INTO utilisateurs (id,login,password) values (NULL,'$login','$password')";
			$query = mysqli_query($connexion, $requete);
		}
    }  

?>

            </section>
        </main>
		<footer>
		Tout droit réserver . 2020 

		</footer>
    </body>
</html>


