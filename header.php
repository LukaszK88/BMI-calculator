<?php
if (isset($_POST['bodyFAT'])){
	header ('location: http://127.0.0.1/body_fat_calculator/index.php/');
}else{
	echo 'no';
}

?>
<form action="index.php" method="POST">
<input type="submit" name="bodyFAT" value="try it out">
</form>