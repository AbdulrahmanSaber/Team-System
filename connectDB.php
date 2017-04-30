<?php

// Connection Informations
  $passwordC = "";
  $userC = "root";

// Try To Connection
  try
  {
    $conn = new PDO("mysql:host=localhost;db=functions", $userC, $passwordC);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

// Get Errors
  catch(PDOException $errorMSG)
  {
    echo "Not Connected" . $errorMSG->getMessage();
  }

?>
