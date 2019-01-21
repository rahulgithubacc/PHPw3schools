
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Rahul";
$name=$_POST["name"];
$company=$_POST["comapany"];
$age=$_POST["age"];
$sex=$_POST["sex"];
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "insert into first (Name, Comapany, Age, Sex) values ('$name','$company',$age,'$sex')";
    $conn->exec($sql);
   
    echo "New record created successfully";
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
<html>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER[PHP_SELF]) ;?>">
Name<input type="text" name="name"><br>
Company<input type="text" name="comapany"><br>
Age<input type="number" name="age"><br>
Sex<input type="radio" name="sex" value="M">Male
<input type="radio" name="sex" value="F">Female
<br><input type="Submit"  value="Submit">
</form> 
</body>
</html>