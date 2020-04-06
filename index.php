<?php 

if(isset($_POST['submit'])){
	// var_dump($_FILES);
	if($_FILES['image']['type'] == "image/jpeg" && $_FILES['image']['size'] < 100100 )
	{
		$tmp = $_FILES['image']['tmp_name'];
		$img_name = uniqid().".jpg";
		move_uploaded_file($tmp, "photos/".$img_name);
		echo "<img src='photos/$img_name' width='100px' height='100px'>";
	}else{
		echo "Not Supported";
	}
}


?>
 <form method="POST" action="" enctype="multipart/form-data">
 	<input type="file" name="image" accept="image/*">
 	<input type="submit" name="submit" value="Upload">
 </form>