<?php include 'commerce.php'; ?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Modifier Client</title>
  </head>
  <style>
    .btn-primary {
      color: #fff;
      background-color: black;
      border-color: black;
    }

  </style>
  <body style="background: linear-gradient(90deg, rgba(179,175,251,1) 0%, rgba(99,99,244,1) 35%, rgba(217,0,241,1) 100%);">
        <div class="row justify-content-center">
             <section>
                <h1 style="margin-top:30px;margin-bottom:30px;"> Modifier un client</h1>
                <div class="card ">
                    
                    <form class="card-body" action="updateC.php">
                    <div class="form-group">
                    <label form="customerId">Id :</label>
                    <input type="text" class="form-control" name="id" id="id" value="<?= $_GET['id']; ?>"; required />
                    </div>
                    <div class="form-group">
                            <label form="customerUsername">Pseudo :</label>
                            <input type="text" class="form-control" name="customerUsername" id="customerUsername" required />
                        </div>
                        <div class="form-group">
                            <label form="customerEmail">E-mail :</label>
                            <input type="text" class="form-control" name="customerEmail" id="customerEmail" required />
                        </div>
                        <div class="form-group">
                            <label form="customerLastname">Nom :</label>
                            <input type="text" class="form-control" name="customerLastname" id="customerLastname" required />
                        </div>
                        <div class="form-group">
                            <label form="customerFirstname">Prenom :</label>
                            <input type="text" class="form-control" name="customerFirstname" id="customerFirstname" required />
                        </div>
                        <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary" name="test">Modifier</button> 
                        </div>
                    </form>
                </div>
            </section>
    	</div>
    </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>