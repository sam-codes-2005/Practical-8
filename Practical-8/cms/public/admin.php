<?php
include("../includes/session.php");
confirm_logged_in();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Menu</title>
</head>
<body>
    <h1>Admin Menu</h1>
    <ul>
        <li><a href="manage_content.php">Manage Website Content</a></li>
        <li><a href="manage_admins.php">Manage Admin Users</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>
