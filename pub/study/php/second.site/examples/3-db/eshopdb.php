<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>EShop db</title>
</head>
<body>	

    <h1>Books</h1>
    <table border=1>
    <?php
        include "config.php";

        $mysqli = new mysqli(DBHOST, DBLOGIN, DBPASS, DBNAME);

        $result = $mysqli->query("SELECT title, author, price, description FROM book ORDER BY title");
        foreach($result as $row) {
            echo "<tr><td>".$row['title']."</td><td>".
            $row['author']."</td><td>".
            $row['price']."</td></tr>";

        }

        /*while ($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row['title']."</td><td>".
            $row['author']."</td><td>".
            $row['price']."</td></tr>";
        }*/

        $stmt = $mysqli->prepare("INSERT INTO book(title, author, price) VALUES (?, ?, ?)");
          
        $title = 'Dune';
        $author = 'Frank Herbert';
        $price =  1500;
        $stmt->bind_param("ssd", $title, $author, $price); 

        $stmt->execute();
        


    ?>
    </table>
</body>
</html>