<?php

include_once('header.php');

?>

<?php

$category = htmlentities($_GET['name']);

echo <<<_END

<div class="category">

<img src="img/home (1).png"> 

<a href="index">Home</a> ~ $category

</div>

_END;

?>

<?php

if(isset($_GET['name'])){
	
	include_once('config.php');
	
	$category = htmlentities($_GET['name']);
	
	$sql = "SELECT * FROM movies_details WHERE category = '$category' Or more_category = '$category'";
	
    $result = mysqli_query($connect,$sql);
	
	while($row = mysqli_fetch_array($result)){
		
		$id = $row['id'];
		
		$name = $row['name'];
		
		$size = $row['size'];
		
		$year = $row['year'];

echo <<<_END

<a href="movie?name=$name">

<div class="list">

<img src="img/folder.png">

<b>$name</b>

</div>

</a>

_END;
		
}
 
}
	
	?>
	
<?php

include_once('footer.php');

?>
	