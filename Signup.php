<?php 
   
   include("classes/connect.php");
   include("classes/Signup.php");
     
     $first_name = "";
     $last_name = "";
     $gender = "";
     $email ="";
      
   
   if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
    
     $signup = new Signup();
     $result = $signup->evaluate($_POST);
     
          if($result != ""){
            

            echo "<div style = 'text-align:center; font-size:12px;color:white; background-color:red;'>";
            echo "<br>the following errors occurd<br><br>";
            echo $result;
            echo "</div>";
          }else{
            header("Location: login.php");
            die;
          }
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $gender = $_POST['gender'];
      $email = $_POST['email'];

      }


  
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RobLook | Sign Up</title>
</head>

<style>
    #bar {
        height: 100px;
         background-color: darkslategrey;
           color:aliceblue;
           padding: 4px;

    }
    #signup_button{
        background-color:#750e1f;
        width: 70px;
        text-align: center;
        border-radius: 5px;
        float: right;
    }
    #bar2{
        background-color:white;
         width: 800px;
          margin: auto;
           margin: auto;
            margin-top: 50px;
            font-weight: bold;
            padding: 10px;
            padding-top: 50px;
            text-align: center;

    }
    #text{
        height: 40px;
        width: 300px;
        border-radius: 4px;
        border: solid 1px #ccc;
        padding: 4px;
        font-size: 14px;
    }
    #button{
        width: 300px;
        height: 40px;
        border-radius: 4px;
        border: none;
        background-color: darkslategrey;
        color: white;
    }
</style>
<body style="font-family:tahoma ; background:#e9ebee;">
    <div id="bar">
    <div style="font-size: 40px;">RobLook</div>
       <div id="signup_button">Log in</div>
    </div>

    <div id="bar2">

        Sign Up To RobLook<br>

        <form method="post" action="">
            
        
        <input value ="<?php echo $first_name ?>" name="first_name" type="text" id="text" placeholder="First Name"><br><br>
        <input value ="<?php echo $last_name ?>" name="last_name" type="text" id="text" placeholder="Last Name"><br><br>
       <div style="font-weight: normal;">Gender:</div><br>
        <select name="gender" id="text">

            <option><?php echo $gender ?></option>
            <option>Female</option>
            <option>Male</option>
        </select>
        <br><br>
        <input name="email"   type="text" id="text" placeholder="email"><br><br>

        <input name="password"  type="password" id="text" placeholder="password"><br><br>
        <input name="password2" type="password" id="text" placeholder="Confrim-password"><br><br>


        <input type="submit" id="button" value="Sign Up">
        <br><br><br>
</form>
    </div>
</body>
</html>