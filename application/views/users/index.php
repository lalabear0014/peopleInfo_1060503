<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hi~This is my user page!!!</h1>
    <?php
        echo "records from database<br>";
        foreach ($records as $rec) {
            echo $rec->id."   ".$rec->name."   ".$rec->password."   ".$rec->email."<br>";
        }
    ?>
</body>
</html>