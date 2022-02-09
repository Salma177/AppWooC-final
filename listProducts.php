<?php include 'commerce.php'; error_reporting(0);
ini_set('display_errors', 0);?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Liste de produits</title>
    <style type="text/css">
    	#ProductList {
    		width: 100%;
    		border: solid black 1px;
    	}
    	.actions {
			position: absolute;
			margin-left: auto;
			margin-right: auto;
			left: 0;
			right: 0;
			text-align: center;
	    	}

    	.action {
    		margin: 5px ;
    	}
    </style>
  </head>
  <style>
    .btn-primary {
      color: #fff;
      background-color: black;
      border-color: black;
    }

  </style>
  <body style="background: linear-gradient(90deg, rgba(179,175,251,1) 0%, rgba(99,99,244,1) 35%, rgba(217,0,241,1) 100%);">
    <div class="container">
    		<h1 style="color:black;margin:50px auto;text-align:center;">Liste de produits</h1>
			
			
			<div style="margin-bottom: 50px;text-align:right;">
		        <a href="http://localhost:8080/AppWooC-final/addProduct.php" class="btn btn-primary" style="font-size:20px;">+ Ajouter un produit</a>
		    </div>
    	    <div class="row">
    	    	<?php foreach ($woocommerce->get('products') as $product): ?>
    	    	<div class="col-lg-1"></div>
		    	    	<div class="shadow-lg p-4 mb-4 bg-white col-lg-3 product">
								<?php $images=$product->images; ?>
								<div class="row justify-content-center">
								<img  class='rounded-circle mr-2' height='90px' width='90px' src='<?= $images[0]->src ?>' onerror="this.src='img/product.jpg';">
								</div>
								<hr>
			    	    	<ul style="list-style:none;">
								<?php $categories=$product->categories; ?>
			    	    		<li><h6>Name :</h6> <span><?= $product->name ?></span></li>
								<hr>
			    	    		<li><h6>Price :</h6> <span><?= $product->price ?></span>DH</li>
								<!--
								<hr>
								<li><h6>Regular price :</h6> <span><?= $product->regular_price ?></span>DH</li>
								<hr>
								<li><h6>Category :</h6> <span><?= $categories[0]->name ?></span></li>
								-->
								

			    	    	</ul>
							
		    	    		<div class="actions">
							<a href="http://localhost:8080/AppWooC-final/deleteP.php?id=<?= $product->id ?>" class="btn btn-danger">Delete</a>
		    	    		<a href="http://localhost:8080/AppWooC-final/editProduct.php?id=<?= $product->id ?>" class="btn btn-primary">Update</a>
		    	    		</div>
		    	    	</div>
				<?php endforeach; ?>
		    </div>
			<div style="margin-top: 50px;text-align:right;">
				<a href="http://localhost:8080/AppWooC-final/welcome.php" class="btn btn-primary" style="font-size:20px;"><--- Retour au menu</a>
		    </div>

    </div>
	

	


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>