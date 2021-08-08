<?php

session_start();
$pdo =  new PDO('mysql:host=localhost;dbname=projet_fin_etude;charset=utf8', 'root', '');

$articles = $pdo->query('SELECT * FROM articles');
$as = $pdo->query('SELECT * FROM articles');



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
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/main.css">

  
</head>
<body>




    <!-- navbar -->
    <nav class="navigation">
        <div class="container">
            <div class="navigation-content">

                <div class="menunav--active" id="categorie">
                    <img src="icones/menu1.svg" alt="menu">
                </div>

                <div class="logo">
                    <a href="index.php">
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
                                        <a href="connexion.html">Se connecter</a>
                                    </li>
                                    <!-- <p>ou</p> -->
                                    <hr>
                                    <li>
                                        <a href="Creercompte.html">Créer un compte</a>
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
                    <a href="Creercompte.html">Inscription</a>
                    <a href="connexion.html">Connexion</a>
                    <!-- <a href="Creercompte.html">Créer un compte</a> -->
                    <a href="commandeliste.html">Votre commande</a>
                    <a href="commandecompte.html">Votre compte</a>
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

    <!-- header -->
    <!-- header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="header-content__menu">
                            <div class="head" id="categorie">
                                <img src="icones/menu.svg" alt="menu">
                                <h2>Toutes catégories</h2>
                            </div>
                            <ul class="list-menu">
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
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 dispNone">
                        <form action="" class="form-search">
                            <div class="form-search--group">
                                <input type="search" placeholder="Cherchez un produit ,une marque ou une catégorie">
                                <button class="sitebtn--red">Rechercher</button>
                            </div>

                            <div class="form--categorieInd">
                                <ul>
                                    <a href="#">
                                        <li>Electromenager</li>
                                    </a>
        
                                    <a href="#">
                                        <li>Electronique</li>
                                    </a>
        
                                    <a href="#">
                                        <li>Bouteilles</li>
                                    </a>
                                    
                                </ul>
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8" >
                        <div class="header-content__carousel">
                            <div class="textAbsolute">
                                <h2 class="mb-5">Le meilleur de l'électromenager</h2>
                                <a href="#">
                                    <button class="sitebtn--blue">
                                        Découvrir
                                    </button>
                                </a>
                            </div>
                            <img src="images/Tea-Cups-Mockup3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- div support -->

    <section class="support">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="support--card">
                        <div class="support--card__illustration">
                            <img src="icones/customer-service.svg" alt="img-support">
                        </div>

                        <div class="support--card__description">
                            <h3>Support de qualité</h3>
                            <p> 6 jours / 7 de 09H à 18H</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="support--card">
                        <div class="support--card__illustration">
                            <img src="icones/best-price.svg" alt="img-support">
                        </div>

                        <div class="support--card__description">
                            <h3>Meilleurs prix garantis</h3>
                            <p>Produit de qualité</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="support--card">
                        <div class="support--card__illustration">
                            <img src="icones/credit-card.svg" alt="img-support">
                        </div>

                        <div class="support--card__description">
                            <h3>Achats 100% sécurisés</h3>
                            <p>Orange, MTN, Moov Money</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- p-exclusifs -->
    <section class="p-exclusifs">
        <!-- div intersections -->
        <div class="intersections">
            <div class="container d-flex align-items-center justify-content-between">
                <h2>Produits Exclusifs</h2>
                <a href="#">Voir plus </a>
            </div>
        </div>

        <div class="container">
            <div class="row">

            <?php foreach($articles as $key => $article):?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 " data-aos="zoom-in-up">
                    <div class="card-products">
                        <div class="reduce-price">
                            <p><strong>-35%</strong></p>
                        </div>

                        <div class="card-products--illustration">
                      
                               <img src=" <?php echo $article['image']  ?>" alt="produits-img"  class="img-fluid">
                       
                        </div>

                        <div class="card-products--description">
                            <p><?php echo  "$article[name]";?></p>
                            <h3><?php echo  "$article[price]";?></h3>
                            <del><?php $prix = $article['price']+(0.35*$article['price']) ; echo $prix;?> frs</del>
                        </div>

                        <div class="card-products--button">
                            <a href="details-produits.php?id=<?php echo  "$article[id]";?>">
                                <button class="sitebtn--blue">
                                    Acheter
                                </button>
                            </a>
                        </div>

                        <div class="overlay">
                            <a href="panier.html">
                                <button type="button" class="btn btn-secondary" title="voir le panier">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </a>
                            <a href="details-produits.php?id=<?php echo  "$article[id]";?>">
                                <button type="button" class="btn btn-secondary" title="voir les details">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <?php   endforeach ?>


            <div class="offers-week">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 offer1 " data-aos="fade-up">
                        <a href="#">
                            <img src="images/COVER1.png" alt="img-week">
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 offer2" data-aos="fade-up">
                        <a href="#">
                            <img src="images/89712812_1967914606675108_3001929527107518464_n.png" alt="img-week">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- p-populaires -->
    <section class="p-populaires">
         <!-- div intersections -->
         <div class="intersections">
            <div class="container d-flex align-items-center justify-content-between">
                <h2>Produits populaires</h2>
                <a href="#">Voir plus </a>
            </div>
        </div>

        <div class="container">
            <div class="row">
            <?php foreach($as as $key => $article):?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 " data-aos="zoom-in-up">
                    <div class="card-products">
                        <div class="reduce-price">
                            <p><strong>-35%</strong></p>
                        </div>

                        <div class="card-products--illustration">
                      
                               <img src=" <?php echo $article['image']  ?>" alt="produits-img"  class="img-fluid">
                       
                        </div>

                        <div class="card-products--description">
                            <p><?php echo  "$article[name]";?></p>
                            <h3><?php echo  "$article[price]";?></h3>
                            <del><?php $prix = $article['price']+(0.35*$article['price']) ; echo $prix;?> frs</del>
                        </div>

                        <div class="card-products--button">
                            <a href="details-produits.php?id=<?php echo  "$article[id]";?>">
                                <button class="sitebtn--blue">
                                    Acheter
                                </button>
                            </a>
                        </div>

                        <div class="overlay">
                            <a href="panier.html">
                                <button type="button" class="btn btn-secondary" title="voir le panier">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </a>
                            <a href="details-produits.php?id=<?php echo  "$article[id]";?>">
                                <button type="button" class="btn btn-secondary" title="voir les details">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <?php   endforeach ?>


            </div>
        </div>
    </section>

    <!-- partenaires -->
   
    <section class="marques">
         <!-- div intersections -->
        <div class="intersections">
            <div class="container d-flex align-items-center justify-content-between">
                <h2>Meilleurs marques</h2>
            </div>
        </div>
        <div class="container  py-5">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="marque-card">
                       <a href="#">
                            <img src="images/smart.jpg" class="img-fluid" alt="marque">
                       </a>
                    </div>
                </div>

                <div class="item">
                    <div class="marque-card">
                       <a href="#">
                            <img src="images/9.jpg" class="img-fluid" alt="marque">
                       </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row" data-aos="fade-up">
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
                    <p>© 2021 <span><a href="#">IBL</a></span> . Tous Droits Réservés. Powered by <span><a href="#">CISSE</a></span></p>
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


        //partenaire
        var owl = $('.owl-carousel');
        owl.owlCarousel({
    items: 5,
    loop: true,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        540: {
            items: 3,
        },
        600: {
            items: 3,

        },
        1000: {
            items: 4,

        },
        1300: {
            items: 5,
        }
    }
});
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








</body>
</html>