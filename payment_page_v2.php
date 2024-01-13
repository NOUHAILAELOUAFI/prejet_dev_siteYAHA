<html>
    <head>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>page de paiement</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js'></script>
    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .inlineimage {
            max-width: 470px;
            margin-right: 8px;
            margin-left: 10px
        }

        .images {
            display: inline-block;
            max-width: 98%;
            height: auto;
            width: 22%;
            margin: 1%;
            left: 20px;
            text-align: center
        }
    </style>
</head>



<body style="background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20231130/pngtree-vintage-gray-paper-texture-background-image_13821100.png');">
<div class="container">
        <div class="page-header text-center">
            <h1>Credit Card Payment Gateway</h1>
        </div>
        <!-- Credit Card Payment Form - START -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <h3 class="text-center">Payment Details</h3>
                                <div class="inlineimage"> <img class="img-responsive images"
                                        src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Mastercard-Curved.png">
                                    <img class="img-responsive images"
                                        src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Discover-Curved.png">
                                    <img class="img-responsive images"
                                        src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Paypal-Curved.png">
                                    <img class="img-responsive images"
                                        src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/American-Express-Curved.png">
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">

                            <form  method="post" action="payment_page_v2.php" >
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group"> <label>CARD NUMBER</label>
                                            <div class="input-group">
                                                 
                                            <input type="text" class="form-control" name="CARD_NUMBER" /> 
                                            <span class="input-group-addon"><span class="fa fa-credit-card"></span>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-7 col-md-7">
                                        <div class="form-group"> <label><span class="hidden-xs">EXPIRATION</span>
                                        <span class="visible-xs-inline"></span> DATE</label> 
                                                    
                                                    <input type="text" name="EXPIRATION"
                                                class="form-control" placeholder="MM / YY" /> </div>
                                    </div>
                                    <div class="col-xs-5 col-md-5 pull-right">
                                        <div class="form-group"> <label>CV CODE</label> <input type="tel" name="CV_CODE"
                                                class="form-control" placeholder="CVC" /> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group"> <label>CARD OWNER</label> 
                                        
                                        <input type="text" name="CARD_OWNER"
                                                class="form-control" placeholder="Card Owner Name" name="CARD_OWNER" /> </div>
                                    </div>
                                </div>

                                <div class="panel-footer">
                            <div class="row">
                                <div class="col-xs-12"> 
                                    <input type="submit" class="btn btn-success btn-lg btn-block" value="confirm payment">
                                        </div>
                            </div>
                        </div>
                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
 
<?php


// Informations de connexion à la base de données
$host = "localhost"; 
$dbname = "dbyaha";
$username = "root";
$password = "";


if (isset($_POST['CARD_NUMBER']) 
and isset($_POST['EXPIRATION']) 
and isset($_POST['CV_CODE']) 
and isset($_POST['CARD_OWNER'])){

    try {
        // Connexion à la base de données MySQL avec PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        
        // Définir le mode d'erreur PDO sur exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        echo 'connected ok!';

        // Récupérer les données du formulaire
        $cardNumber = isset($_POST['CARD_NUMBER']) ? $_POST['CARD_NUMBER'] : '';
        $expiration = isset($_POST['EXPIRATION']) ? $_POST['EXPIRATION'] : '';
        $cvCode = isset($_POST['CV_CODE']) ? $_POST['CV_CODE'] : '';
        $cardOwner = isset($_POST['CARD_OWNER']) ? $_POST['CARD_OWNER'] : '';
        
        // Vérifier si tous les champs sont remplis
        if (!empty($cardNumber) && !empty($expiration) && !empty($cvCode) && !empty($cardOwner)) {
            // Préparer la requête d'insertion
            $stmt = $pdo->prepare("INSERT INTO paiement (card_number, expiration, cv_code, card_owner) VALUES (?, ?, ?, ?)");

            // Exécuter la requête avec les valeurs du formulaire
            $stmt->execute([$cardNumber, $expiration, $cvCode, $cardOwner]);

            echo "Données insérées avec succès dans la table paiement.";
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