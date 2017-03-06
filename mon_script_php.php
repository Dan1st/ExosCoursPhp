<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ma page web</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <?php include("includes/menu.php"); ?>
        <h2>Page de test</h2>
        
        <p>
            Cette page contient du code HTML avec des balises PHP.<br />
            <?php echo "Cette phrase est générée par PHP." ?>
            Voici quelques petits tests :
        </p>
        
        <ul>
        	<li>Texte en bleu</li>
        	<li>Texte en rouge</li>
        	<li>Texte en vert</li>
        </ul>
        
        <?php
           echo "Cette phrase est aussi générée par PHP."
        ?>

        <?php echo "Cette ligne a été écrite \"uniquement\" en PHP."; ?>

        <?php
            $age_du_visiteur = 17;
            echo 'Le visiteur a ' . $age_du_visiteur . ' ans';
        ?>

        <?php
            $age = 13;
 
            if ($age <= 12) // SI l'âge est inférieur ou égal à 12
        {
            echo "Salut gamin ! Bienvenue sur mon site !<br />";
            $autorisation_entrer = "Oui";
        }
            else // SINON
        {
            echo "Ceci est un site pour enfants, vous êtes trop vieux pour pouvoir  entrer. Au revoir !<br />";
            $autorisation_entrer = "Non";
        }
 
            echo "Avez-vous l'autorisation d'entrer ? La réponse est : $autorisation_entrer";
        ?>

       <?php
            $coordonnees = array (
                'prenom' => 'François',
                'nom' => 'Dupont',
                'adresse' => '3 Rue du Paradis',
                'ville' => 'Marseille');

            if (array_key_exists('nom', $coordonnees))
            {
                echo 'La clé "nom" se trouve dans les coordonnées !';
            }

            if (array_key_exists('pays', $coordonnees))
            {
                echo 'La clé "pays" se trouve dans les coordonnées !';
            }
        ?>

        <?php
// Enregistrons les informations de date dans des variables

$jour = date('d');
$mois = date('m');
$annee = date('Y');

$heure = date('H');
$minute = date('i');

// Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . 'et il est ' . $heure. ' h ' . $minute;
?>



        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
