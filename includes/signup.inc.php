<?php

    if(isset($_POST["submit"])){
        //get the data
        $uid=$_POST["uid"];
        $pwd=$_POST["pwd"];
        $pwdRepeat=$_POST["pwdrepeat"];
        $email=$_POST["email"];

        //instantiate signupcontr class
        include "../admin/classes/dbh.classes.php";
        include "../admin/classes/signup.classes.php";
        include "../admin/classes/signup-contr.classes.php";
        $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

        //running error handlers and user signup
        $signup->signupUser();

        //redirect to home page
        header("location: ../admin/index.php?error=none");
    }
