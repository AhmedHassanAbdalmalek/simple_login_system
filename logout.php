<?php
    session_start();
    unset($_SESSION["username"]);
    session_regenerate_id();
    session_destroy();
    echo "You are logging out now";
    header("Refresh: 4;URL=index.php");