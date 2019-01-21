<html>
    <head>
     
    </head>
    <body>
    <?php
       
        // $name=$age=$sex=$email="";
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {   
           
            $name=test_input($_POST["name"]);
            $age=test_input($_POST["age"]);
            $sex=test_input($_POST["sex"]);
            $email=test_input($_POST["email"]);
        }
        function test_input($data)
        {
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;

        }
      
    ?>
    <form method ="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        NAME: <input type="text" name="name"><br>
        AGE: <input type="text" name="age"><br>
        SEX: <input type="radio" name="sex" value="male">Male
            <input type="radio" name="sex" value="female">Female<br>
        E-MAIL: <input type="text" name="email"> <br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php 
      echo "NAME: $name";
    echo "AGE: $age";
    echo "SEX: $sex";
    echo "EMAIL: $email";
    ?>
    </body>
</html>