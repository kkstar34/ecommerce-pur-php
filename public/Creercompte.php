<?php



$conn =  new PDO('mysql:host=localhost;dbname=projet_fin_etude;charset=utf8', 'root', '');
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(!empty($_POST)){

  $request = $conn->prepare("INSERT INTO users(nom , prenom, e_mail, mot_de_passe, numero) VALUES(:nom, :prenom, :e_mail, :mot_de_passe,:numero)");
  $request->bindValue(":nom", $_POST["nom"]);
  $request->bindValue(":prenom", $_POST["prenom"]);
  $request->bindValue(":e_mail", $_POST["e_mail"]);
  $request->bindValue(":mot_de_passe", $_POST["mot_de_passe"]);
  $request->bindValue(":numero", $_POST["numero"]);

  $save = $request->execute();
  if($save){
     
header("Location:connexion.php");  
exit;


}

}








?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ILB shop</title>

    <!-- add icon link -->
    <link rel="icon" href="images/my-shop-logo-1606167361.png" type="image/x-icon">

    <!-- style -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

        <!-- nav -->
    <!-- navbar -->
    <nav class="navigation">
        <div class="container">
            <div class="navigation-content">

                <div class="menunav--active" id="categorie">
                    <img src="icones/menu1.svg" alt="menu">
                </div>

                <div class="logo">
                    <a href="index.html">
                        <img src="images/my-shop-logo-1606167361.png" alt="img-logo">
                    </a>
                </div>
                <form action="" class="form-search form-none">
                    <div class="form-search--group">
                        <input type="search" placeholder="Cherchez un produit ,une marque ou une catégorie">
                        <button class="sitebtn--red">Rechercher</button>
                    </div>
                </form>
                <div class="menu">
                    <ul>
                        <li>
                            <a href="#" class="item-menu">
                                <div class="icone">
                                    <img src="icones/user.svg" alt="icone">
                                </div>
                                <span> Se connecter</span>
                                <div class="iconeArrow">
                                    <img src="icones/caret-down.svg" alt="arrow">
                                </div>
                            </a>
                            <div class="menu-hover">
                                <ul>
                                    <li>
                                        <a href="connexion.php">Se connecter</a>
                                    </li>
                                    <!-- <p>ou</p> -->
                                    <hr>
                                    <li>
                                        <a href="Creercompte.php">Créer un compte</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="commandeliste.html">Votre commande</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="commandecompte.html">Votre compte</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="item-menu">
                                <div class="icone">
                                    <img src="icones/question.svg" alt="icone">
                                </div>
                                <span>Aide</span>
                                <div class="iconeArrow">
                                    <img src="icones/caret-down.svg" alt="arrow">
                                </div>
                            </a>
                            <div class="menu-hover">
                                <ul>
                                    <li>
                                        <a href="#">Centre d'appel</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="#">FAQ</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="#">Tchatter</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="panier.php" class="item-menu">
                                <div class="icone">
                                    <img src="icones/cart.svg" alt="icone">
                                    <div class="count"><span><?php if(isset($_SESSION["cart_item"])){
                                        echo count($_SESSION["cart_item"]); 
                                    }else{
                                        echo 0;
                                    }  ?></span></div>
                                </div>
                                <span>Panier</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="icon-menu-op">
                    <img src="icones/user.svg" alt="user">
                </div>
            </div>
        </div>
    </nav>

   <!-- responsive sidebar -->
   <div class="sidebar">
    <div class="icon-close-sidebar">
        <img src="icones/cancel (1).svg" alt="iconexit">
    </div>
    <div id="accordion">
    <div class="card-accordion">
        <div class="card-header-accordion" id="headingOne">
            <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                aria-controls="collapseOne">
                Se connecter
                <div class="icon">
                    <img src="icones/arrow.svg" alt="arrow">
                </div>
            </span>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <a href="Creercompte.php">Inscription</a>
                <a href="connexion.php">Connexion</a>
                <!-- <a href="Creercompte.php">Créer un compte</a> -->
                <a href="commandeliste.php">Votre commande</a>
                <a href="commandecompte.php">Votre compte</a>
            </div>
        </div>
    </div>
    <div class="card-accordion">
        <div class="card-header-accordion" id="headingTwo">
            <span data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                aria-controls="collapseTwo">
                Aide
                <div class="icon">
                    <img src="icones/arrow.svg" alt="arrow">
                </div>
            </span>
        </div>

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                <a href="#">FAQ</a>
                <a href="#">Centre d'appel</a>
                <a href="#">Tchatter</a>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- navbar -->
    <!-- navbar -->

    <!--  -->
        <!-- header -->
    <div class="container">
        <div class="header-content__menu header-content__menu1">
            <ul class="list-menu list-menu1">
                <li>
                    <a href="#">
                        <div class="icon">                                         
                            <img src="icones/blender.svg" alt="catégories">  
                        </div>
                        <span>Electromenager</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="icon">
                            <img src="icones/television.svg" alt="catégories">  
                        </div>
                        <span>Télévision</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="icon">
                            <img src="icones/smartphone.svg" alt="catégories">  
                        </div>
                        <span>Téléphone</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="icon">
                            <img src="icones/laptop.svg" alt="catégories">  
                        </div>
                        <span>Informatique</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="icon">
                            <img src="icones/usb-cable.svg" alt="catégories">  
                        </div>
                        <span>Electronique</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="icon">
                            <img src="icones/headphones.svg" alt="catégories">  
                        </div>
                        <span>Audio &amp; hifi</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="icon">
                            <img src="icones/pen-drive.svg" alt="catégories">  
                        </div>
                        <span>Accessoires</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="icon">
                            <img src="icones/more (1).svg" alt="catégories">  
                        </div>
                        <span>Autres Catégories</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--  -->
    <div class="container">

    <!-- debut formulaire -->
        <form method='post'  class="bg-white my-5">
            <div class="form-big py-5">
                <div class="form-title">
                    <h3 class="text-left">Créer son compte</h3>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="group ">      
                            <input type="text" name='nom' required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Nom</label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="group ">      
                            <input type="text" name="prenom" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Prenom</label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="group">      
                            <input type="email"name="e_mail" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Votre e-mail</label>
                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">  
                        <div class="group">      
                            <input type="password" id="password-field" name="mot_de_passe"  required >
                            <span toggle="#password-field" class="fa fa-eye field-icon toggle-password"></span>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Mot de passe</label>
                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 mt-2" >
                                <div class="prefix">
                                    <h4>Prefixe</h4>
                                    <p>+225</p>
                                </div>
                            </div>

                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" >
                                <div class="group">      
                                    <input type="tel"name="numero" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Numero (optionnel)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="mdp-o">
                    <div class="connect">
                        <form action="#">
                            <p>
                              <input type="radio" id="test2" name="radio-group" >
                              <label for="test2">J'accepte les conditions d'utilisations?</label>
                            </p>
        
                        </form>
                    </div>
                </div>
                <!--  -->
                <div class="form--button">
                    <button class="sitebtn--blue" type="submit">
                        S'inscrire
                    </button>

                   
                </div>

            <!-- fin du formulaire -->
                <div class="av">
                    <p>Vous possédez déjà un compte ?</p>
                    <a href="connexion.php">Connectez-vous</a>
                </div>
            </div>
        </form>   
    </div>

    <!-- footer -->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 mb-5" >
                        <a href="index"><img src="images/my-shop-logo-1606167361.png" alt="footer-logo" class="img-fluid"></a>

                        <div class="B-help">
                            <h3>Besoin d'aide?</h3>
                            <p><strong>Appelez:</strong></p>
                            <p>(+225) 07 88 00 86 00</p>
                            <p>(+225) 25 20 01 87 01</p>
                        </div>
                    </div>
    
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="newUser">
                            <h3>NOUVEAU SUR ILB ?</h3>
                            <h3>Inscrivez-vous a nos communications pour recevoir <br> nos meilleurs offres</h3>
                            <p>Nous ne partagerons jamais vos adresse email avec un tiers.</p>
                        </div>

                        <div class="newsletter">
                            <form action="">
                                <div class="form-group">
                                    <img src="icones/email.png" alt="icone-img" class="img-fluid">

                                    <input type="text" placeholder="Entrez votre adresse e-mail">
                                </div>

                                <button class="sitebtn--red">
                                    s'abonner
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="google-play">
                            <h3>IBL dans votre poche!</h3>
                            <p>Téléchargez notre application gratuite</p>

                            <div class="google-play--cards">
                                <a href="#">
                                    <img src="icones/store_1.jpg" alt="google-play">
                                </a>

                                <a href="#">
                                    <img src="icones/store_2.jpg" alt="google-play">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <h2>Services clients</h2>

                        <ul>
                            <li>
                                <a href="#">Super marchés</a>
                            </li>

                            <li>
                                <a href="#">Aide & FAQ</a>
                            </li>

                            <li>
                                <a href="#">Options & frais de livraison</a>
                            </li>

                            <li>
                                <a href="#">Frais de retour</a>
                            </li>

                            <li>
                                <a href="#">IBL Entreprise</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <h2>A propos</h2>

                        <ul>
                            <li>
                                <a href="#">Qui sommes nous ?</a>
                            </li>

                            <li>
                                <a href="#">Conditions générales d'utilisation</a>
                            </li>

                            <li>
                                <a href="#">Politique de confidentialité</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <h2>Découvrez plus</h2>

                        <ul>
                            <li>
                                <a href="#">Téléphonie</a>
                            </li>

                            <li>
                                <a href="#">Audio</a>
                            </li>

                            <li>
                                <a href="#">Informatique</a>
                            </li>

                            <li>
                                <a href="#">Objets connectés</a>
                            </li>

                            <li>
                                <a href="#">Offres du moment</a>
                            </li>

                        </ul>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <h2>Produits</h2>

                        <ul>
                            <li>
                                <a href="#">Promotions</a>
                            </li>

                            <li>
                                <a href="#">Nouveaux Produits</a>
                            </li>

                            <li>
                                <a href="#">Meilleures ventes</a>
                            </li>

                            <li>
                                <a href="#">Contactez-nous</a>
                            </li>

                            <li>
                                <a href="#">Plan du site</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="signature">
                    <p>© 2021 <span><a href="#">IBL</a></span> . Tous Droits Réservés. Powered by <span><a href="#">Adjemin</a></span></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- button retur top -->
    <!-- Button return top-->
    <a href="#header">
        <div class="button-return" id="btnReturn" hidden>
            <img src="icones/up-arrow.svg" alt="buttontop">
        </div>
    </a>
    <!-- Script -->
    <script src="js/jquery.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/btntop.js"></script>

    <script>
        // init aos
        AOS.init();
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/60343b529c4f165d47c603b5/1ev60fenp';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <script>
        $(".toggle-password").click(function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
        input.attr("type", "text");
        } else {
        input.attr("type", "password");
        }
        });
    </script>
</body>
</html>