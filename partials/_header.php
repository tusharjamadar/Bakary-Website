<?php
    session_start();
    echo '<div class="navbar">
        <div class="logo">
            <a href="index.php"><img src="images/new-log.png"></a>
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Product</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="account.php">Account</a></li>
            </ul>';

            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true){
                echo '<p class="text-light my-0 mx-2" style="display: inline-block; margin: 0px 8px;"> <b>Welcome<br> '.$_SESSION['email'] .'</b></p>
                <a href="logout.php" class="btn1 btn-outline-success ml-2">Logout</a>';
            }
            else{
              echo '<a href="signUp.php" class="btn1" style="margin: 1px 3px;">Sign Up</a>
            <a href="logIn.php" class="btn1" style="margin: 8px 8px;">Log in</a>';
            }

        echo '</nav>
        <a href="cart.html"><img src="images/cart.png" width="30px" height="30px"></a>
        <img src="images/menu.png" class="menu-icon" onclick="menutoggel()">
    </div>';
?>