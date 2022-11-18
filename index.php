<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- Own style is de style die niet automatisch gegeneerd werd door sass -->
  <link rel="stylesheet" href="styles/own/ownStyle.css" />
  <link rel="stylesheet" href="styles/style.css" />

  <script defer src="js/script.js"></script>
  <?php include 'database.php'; ?>

  <title>Bootstrap demo</title>
</head>

<body>
  <nav class="navbar">
    <ul class="navbar-list">
      <li><a class="navbar-link" href="#">link 1</a></li>
      <li><a class="navbar-link" href="#">link 2</a></li>
      <li><a class="navbar-link" href="#">link 3</a></li>
    </ul>
  </nav>

  <main>
    <h1>Kennistest</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
      aliqua. A cras semper auctor neque vitae tempus quam pellentesque nec. Sapien et ligula ullamcorper malesuada proin
      libero nunc. Risus in hendrerit gravida rutrum quisque non tellus. Elit ut aliquam purus sit amet luctus venenatis
      lectus magna. Non sodales neque sodales ut. Vel eros donec ac odio tempor. Erat nam at lectus urna duis convallis
      convallis. Eget egestas purus viverra accumsan in nisl. Consectetur a erat nam at lectus urna duis convallis
      convallis. Consectetur adipiscing elit pellentesque habitant morbi tristique. Magna fringilla urna porttitor rhoncus
      dolor purus.</p>
    <?php
    // Query uitvoeren
    $sql = "SELECT * FROM orders";
    if ($result = mysqli_query($conn, $sql)) {
      if (mysqli_num_rows($result) > 0) {
        echo "<table id='myTable'>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>name</th>";
        echo "<th>status</th>";
        echo "<th>besteldatum</th>";
        echo "<th>bekijk order</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['status'] . "</td>";
          echo "<td>" . $row['created'] . "</td>";
          echo "<td><button onclick='openResultPage(event)' type='button' class='btn btn-primary'>Orderinfo</button></td>";
          echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
      } else {
        echo "No records are found";
      }
    }
    // Close connection
    mysqli_close($conn);
    ?>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
</body>

</html>