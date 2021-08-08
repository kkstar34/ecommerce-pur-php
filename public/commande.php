<?php

session_start();

$conn =  new PDO('mysql:host=localhost;dbname=projet_fin_etude;charset=utf8', 'root', '');
$total_quantity = null;
$total_price = null;



if(isset($_POST['submit'])){

    $name= $_POST['name'];
    $email = $_POST['email'];
    $ville = $_POST['ville'];
    $lieu = $_POST['lieu'];
    $phone_number = $_POST['phone_number'];

    if(!empty($name) && !empty($email) && !empty($ville) && !empty($lieu) && !empty($phone_number)){
        
        $request = $conn->prepare("INSERT INTO orders(name , slug, details, price, description, image, images) VALUES(:name, :slug, :details,:price, :description,:image, images)");
            $request->bindValue(":name", $name);
            $request->bindValue(":slug", $name);
            $request->bindValue(":details", $description);
            $request->bindValue(":price", $price);
            $request->bindValue(":description", $description);
            $request->bindValue(":image", $target_file);
            $request->bindValue(":images", $target_file);
            $save = $request->execute();
    }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/my-shop-logo-1606167361.png" type="image/x-icon">

    <!-- style -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>ILB Shop | Commande rapide</title>
    <style>
        .img-loader {
            text-align: center;
        }

        .img-loader img {
            height: 25rem;
        }

        .loader1 {
            display: inline-block;
            font-size: 0px;
            padding: 0px;
        }

        .loader1 span {
            vertical-align: middle;
            border-radius: 100%;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin: 40px 2px;
            animation: loader1 0.8s linear infinite alternate;
        }

        .loader1 span:nth-child(1) {
            animation-delay: -1s;
            background: rgba(38, 156, 209, 0.6);
        }

        .loader1 span:nth-child(2) {
            animation-delay: -0.8s;
            background: rgba(38, 156, 209, 0.8);
        }

        .loader1 span:nth-child(3) {
            animation-delay: -0.26666s;
            background: #269cd1;
        }

        .loader1 span:nth-child(4) {
            animation-delay: -0.8s;
            background: rgba(38, 156, 209, 0.8);
        }

        .loader1 span:nth-child(5) {
            animation-delay: -1s;
            background: rgba(38, 156, 209, 0.4);
        }

        @keyframes loader1 {
            from {
                transform: scale(0, 0);
            }
            to {
                transform: scale(1, 1);
            }
        }

        .page-loader {
            width: 100%;
            height: 100%;
            display: inline-block;
            overflow: hidden;
            background: #ffffff;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 11111111111111;
        }

        .page-loader .loader1 {
            height: 20rem;
            width: 20rem;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(1);
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bodyadress--pl h3{
            font-weight:bold;
            margin-bottom:1rem;
        }

        .bodyadress--pl p{
            font-weight:bold;
            margin-bottom:1rem;
            margin-left:1rem;
        }

        .input-field {
        width: 100%;
        padding: 1rem;
        border-radius: .8rem;
        margin-bottom: 2rem;

        background-color:#f2f5f7;
        }

        .input-field input {
        width: 80%;
        height: 3rem;
        padding: 0 1rem;
        border: none;
        background: transparent;
        outline: none;
        color: #333;
        font-size: 1.4rem;
        }

        .input-field input::placeholder {
        color: #aaa;
        font-weight: 500;
        }

        .input-field i {
        color: #aaa;
        font-size: 2rem;
        }

        .input-field #pays {
        width: 80%;
        height: 3rem;
        border: none;
        font-size: 1.5rem;
        background: transparent;
        height: 3rem;
        padding: 0 1rem;
        border: none;
        background: transparent;
        outline: none;
        color: #333;
        font-size: 1.4rem;
        }

    </style>
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
    <!-- navbar -->


<div class="container mt-5 bg-white my-4 py-4">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                <form id="msform" class="commande-rapide" method="post" >

                    <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}" />


                    <div class="form-title mt-5">
                        <h3>Commande rapide</h3>
                    </div>


                    <input type="text" name="by_fast_order"  value="1" hidden/>


               
                    <div class="form-big">
                        <div class="form-log">
                            <div class="group mt-5">
                                <input type="text" name="name" placeholder="Nom et Prénom(s)"  >
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nom</label>
                            </div>

                            <div class="group">
                                <input type="email" name="email" id="email"
                                placeholder=" Votre adresse e-mail" > 
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Email</label>
                            </div>

                            <div class="group">
                                <input type="tel" name="phone_number" id="phone_number"
                                placeholder="Numero de téléphone (10 chiffres)"
                                 >
                                <input type="hidden" name="dial_codePhoneNumber" id="dial_codePhoneNumber">
                                <input type="hidden" name="phone_numberPhoneNumber" id="phone_numberPhoneNumber">                                    <span class="highlight"></span>
                                <span class="bar"></span>
                               <label for="">Numero de téléphone (10 chiffres)</label>
                            </div>

                            

                         
                            <div class="group">
                               

                                <label class="highlight"></span>
                                <span class="bar"></span>
                                <input type="text" name="ville" placeholder="Ville" >  
                                <label>Ville</label>
                            </div>


                            



                            <div class="group">
                                

                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <input type="text" name="lieu" placeholder="Lieu de livraison" >  
                                <label>Lieu de livraison </label>
                            </div>
                        </div>

                        <div class="next-steps mb-5">
                <p class="mb-2">Résumé de votre commande</p>
                <div class="fincommand-panier">
                    <div class="fincommand-panier__articles">
                    <?php if (empty($_SESSION["cart_item"])) :?>


                    <p>Panier vide</p>


                    <?php		
                    else :?> 
                    <?php		

                    foreach ($_SESSION["cart_item"] as $key => $item){
                        $item_price = $item["quantity"]*$item["price"];
                        ?>

                        <div class="fincommand-panier__articles--article">
                            <div class="fincommand-panier__articles--article__illustration">
                                <img src="<?php echo $item['image']  ?>" alt="articlecommand" >
                            </div>
                           


                            <div class="fincommand-panier__articles--article__description">
                                <h3><?php echo $item["name"]; ?></h3>
                                <p><?php echo $item["price"]*$item["quantity"] ?> FcFa</p>
                                <span>Quantité: <?php echo $item["quantity"] ?></span>
                            </div>
                        </div>
                        <hr>
                       
                        <?php
                               	$total_quantity += $item["quantity"];
                                $total_price += ($item["price"]*$item["quantity"]);
                        }
                        ?>
                    </div>



                    <div class="fincommand-panier__total">
                        <div class="fincommand-panier__total--st">
                            <span>Sous-total:</span>
                            <h3><?php if (empty($_SESSION["cart_item"])) { echo 0; }else{ echo  $total_price;} ?> Frcfa</h3>
                        </div>

                        <div class="fincommand-panier__total--st">
                            <span>Frais de livraison et droit de timbre:</span>
                            <h3>1500 fr</h3>
                        </div>
                        <hr>
                        <div class="fincommand-panier__total--st">
                            <p>Total:</p>
                            <h2><?php if (empty($_SESSION["cart_item"])) { echo 0; }else{ echo  $total_price + 1500;} ?> Frcfa</h2>
                        </div>
                    </div>
                </div>
            </div>
            <?php		
            endif ; ?>

                       

                        <div class="form--button">
                            <input type="submit" 
                                class="next action-button" 
                                id="submit_order"
                                name="submit"
                                    value="Valider ma commande" />
                        </div>

                    </div>

                </form>
            </div>

  

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <form method="POST" action="" class="bg-white my-5">
               

                    <div class="form-title">
                        <h3>Se connecter</h3>
                    </div>

                    <div class="form-big">
                        <div class="form-log">
                            <div class="group mt-5">
                                <input id="email" type="email" class="form-control is-invalid" name="email"   autofocus>

                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Email</label>

                              <!-- 
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> -->
         

                            </div>

                            <div class="group">
                                <input id="password" type="password" class="form-control is-invalid" name="password" >
                              
                                <span toggle="#password-field" ></span>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Mot de passe</label>

                              
                                    <!-- <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> -->
                            
                            </div>
                        </div>

                        <!-- <div class="form__radio-group">
                            <input type="radio" class="form__radio-input" id="large" name="size">
                            <label for="large" class="form__radio-label">
                                <span class="form__radio-button"></span>
                                Large tour group
                            </label>
                        </div> -->

                        <div class="mdp-o">
                           
                            <a href="/password/reset">Mot de passe oublié ?</a>
                        </div>

                        <div class="form--button">
                            <button class="sitebtn--red" type="submit">
                                Se connecter
                            </button>


                          
                        </div>

                    </div>
                </form>

                <div class="form-big">

                    <div class="form--button">
                        <a href="{{ route('register') }}">
                            <button class="sitebtn--blue">
                                Créer un compte
                            </button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>


  



 

    
