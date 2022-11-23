<?php
require __DIR__ . '/vendor/autoload.php';
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Kennistest</title>
</head>

<body>
  <?php

  $getId = $_GET['order_id'];

  // Ophalen alle orders
  $orders = $conn->get(
    'orders',
    [
      'name',
      'email',
      'status',
      'created',
    ],
    [
      'id' => $getId
    ]
  );

  $status = $orders['status'];



  function statusColor($status)
  {
    if ($status == 'paid') { ?>
      <!-- De succes color heb ik ook veranderd. Maar omdat bootstrap gebruik maakt van de !important property.
          Moest ik deze overschrijven door inline css en zelf de !important property te gebruiken -->
      <span class="badge text-bg-success" style="background-color:#169c09 !important;">paid</span>
    <?php } elseif ($status == 'expired') { ?>
      <span class="badge text-bg-warning">expired</span>
    <?php } else { ?>
      <span class="badge text-bg-danger">cancelled</span>
  <?php }
  } ?>


  <nav aria-label='breadcrumb'>
    <ol class='breadcrumb justify-content-lg-center fs-5'>
      <li class='breadcrumb-item'><a href='http://localhost/'>Home</a></li>
      <li class='breadcrumb-item active' aria-current='page'>bestelinfo</li>
    </ol>
  </nav>
  <div class="container text-center">
    <div class="row justify-content-md-center">
      <div class="col col-md-auto">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Bestelling</h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Naam: <?php echo $orders['name'] ?></li>
              <li class="list-group-item">Email: <?php echo $orders['email'] ?></li>
              <li class="list-group-item">Status: <?php echo statusColor($status) ?></li>
              <li class="list-group-item">created: <?php echo $orders['created'] ?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
</body>

</html>