<html>
<body>
<?php
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

$result = $pdo->prepare($sqlQuery);

$result->bindParam(':userGender', $_POST['gender-radio-group'], PDO::PARAM_STR);
$result->bindParam(':userAge', $_POST['age-input'], PDO::PARAM_STR);
$result->bindParam(':userNation', $_POST['nationality-dropdown'], PDO::PARAM_STR);
$result->bindParam(':userEdu', $_POST['education-dropdown'], PDO::PARAM_STR);
$result->bindParam(':userEmp', $_POST['employment-status-dropdown'], PDO::PARAM_STR);
$result->execute();
?>
</body>
</html>