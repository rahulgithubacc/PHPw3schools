
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Rahul";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // begin the transaction
    $conn->beginTransaction();
  
    $conn->exec("INSERT INTO first (Name,Comapany,Age,Sex) 
    VALUES ('Rahul', 'QED42',22,'M')");
    $conn->exec("INSERT INTO first(Name,Comapany,Age,Sex) 
    VALUES ('Bikram', 'QED42',20,'M')");
    $conn->exec("INSERT INTO first (Name,Comapany,Age,Sex) 
    VALUES ('Lakhi', 'QED42',26,'F')");

    // commit the transaction
    $conn->commit();
    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    // roll back the transaction if something failed
    $conn->rollback();
    echo "Error: " . $e->getMessage();
    }

$conn = null;
?>