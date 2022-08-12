<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $author = trim(strip_tags($_POST['author']));
    $title = trim(strip_tags($_POST['title']));
    $price = 1 * ($_POST['price']);
    $description = trim(strip_tags($_POST['description']));
//    echo $firstName;
//    $order = "$firstName|$lastName|$email|$address|<br/>";
    if ($author && $title && $description) {
        $query = "INSERT INTO book VALUES (NULL, '$author', '$title', $price, '$description')";
//        mysqli_query($db, $query);
        if (mysqli_errno($db)){
            $_SESSION['flash'] = ['danger'=>'book adding error: '.mysqli_error($db)];
            header('Location: /study/php/first-site/?page=addbook');
            die;
        }
        $_SESSION['flash'] = ['success'=>'The book added!'];
        header('Location: /study/php/first-site/?page=addbook');
        die;
    }
    $_SESSION['flash'] = ['danger'=>'Please, fill in all fields of the form!'];
//    $messages [] = 'Please, fill in all fields of the form!';
    header('Location: /study/php/first-site/?page=addbook');
    die;
}
?>
<?php
print_r(mysqli_errno($db));
if (array_key_exists('flash', $_SESSION) && count($_SESSION['flash'])){
    foreach ($_SESSION['flash'] as $key => $flash) {
        ?>
        <div class="alert alert-<?=$key?>"><?=$flash?>
        </div>
        <?php
    }
    unset($_SESSION['flash']);
}
?>
<h1>Adding a book</h1>
<div class="row">

    <div class="col-md-6">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt explicabo labore totam quaerat nulla consequatur, quisquam quos voluptate. Labore soluta sequi at ratione? Quidem eveniet temporibus nemo iste delectus culpa?</p>
        <p>Accusantium eius aliquam quo illo mollitia doloribus cumque voluptas odit iusto maxime, dicta quaerat voluptatem harum id! Sapiente quidem totam esse quas quos, atque odit possimus reiciendis saepe magnam impedit!</p>
        <p>Iusto, quod, deserunt eveniet ipsam ab accusamus incidunt minima sed doloremque molestias hic perferendis natus necessitatibus repellat quam omnis, magnam suscipit quae. Commodi eaque mollitia quas ipsa accusamus sint voluptatibus!</p>
        <p>Debitis molestiae consequatur sapiente soluta consectetur. Magni ipsa dignissimos ut quod unde eaque asperiores cumque! Reprehenderit numquam voluptatibus nesciunt tenetur, unde ut architecto est magni alias, harum natus. Aperiam, placeat?</p>
    </div>
    <div class="col-md-6">
        <form class="form-signin" action="?page=addbook" method="post">

            <div class="form-label-group">
                <input type="text" id="inp1" class="form-control" placeholder="author" required autofocus autocomplete="off" name="author">
                <label for="inp1">author</label>
            </div>
            <div class="form-label-group">
                <input type="text" id="inp2" class="form-control" placeholder="title" required autofocus autocomplete="off" name="title">
                <label for="inp2">title</label>
            </div>
            <div class="form-label-group">
                <input type="text" id="inp3" class="form-control" placeholder="0" required autofocus autocomplete="off" name="price">
                <label for="inp3">price</label>
            </div>
            <div class="form-label-group">
                <input type="text" id="inp4" class="form-control" placeholder="description" required autofocus autocomplete="off" name="description">
                <label for="inp4">description</label>
            </div>


            <button class="btn btn-lg btn-primary btn-block" type="submit">Add the book</button>

        </form>
    </div>

</div>



