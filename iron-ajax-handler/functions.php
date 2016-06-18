<?php

    // retrives nationality
    function nationality() {
        require_once "../essentials/database_conn.php";

        // using prepared statement
        $stmt = $conn->prepare("SELECT [ID], [Country] FROM [dbo].[Nationality]");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }

    // retrives education
    function education() {
        require_once "../essentials/database_conn.php";

        // using prepared statement
        $stmt = $conn->prepare("SELECT [ID], [Education] FROM [dbo].[Education]");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }

    // retrives employment status
    function employmentStatus() {
        require_once "../essentials/database_conn.php";

        // using prepared statement
        $stmt = $conn->prepare("SELECT [ID], [Status] FROM [dbo].[EmploymentStatus]");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }


?>