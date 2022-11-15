

<h2 class="second-level-heading">
	Featured Projects
</h2>
 <p class="body-copy"> 
 	Some projects I built on my web development journey. This will always be a work in progress so be sure to come back to see my latest designs and creations.
</p>
	<?php include('head.php') ?>

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

<a href="?page=projects" class="animated-line view-all-link">
	<p class="body-copy">
		<span >View All Projects</span>
	</p>
</a>



