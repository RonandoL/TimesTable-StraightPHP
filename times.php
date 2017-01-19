<?php
    $number = $_GET["number"];
    $array = range(1, $number);
    $row_array = $array;
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Times Table</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div class='container'>
      <h1>The Times Table</h1>
      <?php
          echo "<table>";
              // Top Row
          echo "<tr><th>&nbsp;</th>";
          foreach ($array as $i) {
              echo "<th> $i </th>";
          }
          echo "</tr>";

              // Remaining Rows
          foreach ($row_array as $row) {
            echo "<tr><th> $row </th>";
            foreach ($array as $r) {
              echo "<td>" . ($r * $row) . "</td>";
            }
            echo "</tr>";
          }

          echo "</tr></table>";
      ?>

    </div>
  </body>
</html>
