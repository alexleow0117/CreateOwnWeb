<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<title>Login</title>
</head>

<body>

    <section class="index-login">
        <div class="wrapper">
            <div class="index-login-signup">
                <h4>SIGN UP</h4>
                <form action="../includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <?php
                        if(isset($_GET['error']) && $_GET['error']=="emptyinput"){
                            echo "this got error";
                        }
                    ?>
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                    <input type="text" name="email" placeholder="E-mail">
                    <br>
                    <button type="submit" name="submit">SIGN UP</button>
                    
                </form>
            </div>

            <br><br><br>
            <div class="index-login-login">
                <h4>LOGIN</h4>
                <form action="../includes/login.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <br>
                    <button type="submit" name="submit">LOGIN</button>
                    
                </form>
            </div>

        </div>
    </section>

</body>
</html>