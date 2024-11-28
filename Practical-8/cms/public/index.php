<?php include("../includes/db_connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Widget Corp</title>
</head>
<body>
    <h1>Widget Corp</h1>
    <nav>
        <ul>
            <?php
            $query = "SELECT * FROM subjects WHERE visible = 1 ORDER BY position ASC";
            $result = mysqli_query($connection, $query);
            while ($subject = mysqli_fetch_assoc($result)) {
                echo "<li><a href='page.php?id={$subject['id']}'>{$subject['menu_name']}</a></li>";
            }
            ?>
        </ul>
    </nav>
    <section>
        <h2>Welcome to Widget Corp</h2>
        <p>Please choose a subject to see its content.</p>
    </section>
</body>
</html>
