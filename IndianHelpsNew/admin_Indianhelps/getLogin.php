<?php
        $name=$_POST["txtname"];
        $pass=$_POST["txtpass"];                    
        $key=$_POST["key"];
        if(isset($_POST["submit"])) 
        {
        if($name == "Indian" && $pass == "Indian123" && $key == "123456789")
        {
            session_start();
            $_SESSION['log'] = "Aow2fr";
            echo "<script type='text/javascript'>alert('Login Successfull');window.location.href='dashboard.php';</script>";  
        }
        else{
            echo "<script type='text/javascript'>alert('Username or password is Incorrect!!');window.location.href='index.php';</script>";
        }
        }  
?>