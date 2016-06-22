<?php
    $variable_name = isset($_POST['variable-name']) ? $_POST['variable-name'] : null;

    if ($variable_name != null) {
        echo $variable_name;
    }

    $variable_name2 = isset($_GET['variable-name2']) ? $_GET['variable-name2'] : null;

    if ($variable_name2 != null) {
        echo $variable_name2;
    }
?>
