<?php
//require_once "classes/Person1.php";
spl_autoload_register(function ($className){
    include 'classes/' . $className . '.php';
})
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP</title>
</head>
<body>

    <?php
    $p1 = new Person1("Sergey", 43);
//    $p1->name = 'Sergey';
//    $p1->age = 43;
    $p2 = new Person1('Alex');
//    $p2->name = 'Alex';
//    $p2->age = 11;
//    echo "<h1>", $p1->name, " - ", $p1->age, "</h1>";
//    echo "<h1> $p2->name -  $p2->age</h1>";
    $p1->show();
    $p2->show();
    $p1->MyClass();
    $p2->MyMethod();
    $p3 = clone $p2;
    $p2->name = 'Alexander';
    $p3->show();
    echo "adult age = ". Person1::ADULT_AGE ."<hr/>"
    ?>

</body>
</html>
