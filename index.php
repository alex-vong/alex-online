<?php
	$themeClass = '';
	if (!empty($_COOKIE['theme']) && $_COOKIE['theme']) {
	  $themeClass = $_COOKIE['theme'];
}

?>


<!doctype html>
	<?php 
		$page = null;  //setting page to null
		if ( isset ($_GET['page']) ) {  //checking to see if page has been set (url?page=string)
			$page = ($_GET['page']); //setting that query string to variable $page
		} else {
			$page = 'home'; //default to 'home'
		}
		function getTemplate($page) {

			if ($page === 'home') {
					include($page . '.php');
			} else if ($page === 'about' ||
					   $page === 'writing' || 
					   $page === 'projects' || 
					   $page === 'goals' || 
					   $page === 'style-guide' || 
					   $page === 'case-study' || 
					   $page === 'resume' ) 
			{ 
				include('modules/' . $page . '.php');
			} else if ($page === 'weather-app-cs' ||
					   $page === 'todo-app-cs' ||
					   $page === 'signup-cs' ) 
			{
				include('modules/case-studies/' . $page . '.php');
			} else { 
				include('modules/error.php');
			}
		}
	 ?>
<html lang="en">

<?php include('head.php') ?>

<body class="<?=$themeClass?>-theme">
	<header>
		<?php include('masthead.php') ?>
	</header>

	<main>
		<inner-column>
		<?php 
			getTemplate($page);
		?>
		</inner-column>
	</main>

	<footer>
		<?php include('footer.php') ?>
	</footer>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js" integrity="sha512-f8mwTB+Bs8a5c46DEm7HQLcJuHMBaH/UFlcgyetMqqkvTcYg4g5VXsYR71b3qC82lZytjNYvBj2pf0VekA9/FQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
	<script src="script.js"></script>

</body>

</html>