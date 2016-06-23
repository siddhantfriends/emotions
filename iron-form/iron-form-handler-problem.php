<?php
    
    $questionId = isset($_POST['questionSectionID']) ? $_POST['questionSectionID'] : null;
    $sliderValue = isset($_POST['selectedSliderValue']) ? $_POST['selectedSliderValue'] : null;
    

//echo var_dump($_POST);
    if ($questionId != null && $sliderValue != null) {
        echo "Selected Question ID is : " . $questionId . '<br />';
        echo "Selected Slider value is : ". $sliderValue . '<br />';

    }
?>
