<?php 
 include_once "database.php";
 $DB = new DB();
 $messages = array();

 if(isset($_POST['ajouter'])) {
    $image = $_POST['product_image'];
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $quantity = 1;

    
    $req = $DB->query("SELECT id FROM `coffe_panier` WHERE img = :image", array("image" => $image));
    
    if(!empty($req)) {
        $messages[] = "Ce produit a déjà été ajouté à votre panier.";
    }
    else {
        $req = $DB->query("INSERT INTO `coffe_panier` (img, name, price, quantity) VALUES(:image, :name, :price, :quantity)", array("image" => $image, "name" => $name, "price" => $price, "quantity" => $quantity));
        $messages[] = "Vous venez d'ajouter un produit à votre panier.";
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="dist/css/all.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/myStyle.css">

    <title>Coffe Shop</title>
</head>
<body>
    <div class="page">

        <!-- Home section -->
        <section id="home">
            <header>
                <a href="home.php">
                    <img src="coffe_img/coffe_logo.png" alt="" id="logo">
                </a>
                <nav>
                    <?php
                        $pdo = $DB->getdb();
                        $req = $pdo->prepare("SELECT * FROM `coffe_panier`");
                        $req->execute();
                        $counter = $req->rowCount();
                    ?>
                    <ul>
                        <a href="#home">Home</a>
                        <a href="#about">About</a>
                        <a href="#menu">Menu</a>
                        <a href="#contact">Contact</a>
                        <a href="panier.php" class="panier-link">
                            <i class="fa-solid fa-cart-shopping fa-beat-fade"><span class="counter"><?= $counter ?></span></i>
                        </a>
                    </ul>
                </nav>

            </header>

            <!-- Coffe Modal -->
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable coffe-modal">
                <div class="modal-content">
                    <span class="close" id="close">&times;</span>

                    <div class="coffe-modal-box">
                        <img src="./coffe_img/coffee2.png" class="coffe-img" alt="coffe image">
                        <small>Coffe name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    <div class="coffe-modal-box">
                        <img src="./coffe_img/coffee3.png" class="coffe-img" alt="coffe image">
                        <small>Coffe name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    <div class="coffe-modal-box">
                        <img src="./coffe_img/coffee4.png" class="coffe-img" alt="coffe image">
                        <small>Coffe name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    <div class="coffe-modal-box">
                        <img src="./coffe_img/coffee5.png" class="coffe-img" alt="coffe image">
                        <small>Coffe name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    <div class="coffe-modal-box">
                        <img src="./coffe_img/coffee6.png" class="coffe-img" alt="coffe image">
                        <small>Coffe name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    <div class="coffe-modal-box">
                        <img src="./coffe_img/coffee7.png" class="coffe-img" alt="coffe image">
                        <small>Coffe name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    <div class="coffe-modal-box">
                        <img src="./coffe_img/coffee8.png" class="coffe-img" alt="coffe image">
                        <small>Coffe name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    <div class="coffe-modal-box">
                        <img src="./coffe_img/coffee2.png" class="coffe-img" alt="coffe image">
                        <small>Coffe name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    <div class="coffe-modal-box">
                        <img src="./coffe_img/coffee3.png" class="coffe-img" alt="coffe image">
                        <small>Coffe name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    <div class="coffe-modal-box">
                        <img src="./coffe_img/coffee4.png" class="coffe-img" alt="coffe image">
                        <small>Coffe name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    <div class="coffe-modal-box">
                        <img src="./coffe_img/coffee5.png" class="coffe-img" alt="coffe image">
                        <small>Coffe name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    <div class="coffe-modal-box">
                        <img src="./coffe_img/coffee6.png" class="coffe-img" alt="coffe image">
                        <small>Coffe name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    
                </div>
            </div>

            <!-- Ice cream Modal -->
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ice-cream-modal">
                <div class="modal-content">
                    <span class="close" id="close">&times;</span>

                    <div class="coffe-modal-box">
                        <img src="./coffe_img/ice-cream-1.jpg" class="ice-cream-img" alt="ice cream image">
                        <small>Ice cream name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    <div class="coffe-modal-box">
                        <img src="./coffe_img/ice-cream-2.jpg" class="ice-cream-img" alt="ice cream image">
                        <small>Ice cream name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    <div class="coffe-modal-box">
                        <img src="./coffe_img/ice-cream-3.jpg" class="ice-cream-img" alt="ice cream image">
                        <small>Ice cream name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    <div class="coffe-modal-box">
                        <img src="./coffe_img/ice-cream-4.jpg" class="ice-cream-img" alt="ice cream image">
                        <small>Ice cream name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    <div class="coffe-modal-box">
                        <img src="./coffe_img/ice-cream-5.jpg" class="ice-cream-img" alt="ice cream image">
                        <small>Ice cream name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    <div class="coffe-modal-box">
                        <img src="./coffe_img/ice-cream-6.jpg" class="ice-cream-img" alt="ice cream image">
                        <small>Ice cream name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    <div class="coffe-modal-box">
                        <img src="./coffe_img/ice-cream-7.jpg" class="ice-cream-img" alt="ice cream image">
                        <small>Ice cream name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    <div class="coffe-modal-box">
                        <img src="./coffe_img/ice-cream-8.jpg" class="ice-cream-img" alt="ice cream image">
                        <small>Ice cream name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    <div class="coffe-modal-box">
                        <img src="./coffe_img/ice-cream-9.jpg" class="ice-cream-img" alt="ice cream image">
                        <small>Ice cream name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    <div class="coffe-modal-box">
                        <img src="./coffe_img/ice-cream-10.jpg" class="ice-cream-img" alt="ice cream image">
                        <small>Ice cream name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    <div class="coffe-modal-box">
                        <img src="./coffe_img/ice-cream-11.jpg" class="ice-cream-img" alt="ice cream image">
                        <small>Ice cream name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    <div class="coffe-modal-box">
                        <img src="./coffe_img/ice-cream-12.jpg" class="ice-cream-img" alt="ice cream image">
                        <small>Ice cream name</small>
                        <p class="coffe-price">$50</p>
                    </div>
                    
                </div>
            </div>

            <section class="home-content">
                <div class="desc">
                    <h1>Coffe <br>The best for you</h1>
                    <a href="#menu" class="menu-link">View Menu</a> <br>
                    <i title="Coffe" class="fa-solid fa-mug-hot fa-fade fa-3x coffe-icon"></i>
                    <i title="Ice cream" class="fa-solid fa-ice-cream fa-beat-fade fa-3x ice-cream-icon"></i>
                </div>
            </section>
        </section>

        <!-- About section -->
        <section id="about">
            <h1 id="heading"><span>About</span> us</h1>
            <div class="about-content">
                <div class="about-box">
                    <img src="coffe_img/coffee14.png" alt="coffe img">
                    <div class="coffe-box">
                        <h3>Americano</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                        <div class="like_shop">
                            <i class="fa-solid fa-shop"></i>
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                    <div class="price">
                        <strong>$2.50</strong>
                    </div>
                </div>
                <div class="about-box">
                    <img src="coffe_img/coffee19.png" alt="coffe img">
                    <div class="coffe-box">
                        <h3>Cappuccino</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                        <div class="like_shop">
                            <i class="fa-solid fa-shop"></i>
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                    <div class="price">
                        <strong>$2.50</strong>
                    </div>
                </div>
                <div class="about-box description">
                    <h2>What makes our coffee special ?</h2>
                    <p>Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Voluptatibus Qui Ea Ullam, Enim Tempora Ipsum Fuga Alias Quae Ratione A Officiis Id Temporibus Autem? Quod Nemo Facilis Cupiditate. Ex, Vel? Lorem Ipsum Dolor Sit Amet Consectetur, Adipisicing Elit. Odit Amet Enim Quod Veritatis, Nihil Voluptas Culpa! Neque Consectetur Obcaecati Sapiente?</p>
                    <p class="message">
                        Animi Nulla Sit Libero Nemo Fuga Sequi Nobis? Necessitatibus Aut Laborum, Nisi Quas Eaque Laudantium Consequuntur Iste Ex Aliquam Minus Vel? Nemo.
                    </p>
                    <button class="more">Learn more</button>
                </div>
            </div>
        </section>

        <!-- Menu section -->
        <section id="menu">
            <h1 id="heading">Coffe <span>Menu</span></h1>
            <?php 
                if(isset($messages)) :
                    foreach ($messages as $message) :
                        echo "<div class='info'><span>". $message . "</span> <i class='fas fa-times' onclick='this.parentElement.style.display = `none`;'></i></div>";
                    endforeach;
                endif;
            ?>
            <div class="menu-box">
                <?php
                    $products = $DB->query("SELECT * FROM `products`");

                    foreach($products as $product):
                ?>
                <form method="post" class="coffe-box">
                    <img src="coffe_img/<?= $product->img; ?>" class="coffe-img" alt="coffe image">
                    <small ><?= $product->name; ?></small>
                    <p class="coffe-price"><?= $product->price; ?> FCFA</p>
                    <input type="hidden" name="product_image" value="<?= $product->img ?>">
                    <input type="hidden" name="product_name" value="<?= $product->name ?>">
                    <input type="hidden" name="product_price" value="<?= $product->price ?>">
                    <input type="submit" value="Ajouter" name="ajouter" class="btn btn-add">
                </form>
            
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Contact section -->
        <section id="contact">
            <h1 id="heading"><span>Contact</span> Us</h1>
            <div class="contact-content">
                <div class="left">
                    <img src="coffe_img/coffee20.png" alt="coffe image">
                </div>
                <form class="right">
                    <input type="text" class="form-control" placeholder="Nom" required>
                    <input type="email" class="form-control" placeholder="Email" required>
                    <input type="number" class="form-control" placeholder="Téléphone" required>
                    <textarea id="message" cols="30" rows="10" placeholder="Votre message"></textarea>
                    <button type="submit" class="contact-btn">Contactez-nous</button>
                </form>
            </div>
        </section>

        <footer>
            <p>Created by <span>Hammed</span> | All rights reserved</p>
        </footer>
    </div>

    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/myScript.js"></script>
</body>
</html>