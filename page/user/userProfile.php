<?php
if(isLoggedIn()) {
    echo('Logged in');
}else{
    echo('Not Logged in');
    ?>
    <meta http-equiv="refresh" content="0; URL='?page=login'">
<?php
}