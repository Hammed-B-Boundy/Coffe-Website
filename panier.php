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
        <a href="javascript:history.back()">
            <span class="close" id="close">&times;</span>
        </a>
        <table class="container">
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Action</th>
            </tr>


            <tr class="total">
                <th>Total : 100$</th>
            </tr>
        </table>
    </section>


    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
</body>
</html>