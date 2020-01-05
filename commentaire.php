

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title>Commentaires</title>
	</head>
	

<body class="inscription">
		

<header class="topnav">
 <nav>
<ul>
<?php include('header.php') ?>
</ul>
 </nav>
</header>		
<main>
	<section>
<form class="formu" method="post" >
			<div class="titre">
				<legend>Ajouter un commentaire</legend>
            </div> 
					<textarea name="commentaire"  placeholder="ÉCRIVEZ VOTRE COMMENTAIRE"></textarea>
					<input type="submit" name="submit">
				</form>
</section>
</main>
</body>
</html>

				<?php 
					if(isset($_POST['submit']))
					{
						$utilisateur = $_SESSION['id'];
						$commentaire = $_POST['commentaire'];
						$commentaire2 = addslashes($commentaire);
						
						$connexion = mysqli_connect("localhost", "root", "", "livreor");
						$requete= "INSERT INTO commentaires (commentaire,id_utilisateur, date) VALUES ('$commentaire2','". $utilisateur."', NOW())";

						mysqli_query($connexion, $requete);
						mysqli_close($connexion);
						header("Location: livre-or.php");
						
					}
				?>