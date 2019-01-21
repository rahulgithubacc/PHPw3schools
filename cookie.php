<?php
$cookie_name="Rahul_cookie";
$cookie_value="Rahul Deshmukh";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
?>
<html>
<body>
<?php
if(!isset($_cookie[$cookie_name])){
    echo"Cookie ".$cookie_name." is not set<br>";
    echo"value".$cookie_value."$cookie_value";
}
else{
    echo"Cookie".$cookie_name." is set";
    

}
?>
</body>
</html>