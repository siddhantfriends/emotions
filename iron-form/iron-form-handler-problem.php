<?php
//echo var_dump($_POST);

for ($x=1; $x <=5; $x++){
    $questionId = isset($_POST['questionSectionID'.$x]) ? $_POST['questionSectionID'.$x] : null;
    $sliderValue = isset($_POST['slider'.$x]) ? $_POST['slider'.$x] : null;
    
    if ($questionId != null && $sliderValue != null) {
        echo "Selected Question ID is : " . $questionId . '<br />';
        echo "Selected Slider value is : ". $sliderValue . '<br />';
    }
}
?>
