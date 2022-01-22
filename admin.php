<?php

include_once('header.php');

?>

<?php

session_start();

if(isset($_SESSION['admin_name'])){
	
	echo <<<_END
	
	<div class="category">

Admin Settings

</div>

<a href="addmovie"><div class="list">Add New Movie</div></a>

<a href="editmovie"><div class="list">Edit Movie</div></a>

<a href="deletemovie"><div class="list">Delete Movies</div></a>

<a href="logout"><div class="list">Log Out</div></a>
	
_END;

}else{
	
	header('location:index');
	
}

?>

<?php

include_once('footer.php');

?>