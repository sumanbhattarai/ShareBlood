

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method= "POST">
<select name="demo" id="">
    <option value="" disable>Chose the subject</option>
    <option value="math">Math</option>
    <option value="science">Scince</option>
</select>
<input type="submit" value="submit" name="submit">
</form>

<?php

if(isset($_POST['submit'])){
    echo $_POST['demo'];
}




?>
    
</body>
</html>