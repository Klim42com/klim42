<header>
    <p><a href="../../">study</a></p>
    <p><a href="../../../">Home</a></p>
</header>
<?php

echo 123, "<br/>";//integer
echo 36.6, "<br/>";//float
echo true, "<br/>";//boolean
echo "Hello world!", "<br/>";//string
echo NULL, "<br/>";
print_r([2,3,5,8]);
echo "<br/>";
echo 'Hello world!!', "<br/>";
echo <<<LABEL
Hello world!!!<br/>
LABEL;
echo <<<'LABEL'
Hello world!!!!<br/>
LABEL;

$salary = 100000;
echo $salary, "<br/>";
$salary += 10000;
echo $salary, "<br/>";
echo "<mark>$salary</mark><br/>";
echo '<mark>$salary</mark><br/>';
echo '<mark>{$salary}</mark><br/>';

//const MY-NAME = 'Andrew';
const myName = 'Andrew';
echo myName, '<br/>';
echo "Hello";
?>
<h1><?=$salary?></h1>
<?php
echo myName, "<br/>";
const MIDDLE = 87000;
const SENIOR = 105000;
if ($salary < MIDDLE) {
    echo 'to study <br/>';
}
else {
    echo 'to work', "<br/>";
}
if ($salary < MIDDLE) {
    echo 'to study', "<br/>";
}elseif ($salary > SENIOR) {
    echo 'to have a rest', "<br/>";
}echo 123, '<br/>';
echo $salary > MIDDLE ? "to work <br/>" : "to study <br/>";
//echo phpinfo();
$day = strftime("%u");
echo $day;
$menu = 'Week day';
switch ($day){
    case 1: $menu = "Monday";       break;
    case 2: $menu = "Tuesday";      break;
    case 3: $menu = 'Wednesday';    break;
    case 4: $menu = 'Thursday';     break;
    case 5: $menu = 'Friday';       break;
    case 6: $menu = 'Saturday';     break;
    case 7: $menu = 'Sunday';       break;
}
echo "<br/> $day - $menu";
$htmllab = 'ru';
echo "<br/>", $htmllab, "<br/>";
const NPP = 10;
echo NPP, "<br/>";
$sum1 = 23;
$sum2 = 67;
echo $sum1+$sum2,"<br/>";
$test = "345";
echo gettype($test),"<br/>";
echo $test-3,"<br/>";
$a = 1;
$b = &$a;
$a = 2;
echo "\$a = $a \$b = $b<br/>";
function makeCoffee ($type = 'Latte'): string
{
    return "We will make a cup of $type.<br/>";
}
echo makeCoffee();
echo makeCoffee(null);
echo makeCoffee("Cappuccino");

function renderCategories ($categories): string
{
    $result = '';

    if (count($categories)) {
        $i = 0;
        while ($i < count($categories)) {
            $category = $categories[$i];
            $result .= <<<LABEL
            <a class="dropdown-item" href="#">{$category}</a>
            LABEL;
            $i++;
        }
    }
    else {
        $result .= <<<LABEL
    <p class="dropdown-item">No Categories</p>
    LABEL;
    }
    return $result;
}

function renderPublisher ($publisher): string
{
    $result = '';
    if (count($publisher)) {
        for ($i = 0; $i < count($publisher); $i++) {
            $result .= <<<LABEL
        <li class="list-group-item">
            <input type="checkbox"   id="exampleCheck$i">
            <label class="form-check-label" for="exampleCheck$i">$publisher[$i]</label>
        </li>
    LABEL;
        }
        $result .= <<<LABEL
        <li class="list-group-item">
        <button type="button" class="btn btn-success">Найти</button>
        </li>
    LABEL;
    } else {
        $result .= <<<LABEL
    <li class="list-group-item">
        <p class="form-check-label">No publisher!</p>
    </li>
    LABEL;
    }
    return $result;
}

