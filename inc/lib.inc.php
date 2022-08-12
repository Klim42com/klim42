<?php



function renderCategories ($template, $categories = [])
{
    include "$template.inc.php";
}

function renderPublisher ($template, $publisher = [])
{
    include "$template.inc.php";
}

function renderMenu ($template, $menu)
{
    include "$template.inc.php";
}
function saveOrder ($firstName, $lastName, $email, $address)
{
    file_put_contents(ORDERS, "$firstName|$lastName|$email|$address\n", FILE_APPEND);
//    echo "$firstName|$lastName|$email|$address\n";
//    return true;
}