<?php 
 include_once "database.php";
 $DB = new DB();
 $pdo = $DB->getdb();

 if(isset($_POST['update_qtt_btn'])) {
    $update_quantity = $_POST['update_quantity'];
    $update_quantity_id = $_POST['update_quantity_id'];

    $update_req = $DB->query("UPDATE `coffe_panier` SET quantity = :update_quantity WHERE id = :update_quantity_id", array("update_quantity" => $update_quantity, "update_quantity_id" => $update_quantity_id));

    if($update_req) {
        header("Location:panier.php");
    }
 }

 if(isset($_GET['remove'])) {
    $product_id = $_GET['remove'];

    // $delete_query = $DB->query("DELETE FROM `coffe_panier` WHERE id = :product_id", array("product_id" => $product_id));

    $delete_query = $pdo->prepare("DELETE FROM `coffe_panier` WHERE id = :product_id");
    $delete_query->bindValue(":product_id", $product_id);
    if($delete_query->execute()) {
        header("Location:panier.php");
    }
 }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="stylesheet" href="dist/css/all.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/panier.css">
</head>
<body>
    <section id="panier">
        <a href="home.php">
            <span class="close" id="close">&times;</span>
        </a>
        <!-- <a href="javascript:history.back()">
            <span class="close" id="close">&times;</span>
        </a> -->
        <h1 class="h1">Votre panier d'achat</h1>
        <table class="container">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prix Produit</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <tbody>
                <?php 
                    $req = $DB->query("SELECT * FROM `coffe_panier`");
                    $grandtotal = 0;
                    $subtotal = 0;
                    foreach ($req as $reqValue) :
                ?>
                <tr>
                    <td><img src="coffe_img/<?= $reqValue->img; ?>" height="100" alt=""></td>
                    <td><?= $reqValue->name; ?></td>
                    <td><?= number_format($reqValue->price); ?></td>
                    <td>
                        <form action="" method="post" class="change-value">
                            <input type="hidden" name="update_quantity_id" value="<?= $reqValue->id; ?>">
                            <input type="number" name="update_quantity" min="1" value="<?= $reqValue->quantity; ?>">
                            <input type="submit" value="Changer" name="update_qtt_btn">
                        </form>
                    </td>
                    <td><?= $subtotal = $reqValue->price * $reqValue->quantity ?> FCFA</td>
                    <td>
                        <a href="panier.php?remove=<?= $reqValue->id; ?>" onclick="return confirm('Êtes-vous sûr(e) de vouloir supprimer cet article de votre panier ?')">
                            <img src="bin.png" class="remove-btn">
                        </a>
                    </td>
                    
                </tr>
                <?php $grandtotal += $subtotal ?>
                <?php endforeach; ?>
            </tbody>

            <tr class="total">
                <th>Montant Total : <?= number_format($grandtotal); ?> FCFA</th>
            </tr>
        </table>
    </section>


    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
</body>
</html>