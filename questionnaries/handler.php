<?php
    require_once "../essentials/database_conn.php";

    // Fetching variable's values if set else null
    $questionID = isset($_POST["questionSectionID"]) ? $_POST["questionSectionID"] : null;
    $ratingSlider = isset($_POST["rating"]) ? $_POST["rating"] : null;


    // Continue if variables are validated else redirect to previous page
    if ($questionID != null && $ratingSlider != null) {
        // create prepared statement
        $stmt = $conn->prepare("INSERT INTO [dbo].[UserSelectionAnswer]([UserID], [SelectionID], [TypeOf], [Answer], VALUES (:userID, :selectionID, :typeID, :answer)");

        // bind variable values to the placeholders
        $stmt->bindParam(":userID", 1, PDO::PARAM_INT);
        $stmt->bindParam(":selectionID", $questionID, PDO::PARAM_INT);
        $stmt->bindParam(":typeID", IUIPC, PDO::PARAM_INT);
        $stmt->bindParam(":answer", $ratingSlider, PDO::PARAM_STR);
        
        // execute statement and retrieve success: boolean
        $success = $stmt->execute();
        if ($success) {
            // everything went fine continue with this page
            $id = $conn->lastInsertId();

        }
    }?>