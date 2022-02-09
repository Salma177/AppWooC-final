<?php include 'commerce.php'; ?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Liste de produits</title>
  </head>
  <style>
    .btn-primary {
      color: #fff;
      background-color: black;
      border-color: black;
    }

  </style>
  <body style="background: linear-gradient(90deg, rgba(179,175,251,1) 0%, rgba(99,99,244,1) 35%, rgba(217,0,241,1) 100%);">
    	<h1 style="margin:50px auto;text-align:center;">Liste de commandes</h1>

        <div class="container pt-5">
                             
                               <div class='table-responsive'>
                               <table id='myTable' class='table table-striped table-bordered table-light'>
                                       <thead>
                                           <tr>
                                               <th>Actions</th>
                                               <th>Order</th>
                                               <th>Customer</th>
                                               <th>Address</th>
                                               <th>Contact</th>
                                               <th>Order Date</th>
                                               <th>Status</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                <?php foreach ($woocommerce->get('orders') as $order): ?> 
               <tr>
                        <td>
                        <a href="http://localhost:8080/AppWooC-final/deleteO.php?id=<?= $order->id ?>" class="btn btn-danger">Delete</a>
		    	    		      <a href="http://localhost:8080/AppWooC-final/editOrder.php?id=<?= $order->id ?>" class="btn btn-primary">Update</a>
                        </td>
                        <td><?= $order->id ?></td>
                        <td><?= $order->billing->first_name. ' ' .$order->billing->last_name ?></td>
                        <td><?= $order->billing->address_1 ?></td>
                        <td><?= $order->billing->phone ?></td>
                        <td><?= $order->date_created ?></td>
                        <td><?= $order->status ?></td>
                        </tr>
               <?php endforeach; ?>
                                       </tbody>
                                   </table>
                               </div>
              </div>
              <div style="margin: 50px;text-align:center;">
		          <a href="http://localhost:8080/AppWooC-final/welcome.php" class="btn btn-primary" style="font-size:20px;">Back to menu</a>
            	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>