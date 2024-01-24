<?php
require_once "dblidhja.php";

if (isset($_POST["submit"])){
        $Number = $_POST["Number"];
        $Password = $_POST["Password"];

        $database = new dblidhja();
        $conn = $database->connectDB();
        if($conn){
                $sql = "SELECT * FROM Klienti WHERE Numri = :Numri";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':Numri', $Number);
                $stmt ->execute();

                $user = $stmt -> fetch(PDO::FETCH_ASSOC);
                if($user) {
                        if(password_verify($Password,$user['Password'])) {
                                session_start();
                                $_SESSION["user"] = "yes";
                                $_SESSION["Rolet"] = ($Number === "(123)123-1234") ? "admin": "user";
                                header("Location: klienti.php");
                                exit();
                        } else {
                                echo "<script>alert('Numri nuk pershtatet'); </script>";
                        }
                   }

         }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
    <link rel="shortcut icon" href="logo-removebg-preview (1).png" type="image/x-icon">
    <title>Uber Eats | Login</title>
</head>
<body>
    <div class="container">
        <div class="kutia">

            <form action="" method="POST">
            <div class="login">

                <div class="larte">
                    <h1>Welcome Back</h1>
                    <small>We're glad that you're a part of us</small>
                </div>
                <div class="inputi">
                        <input class="fusha" type="tel" class="inputboxi" id="numri" placeholder="Number" required>
                        <label class="fusha" for="numri">Number</label>
                  
                        <input class="fusha" type="password" class="inputboxi" id="passi" placeholder="Password" required>
                        <label class="fusha" for="passi">Password</label>
                  
                        <br>
                        <input class="remember" type="checkbox" name="checki">
                        <label class="remember" for="checki">Remember me</label>
              
                        <button type="submit" class="submit" id="sign-up">Login</button>
            
                        <small class="newacc"><a class="newacc" href="signupform.html">Don't have an account? Sign up now!</a></small>
                 
                </div>

            </div>

        </form>
        </div>
    </div>
</body>
</html>
        
