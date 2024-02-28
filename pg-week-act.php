<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days of the Week</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" value="Monday" name="monday">
        <input type="submit" value="Tuesday" name="tuesday">
        <input type="submit" value="Wednesday" name="wednesday">
        <input type="submit" value="Thursday" name="thursday">
        <input type="submit" value="Friday" name="friday">
    </form>

    <?php
    if (isset($_POST['monday'])) {
        echo "<br>You Clicked MONDAY!"
    }
    if (isset($_POST['tuesday'])) {
        echo "<br>You Clicked TUESDAY!"
    }
    if (isset($_POST['wednesday'])) {
        echo "<br>You Clicked WEDNESDAY!"
    }
    if (isset($_POST['thursday'])) {
        echo "<br>You Clicked THURSDAY!"
    }
    if (isset($_POST['friday'])) {
        echo "<br>You Clicked FRIDAY!"
    }
    ?>
</body>
</html>