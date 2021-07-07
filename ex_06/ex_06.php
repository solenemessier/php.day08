<?php
function remove_cookie ($cookie) {
    setcookie($cookie,"",-1);
}
?>