<html>
<body>
    <?php

        if(isset($_POST["gender-radio-group"])) echo $_POST["gender-radio-group"] . "<br />";
        if(isset($_POST["age-input"])) echo $_POST["age-input"] . "<br />";
        if(isset($_POST["nationality-dropdown"])) echo $_POST["nationality-dropdown"] . "<br />";
        if(isset($_POST["education-dropdown"])) echo $_POST["education-dropdown"] . "<br />";
        if(isset($_POST["degree-title"])) echo $_POST["degree-title"] . "<br />";
        if(isset($_POST["employment-status-dropdown"])) echo $_POST["employment-status-dropdown"] . "<br />";

    ?>
</body>
</html>
