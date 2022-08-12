<?php
    //require_once "classes/Person.php";
    //__autoload($className)

    /*function my_autoload($className) {
        include 'classes/' . $className . '.php';
    }

    // Standart PHP Library
    spl_autoload_register('my_autoload');*/
    
    
    spl_autoload_register(function ($className) {
        include 'classes/' . $className . '.php';
    });

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>persons</title>
</head>
<body>	
    <?php
       Person::showTotal();

        $p1 = new Person("Sergey", 43);
        //$p1->show();
        //$p1->name = "Sergey";
        //$p1->age  = 43;

        //$p2 = new Person("Alex", 11);
        $p2 = new Person("Alex", 11);
        //$p2->name = "Alex";
        //$p2->age = 11;
        
        //echo "<h1>", $p1->name, " - ", $p1->age, "</h1>";
        //echo "<h1>$p2->name - $p2->age</h1>";

        $p1->show(); // $this == $p1
        $p2->show(); // $this == $p2
        unset($p1);
        //$p3 =  $p2;
        $p3 = clone $p2;
        try {
            //$p2->age++; // access error
            $p2->setAge(140);
            $p2->show(); // Alex - 19
            $p3->show(); // Alex - ??           
        }
        catch (Exception $ex) {
            echo $ex->getMessage() . 
            " File: " . $ex->getFile().
            " Line: " . $ex->getLine() . "<br>";
        }


        echo "Adult age: " . Person::ADULT_AGE . "<hr/>";

        $b1 = new Book2;

        $s1 = new Worker("Andrey", 35, 100);
        $s1->opPerMin = 5;
        $s1->salary = 100;

        //$s1->name = "Andrey";
        //$s1->age  = 35;

        $s1->show();
        $s1->increaseSalary(20);
        //echo $s1->salary;
        echo "<h2>Person property</h2>";
        foreach($p2 as $propName => $propValue)
            echo "<h3>$propName : $propValue</h3>";

        $m = new Manager("Zver", 38, 200);

        //$s1->doWork();
        //$m->doWork();

        function work(Stuff $stuff) {
            echo "<h2>WORK</h2>";
            $stuff->doWork();
        }

        function zakopat(CanDig $digger, $what) {

            if ($digger instanceOf Worker) {
                $digger->increaseSalary(20);
                echo 'Increase salary for worker<br>';
            }
            $digger->startDig();
            echo "Put $what<br>";
            $digger->stopDig();

        }

        work($s1);
        work($m);

        zakopat($s1, "Gold");

        zakopat(new Digger, 'Silver');

        // new Stuff("S", 1,1);

        Person::showTotal();

        echo "Worker instanceOf Worker: ". $s1 instanceOf Worker ."<br>";
        echo "Worker instanceOf Stuff: ". $s1 instanceOf Stuff ."<br>";
        echo "Worker instanceOf Person: ". $s1 instanceOf Person ."<br>";
        echo "Worker instanceOf CanDig: ". $s1 instanceOf CanDig ."<br>";
        echo "Manager instanceOf CanDig: ". $m instanceOf CanDig ."<br>";

        echo "<h1>", $s1, "</h1>";

        echo $s1->sayHello();
        echo $s1->stringHello;


    ?>
</body>
</html>
