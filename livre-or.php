
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

    $limite = 5;
	if (isset($_GET["page"]))
	{
	$page  = $_GET["page"];
    }
	else
	{ 
	$page=1;
    }	

    $debut = ($page-1) * $limite;
	$connexion = mysqli_connect("localhost", "root", "", "livreor");
	$requete = "SELECT login,commentaire,date FROM `commentaires`
	INNER JOIN utilisateurs ON commentaires.id_utilisateur = utilisateurs.id  ORDER BY date DESC LIMIT $debut, $limite"; 
	$query=mysqli_query($connexion, $requete);
	$resultat=mysqli_fetch_all($query);
	
	$pg = "SELECT COUNT(id) FROM  commentaires ";
	$pg2 = mysqli_query($connexion, $pg);
	$row = mysqli_fetch_row($pg2);
	$total = $row[0];
	$total_pages = ceil($total / $limite);

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
		</tr>";
		

	}?>
	 	    </table>
	    </section>
		
		<section class='page'>
		
		<?php
		for ($i=1; $i<=$total_pages; $i++)
		{
			echo" <a  href='livre-or.php?page=".$i."'>".$i."</a>"; 
		}
        ?>
        </section>
<div>
	<a href="commentaire.php"> <h1>ecrire un commentaire</h1></a>
</div>
</main>

<footer>
		Tout droit réserver . 2020 

		</footer>
</body>
		

</html>


