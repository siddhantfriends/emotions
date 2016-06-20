<?php
    require_once "../essentials/database_conn.php";

    // Fetching variable's values if set else null
    $gender = isset($_POST["gender-radio-group"]) ? $_POST["gender-radio-group"] : null;
    $age = isset($_POST["age-input"]) ? $_POST["age-input"] : null;
    $nationality = isset($_POST["nationality-dropdown"]) ? $_POST["nationality-dropdown"] : null;
    $education = isset($_POST["education-dropdown"]) ? $_POST["education-dropdown"] : null;
    $degreeTitle = isset($_POST["degree-title"]) ? $_POST["degree-title"] : null;
    $employmentStatus = isset($_POST["employment-status-dropdown"]) ? $_POST["employment-status-dropdown"] : null;

    // Continue if variables are validated else redirect to previous page
    if ($gender != null && $age != null && $nationality != null && $education != null && $employmentStatus != null) {
        // create prepared statement
        $stmt = $conn->prepare("INSERT INTO [dbo].[User]([Gender], [Age], [Nationality], [Education], [DegreeTitle], [EmploymentStatus]) VALUES (:gender, :age, :nationality, :education, :degreeTitle, :employmentStatus)");

        // bind variable values to the placeholders
        $stmt->bindParam(":gender", $gender, PDO::PARAM_STR);
        $stmt->bindParam(":age", $age, PDO::PARAM_INT);
        $stmt->bindParam(":nationality", $nationality, PDO::PARAM_INT);
        $stmt->bindParam(":education", $education, PDO::PARAM_INT);
        $stmt->bindParam(":degreeTitle", $degreeTitle, ($degreeTitle != null) ? PDO::PARAM_STR : PDO::PARAM_NULL);
        $stmt->bindParam(":employmentStatus", $employmentStatus, PDO::PARAM_INT);

        // execute statement and retrieve success: boolean
        $success = $stmt->execute();
        if ($success) {
            // everything went fine continue with this page
            $id = $conn->lastInsertId();

        } else {
            // something went wrong send to previous page
             header ('Location: ../index.php');
        }
    } else {
        // something went wrong send to previous page
        header ('Location: ../index.php');
    }
?>
