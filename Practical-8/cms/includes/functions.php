<?php
function redirect_to($new_location) {
    header("Location: " . $new_location);
    exit;
}

function mysql_prep($string) {
    global $connection;
    return mysqli_real_escape_string($connection, $string);
}
?>
