<link rel="stylesheet" href="css/styles.css">

<div id = "heading-text">
    <h1>Reversed Text Output: <br/></h1>
</div>
<div id="reverse-text">
    
<?php


if (!empty($_POST["reverse-elements"])) {
    $reverse_array = str_split($_POST["reverse-elements"]);
    $array_length = sizeof($reverse_array);
    $dash = "-";
 
    for ($i = $array_length - 1; $i >= 0; $i--) {
        echo $reverse_array[$i];
        switch($i)
        {
        //Removing the dash before the first letter.
        case 0:
        continue 2;

        default:
        echo $dash;
        }
    }
}

?>
</div>

<a id="back-button" type="submit" href="reverse-elements.php">Genarate another word</a>