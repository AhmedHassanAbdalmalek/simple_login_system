<?php
    session_start();
    include "header.php";


if (isset($_POST["username"])&&isset($_POST["password"])){
    $username=$_POST["username"];
    $password=$_POST["password"];

    $_SESSION["usernamesession"]=$_POST["username"];
    include "menu.php";
    echo "<h3 class='display-3'>Welcome $username</h3>";



    $email=$_POST["email"];
    $match=filter_var($email,FILTER_VALIDATE_EMAIL);
    $username=$_POST["username"];
    
    
    
    if($username=="ahmed"||$username=="asmaa"){
    if($match==0){
    
        
        echo "sorry your entry is not email <br>";
    
    
    }else
    {
        
        echo ("YOUR EMAIL IS :"),filter_var( $email,FILTER_SANITIZE_EMAIL) ."<hr>";
      
    }
    
    
    
    
    
    
    
    $username=$_POST["username"];
    
    
    
    // $a="ahmed"
    
    $pattern="/^[a-zA-Z]+$/";
    
    $M=preg_match($pattern,$username);
    
    
    
    if($M!==1){
    
    echo "sorry your USERNAME is not STRING <br> ";
    
    
    
    }else
    
    
    
        echo ("your user name is:"),$username."<hr>";
    
        echo "your password is:".$_POST["password"]."<hr>";
    }
    else
    echo"sorry not allowed to access";
















}else{
    header("Location: index.php");
}?>
<?php
    include "footer.php";
?>