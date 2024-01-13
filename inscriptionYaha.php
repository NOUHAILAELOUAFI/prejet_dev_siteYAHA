
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="iscripStyle.css">
    <title>Inscription</title>
    <script langage="JavaScript">
         function verification() {
            if (document.getElementById("username").value == "") { alert("Veuillez taper votre nom d'utilisateur!"); return false;}
            if (document.getElementById("email").value == "") { alert("Veuillez entrer votre adresse e-mail!"); return false;}
           if (document.getElementById("email").value.indexOf('@') == -1) { alert("Adresse e-mail incorrecte!"); return false; }
           if (document.getElementById("password").value == "") { alert("Veuillez entrer votre mot de passe!"); return false;}    
        }
    </script>
</head>
<body  style="background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20231130/pngtree-vintage-gray-paper-texture-background-image_13821100.png');">

    <form action="inscriptionYaha.php" method="post"  onSubmit="verification()">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="email">Adresse e-mail:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="S'inscrire">
    </form>

	<?php
    // Validation et insertion des données dans la base de données (exemple simplifié)
    // connextion data base
    include('bdconnextion.php');

       if (isset($_POST['username']) and isset($_POST['email']) and isset($_POST['password']))
       {
        
        if(!empty($_POST['username']) and !empty($_POST['email']) and !empty($_POST['password']))
        {
        connextion();
        $sql1="select * from utilisateurs where email='".$_POST['email']."'";
		$reponse = $bdd->query($sql1);
	    $donnees = $reponse->fetch();
	
			if(empty($donnees))
			{   
				$sql2="insert into utilisateurs (username, email, password) values('".$_POST['username']."','".$_POST['email']."','".$_POST['password']."')";
				$bdd->exec($sql2);
                echo "Inscription réussie !";
				echo"<center>Utilisateur ".$_POST['username']." est ajouté avec succés</center>";
            
			}
			else
			echo "<center>Utilisateur existe déja !!!</center>";

    }
    
}

?>

</body>
</html>
