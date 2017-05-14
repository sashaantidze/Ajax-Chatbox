<?php include 'database.php'; ?>
<?php

$query = "SELECT * FROM shouts ORDER BY id DESC";
$shouts = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shoutbox</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <div id="container">
        <header>
            <h1>Chat Shoutbox</h1>
        </header>
        <div id="shouts">
            <ul>
               <?php
                while($row = mysqli_fetch_assoc($shouts)){
                    $name = $row['name'];
                    $shout = $row['shout'];
                    $date = $row['date'];
                    
                    echo '<li>'.$name.': [ '.$date.' ]'.' -- '.$shout.'</li>';
                }
                ?>
            </ul>
        </div>
        <footer>
            <form>
                <label for="name">Name</label>
                <input type="text" id="name" placeholder="Your Name">
                <label for="text">Shout Text</label>
                <input type="text" id="shout" placeholder="Type Your Shout Here">
                <input type="submit" value="Shout" name="submit" id="submit">
            </form>
        </footer>
    </div>
</body>
</html>