<?php
 if(isset($_POST['first_name'])){
     $fname = $_POST['first_name'];
     $lname = $_POST['last_name'];
     $pass = $_POST['pass'];
     $mail = $_POST['email'];
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To My Own Chatbox</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST" class="fort">
    <div class="container  d-flex justify-content-center fort">
        <div class="">
            <h3>Welcome To Chatbox</h3>
            <H6>Enjoy More in your own way</H6>
            <label for="first_name">First Name:</label><br>
            <input type="text" name="first_name" id="first_name"> <br>
            
            <label for="last_name">Last Name:</label> <br>
            <input type="text" name="last_name" id="last_name"> <br>

            <label for="password">Password:</label> <br>
            <input type="password" name="password" id="password"> <br>
            
            <label for="email">Email_Address</label> <br>
            <input type="email" name="email" id="email"> <br>
              
            <button type="button" class="btn btn-danger" name="submit">Submit</button> <br>
        </div>
   </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>