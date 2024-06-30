            <?php
            session_start();
            include "header.php";
            ?>
        <!-- Start: This is menu section-->
           <?php
            include "menu.php";
           ?>
        <!-- End: This is menu section-->
        <!-- Start: This is login section-->
        <?php
            if(!isset($_SESSION["usernamesession"])){?>
                <h2 class="display-4">Login System</h2>
                <form class="form-control" action="welcome.php" method="post">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Username" aria-label="User name" name="username">
                    </div>
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Password" aria-label="Last name" name="password">
                    </div>
                   
                    <div class="col">
                        <input type="text" class="form-control" placeholder="email" aria-label="email" name="email">
                    </div>
                    <div class="col">
                        <input type="submit" class="form-control btn btn-primary" value="Login">
                    </div>
                </form>
            <?php }else{
                echo "you are already logged in";
            }
        ?>
        <!-- End: This is login section-->
    <?php
        include "footer.php";
    ?>