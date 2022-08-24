<?php

    if(isset($_POST["submit"])){
        //get the data
        $uid=$_POST["uid"];
        $pwd=$_POST["pwd"];

        //instantiate signupcontr class
        include "../admin/classes/dbh.classes.php";
        include "../admin/classes/login.classes.php";
        include "../admin/classes/login-contr.classes.php";
        $login = new LoginContr($uid, $pwd);

        //running error handlers and user signup
        $login->loginUser();

        //redirect to home page
        header("location: ../admin/index.php?error=none");
    }
