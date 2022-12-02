

<!-- <h2 class="second-level-heading">
	Featured Projects
</h2> -->
 <p class="body-copy for-those"> 
 	For those who like to see projects &darr;
</p>

<div class="wh-projects">
	<projects-grid>
		
		<?php include("modules/projects-data.php") ?>
		<?php foreach ($projects as $project) {

			if($project["hot"]) { 
				include('project-card.php');
			 }
		} ?>

	</projects-grid>
</div>

<a href="?page=projects" class="body-copy view-all-link">
		View All Projects
</a>



