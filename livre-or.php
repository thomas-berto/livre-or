
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title>Inscription</title>
	</head>

<body >

<header class="topnav">
 <nav>
<ul>
<?php include('header.php') ?>
</ul>
 </nav>
</header>

<main>
	<h1>Commentaires des membres</h1>
<section>
<table class="livreor" >
<?php
	$connexion = mysqli_connect("localhost", "root", "", "livreor");
	$requete = "SELECT login,commentaire,date FROM `commentaires` INNER JOIN utilisateurs ON commentaires.id_utilisateur = utilisateurs.id ORDER by date DESC"; 
	$query=mysqli_query($connexion, $requete);
	$resultat=mysqli_fetch_all($query);

	foreach ($resultat as $key ) 
	{
		echo"
		<tr>
		 <th>posté le:</th>
		 <th>par:</th>
		 <th> com</th>
		</tr>
		
	<tr>
	  <td class='date'> ".$key[2]."</td>
		<td class='nom'>".$key[0]."</td>
	 <td class='tex'> ".$key[1]."</td>
	    </tr>
	 "
			  ;
	}
?> 	 </table>	


</section><div>
	<a href="commentaire.php"> <h1>ecrire un commentaire</h1></a>
</div>
</main>
</body>
		

</html>


