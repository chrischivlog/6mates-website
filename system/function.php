<?php

function isLoggedIn() {
    if(isset($_SESSION['email'])) {
        return true;
    }else{
        return false;
    }
}

?>