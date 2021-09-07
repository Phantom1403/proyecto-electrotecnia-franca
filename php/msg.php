<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <style>
    h1 {
      text-align: center;
      font-size: 40px;
    }



    /* Cambios sobre la propia tabla */
    table {
      border-collapse: collapse;
      border: 1px solid #ccc;
      margin: auto;
      width: 50%;
      border: 3px;
      padding: 10px;
    }
    /* Espacio de relleno en celdas y cabeceras */
    td,
    th {
      padding: 10px;
    }
    /* Modificación de estilos en cabeceras */
    th {
      background: #AA1111;
      color: #fff;
      text-transform: uppercase;
    }
    /* Modificación de estilos en celdas */
    td {
      text-align: center;
      border-bottom: 2px solid #111;
      color: #333;
      font-size: 18px;
    }
  </style>
</head>
<body>
    <h1>  LISTADO DE MENSAJES </h1>
    <?php
      $mysqli = new mysqli("localhost","id17112216_electrotecnia","vBc3IP_XaDPXLi[1","id17112216_contacto");
      if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
      }

    echo "<br>";

    $sql = "SELECT * FROM mensajes";
    $result = $mysqli->query($sql);



    echo "<br>";
    if ($result->num_rows > 0) {
       echo "<table border=1 height: 50px>";
        echo "<tr>  <th> Nombre </th> <th> Apellido </th> <th> Teléfono </th> <th> Email </th> <th> Mensaje </th>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
           echo "<br> <td>". $row["Nombre"]. " </td> <td> ". $row["Apellido"]. " </td> <td>" . $row["Teléfono"] . "  </td>  <td>  " . $row["Email"] . " </td> <td>". $row["Mensaje"]. " </td> <br> " ;
            echo "</tr>";
       }
      echo "</table>";
    } else {
     echo "0 results";
    }

    $conn->close();


  ?>
        
</body>
</html>