<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }

        form {
            max-width: 400px;
            margin: auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            background-color:#d9cbcb;
        }

        button {
            background-color:#d9cbcb;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
        
    </style>
</head>
<body style="background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20231130/pngtree-vintage-gray-paper-texture-background-image_13821100.png');">

    <h2>Contactez-nous</h2>

    <form action="contact_v1.php" method="post">
     
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>

        <label for="email">E-mail :</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit">Envoyer</button>
    
    </form>
     <?php
      // Informations de connexion à la base de données
       $host = "localhost"; // Changez ceci si votre base de données est sur un autre serveur
       $dbname = "dbyaha";
       $username = "root";
       $password = "";


       if (isset($_POST['name']) 
       and isset($_POST['email']) 
       and isset($_POST['message']) 
       ){

     try {
        // Connexion à la base de données MySQL avec PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        
        // Définir le mode d'erreur PDO sur exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Récupérer les données du formulaire
        $NAME = isset($_POST['name']) ? $_POST['name'] : '';
        $EMAIL = isset($_POST['email']) ? $_POST['email'] : '';
        $MESSAGE = isset($_POST['message']) ? $_POST['message'] : '';
        
        
        // Vérifier si tous les champs sont remplis
        if (!empty($NAME) && !empty($EMAIL) && !empty($MESSAGE)) {
            // Préparer la requête d'insertion
            $stmt = $pdo->prepare("INSERT INTO contact (name, email, message) VALUES (?, ?, ?)");

            // Exécuter la requête avec les valeurs du formulaire
            $stmt->execute([$NAME, $EMAIL, $MESSAGE ]);

            echo "votre message été bien enregistrer.";
        } else {
            echo "Veuillez remplir tous les champs du formulaire.";
        }
        } catch (PDOException $e) {
        // En cas d'erreur, afficher l'erreur
        echo "Erreur : " . $e->getMessage();
        }

      // Fermer la connexion à la base de données
       $pdo = null;

 


    }

     ?>

 </body>
</html>
