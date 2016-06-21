<?php
    // includes
    include "functions.php";


    if(isset($_GET["type"])) {
        switch ($_GET["type"]) {
            case "nationality":
                nationality();
                break;
            case "education":
                education();
                break;
            case "employment-status":
                employmentStatus();
                break;
            case "ques":
                question();
                break;
                
//            case "questionaire":
//                questionaire($_GET["type"])
//                break;
                
        }
    }


?>
