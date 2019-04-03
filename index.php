<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ürün Listesi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
<?php require_once "lib/db.php"; ?>
<?php
/** verileri cekme bölümü */
$products=$db->query("SELECT * FROM products",PDO::FETCH_OBJ)->fetchAll();
?>
  <?php require_once "navbar.php"; ?>
  
<div class="container">
<h2 class="text-center">Ürün Listesi</h2>
<hr>
    <div class="row">
    <?php foreach ($products as $product) { ?>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="assets/images/<?php echo $product->img_url; ?>" width="125"  alt="<?php echo $product->product_name; ?>">
                <div class="caption">
                    <h3><?php echo $product->product_name; ?></h3>
                    <p><?php echo $product->detail; ?></p>
                    <p class="text-right price-container"><strong><?php echo $product->price; ?> TL</strong> </p>
                    <p>
                        <button product-id="<?php echo $product->id; ?>" class="btn btn-primary btn-block addToCartBtn" role="button">Sepete Ekle 
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                        </button>
                    </p>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>


    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>