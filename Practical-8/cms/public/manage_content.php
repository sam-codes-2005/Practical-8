<?php
include("../includes/session.php");
confirm_logged_in();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Content</title>
</head>
<body>
    <h1>Manage Content</h1>
    <ul>
        <li><a href="#">Add New Subject</a></li>
        <li><a href="#">Edit Existing Content</a></li>
    </ul>
    <p><a href="admin.php">Back to Admin Menu</a></p>
</body>
</html>
