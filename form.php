<form action="index.php" method="POST">
height:
<input type="text" name="height" maxlength="3" size="1" >cm
<br><br>
Weight:
<input type="text" name="weight" maxlength="3" size="1" >kg
<br><br>
<input type="submit" value="Get your BMI">
<br><br>
Your BMI is:
<input type="text" value="<?php if(isset($H_W) and !empty($H_W)){ echo $BMI_F;}?>"  size="3">
</form>