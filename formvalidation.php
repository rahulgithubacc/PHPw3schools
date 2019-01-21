<html>
    <head>
        <style>
            #err{
                color:red;
            }
            </style>
</head>
    <body>

<?php
$nameerr=$ageerr=$sexerr=$emailerr="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 if(empty($_POST["name"]))
 {
     $nameerr="This field is required";
 }
 else
 {
    $name=test_input($_POST["name"]);
 }
 if(empty($_POST["age"]))
 {
     $ageerr="This field is required";
 }
 else
 {
    $age=test_input($_POST["age"]);
 }
 if(empty($_POST["sex"]))
 {
     $sexerr="This field is required";
 }
 else
 {
    $sex=test_input($_POST["sex"]);
 }
 if(empty($_POST["email"]))
 {
     $emailerr="This field is required";
 }
 else
 {
    $email=test_input($_POST["email"]);
 }

}
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER[PHP_SELF]) ;?>">
Name: <input type="text" name="name">
<span id="err">*<?php echo $nameerr; ?></span>
<br>
AGE: <input type="text" name="age">
<span id="err">*<?php echo $ageerr; ?></span>
<br>
SEX: <input type="radio" name="sex" value="male">Male
     <input type="radio" name="sex" value="female">Female
     <span id="err">*<?php echo $sexerr; ?></span>
     <br>
EMAIL: <input type="text" name="email">
<span id="err">*<?php echo $emailerr; ?></span>  
     <br>
    <input type="submit" value="Go"> 
</form>   
<?php
echo "NAME: $name";
echo "AGE: $age";
echo "SEX: $sex";
echo "EMAIL: $email";
?>
</body>
</html>

