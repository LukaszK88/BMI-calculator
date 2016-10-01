<?php
/**
 * Created by PhpStorm.
 * User: Lukasz
 * Date: 01/10/2016
 * Time: 08:23
 */
require_once 'Bmi.php';
$bmi = new Bmi();

?>
<form action="" method="post">
    
  Height   <input type="text" name="height"><br>
  Weight   <input type="text" name="weight"><br>
    
    <input type="submit" name="submit" value="Submit"><br>
    
    Your Bmi is <?php echo $bmi->getBmi($_POST['height'],$_POST['weight']);?><br>
    
    Your perfect weight should be <?php echo $bmi->bmiPerfect($_POST['height']);?><br>
    
    Your are <?php echo $bmi->bmiCategory();?><br>
    
</form>
