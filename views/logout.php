<?php
    session_destroy();
    echo("<script>alert('signout')</script>");
    header('refresh:0; ?page=login');
?>
