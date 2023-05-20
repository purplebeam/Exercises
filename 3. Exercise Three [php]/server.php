
<link rel="stylesheet" href="css/styles.css">

<div id="requirements">
<?php

// var_dump($_POST);
switch($_POST) {
case (empty($_POST["name"])):
    {
    echo "<br/>";
    echo "Name is required.";
    break;
}

case (empty($_POST["lastname"])):
    {
    echo "<br/>";
    echo "Lastname is required.";
    break;
}

case (empty($_POST["email"])): {
    echo "<br/>";
    echo "E-mail is required.";
    break;
}

case (empty($_POST["password"])): {
    echo "<br/>";
    echo "Password is required.";
    break;
}

case ($_POST["password"] != $_POST["confirmation"]): {
    echo "<br/>";
    echo "Passwords do not match.";
    break;
}
default:
 {
    echo "<br/>";
    echo "Successful Form";
    break;
}
}
?>
</div>
