<?php

include_once('header.php');

?>

<?php

if(isset($_POST['submit'])){
	
	include_once('config.php');
	
	$folder = 'poster/';
  
$filename = htmlentities($_FILES['file']['name']);
  
$poster = $folder . $filename;
  
move_uploaded_file($_FILES['file']['tmp_name'], $folder.$filename);
	
$name  = $_POST['name'];

$cast  = $_POST['cast'];

$size  = $_POST['size'];

$category  = $_POST['category'];

$more_category  = $_POST['more_category'];

$year  = $_POST['year'];

$language  = $_POST['language'];

$link  = $_POST['link'];

$duration  = $_POST['duration'];

$quality  = $_POST['quality'];
	
$sql = "INSERT INTO movies_details(name,poster,cast,size,category,more_category,year,language,link,duration,quality)VALUES('$name','$poster','$cast','$size','$category','$more_category','$year','$language','$link','$duration','$quality')";
	
mysqli_query($connect,$sql);
	
}

?>

<?php

session_start();

if(isset($_SESSION['admin_name'])){
	
	echo <<<_END

<div class="category">

Add Movie

</div>

<div class="border">

<form action="" method="post" enctype="multipart/form-data">

	
Name :

<br/>

<input name="name" type="text" class="text" placeholder="">

<br/>
 
Cast :

<br/>

<input name="cast" type="text" class="text" placeholder="">

<br/>

Size :

<br/>

<input name="size" type="text" class="text" placeholder="">

<br/>

Category :

<br/>

<select class="text" name="category" required>

<option value="South Indian Movies [Hindi Dubbed]">South Indian Movies [Hindi Dubbed]</option>
 
<option value="Hollywood Movies [Hindi Dubbed]">Hollywood Movies [Hindi Dubbed]</option>
  
<option value="Hollywood Movies [English]">Hollywood Movies [English]</option>
   
<option value="Bollywood Movies [Hindi]">Bollywood Movies [Hindi]</option>
	
<option value="Tollywood Movies [Bangla]">Tollywood Movies [Bangla]</option>

 </select>

<br/>

Genre : 

<br/>

<select class="text" name="more_category" required>

<option value="Animated Movies">Animated Movies</option>

<option value="Comedy Movies">Comedy Movies</option>

<option value="Horror Movies">Horror Movies</option>

<option value="Action Movies">Action Movies</option>

<option value="Sci-Fi Movies">Sci-Fi Movies</option>

</select>

<br/>

Year : 

<br/>

<input name="year" type="text" class="text">

<br/>

Languages : 

<br/>

<input name="language" type="text" class="text">

<br/>

Link : 

<br/>

<input name="link" type="text" class="text">

<br/>

Duration

<br/>

<input name="duration" type="text" class="text">

<br/>

Quality : 

<br/>

<input name="quality" type="text" class="text">

<br/>

<input name="file" type="file" class="text" required id="file"/>

<center>

<input name="submit" type="submit" class="submit" value="Add Movie">

</center>

</form>

</div>


_END;

}else{
	
	header('location:index');
	
}

?>



<?php

include_once('footer.php');

?>
	
	
	
	