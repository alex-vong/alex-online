
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

<a href="?page=projects" class="body-copy view-all-link" target="_blank">
		View All Projects
</a>



