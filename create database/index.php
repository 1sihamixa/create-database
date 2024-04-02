<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $database = $_POST["data"];
      $servername = "localhost";
      $username = "root";
      $password = "";
      $sql = "";

      if (!empty($_POST["data"])) {
        try {
          $conn = new PDO("mysql:host=$servername", $username, $password);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "create database $database";
          $conn->exec($sql);
          echo "Database created successfully";
        } catch (PDOException $e) {
          echo $sql . "<br>" . $e->getMessage();
        }
      } else {
        echo "Enter Database";
      }
    }

    $conn = null;
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>create database</title>
</head>
<body>
  <form method="POST" action="">
    <input type="text" name="data">
    <input type="submit">
  </form>


</body>
</html>