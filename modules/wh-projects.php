

<h2 class="second-level-heading">
	Featured Projects
</h2>
 <p class="body-copy"> 
 	A collection of some of the projects I am currently working on
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
<!-- 
<a href="?page=projects" class="animated-line view-all-link">
	<p class="body-copy">
		<span >View All Projects</span>
	</p>
</a>
 -->


