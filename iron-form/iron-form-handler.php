<?php
    $variable = isset($_POST['xyz']) ? $_POST['xyz'] : null;

    if ($variable != null) {
        echo var_dump($variable) . '<br />';
        echo var_dump($_POST) . '<br />';
    }

    $polymer_element = isset($_POST['polymer-element']) ? $_POST['polymer-element'] : null;

    if ($polymer_element != null) {
        echo var_dump($polymer_element) . '<br />';
        echo var_dump($_POST) . '<br />';
    }
?>
