<html>
<body>
    <?php
        require_once "essentials/database_conn.php";
    
//          //For testing purpose only
//        if(isset($_POST["gender-radio-group"])) echo $_POST["gender-radio-group"] . "<br />";
//        if(isset($_POST["age-input"])) echo $_POST["age-input"] . "<br />";
//        if(isset($_POST["nationality-dropdown"])) echo $_POST["nationality-dropdown"] . "<br />";
//        if(isset($_POST["education-dropdown"])) echo $_POST["education-dropdown"] . "<br />";
//        if(isset($_POST["degree-title"])) echo $_POST["degree-title"] . "<br />";
//        if(isset($_POST["employment-status-dropdown"])) echo $_POST["employment-status-dropdown"] . "<br />";

        $sqlQuery = "INSERT INTO [dbo].[User](Gender,
        Age,
        Nationality,
        Education,
        DegreeTitle,
        EmploymentStatus) VALUES (
        :userGender,
        :userAge,
        :userNation,
        :userEdu,
        :userDeg,
        :userEmp)";

    if(isset($_POST["gender-radio-group"])&& (isset($_POST["age-input"])) && (isset($_POST["nationality-dropdown"])) && (isset($_POST["education-dropdown"])) && (isset($_POST["degree-title"])) ){
        $result = $conn->prepare($sqlQuery);

        $result->bindParam(':userGender', $_POST['gender-radio-group'], PDO::PARAM_STR);
        $result->bindParam(':userAge', $_POST['age-input'], PDO::PARAM_STR);
        $result->bindParam(':userNation', $_POST['nationality-dropdown'], PDO::PARAM_STR);
        $result->bindParam(':userEdu', $_POST['education-dropdown'], PDO::PARAM_STR);
        if((isset($_POST["degree-title"])))
        {$result->bindParam(':userDeg', $_POST['degree-title'], PDO::PARAM_STR);}
        else{$result->bindParam(':userDeg', null, PDO::PARAM_STR);}
        $result->bindParam(':userEmp', $_POST['employment-status-dropdown'], PDO::PARAM_STR);
        $result->execute();
        }
    ?>
</body>
</html>
