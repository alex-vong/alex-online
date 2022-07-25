<section class="projects">


	<section>

		<h2 class="section-heading second-level-heading"><?=ucfirst($page)?></h2>
		<p class="body-copy">I love building responsive and intuitive websites and am always working on something. Here is a small collection of some of my recent projects and experiences.</p>

	<projects-grid>

		<?php include("projects-data.php") ?>
		<?php foreach ($projects as $project) {

			if(!$project["demo"]) { 
			include('project-card.php');
			}

		} ?>
	</projects-grid>

	<?php include("contact-me.php") ?> 

</section>

	<div class="bits">

		<h3 class="section-heading third-level-heading">Experiments</h3>
		<p class="body-copy">Random Snippets of Code and Experimental Bits</p>	


		 <div class="bits-grid background">
		 	<?php include("projects-data.php") ?> 

			<?php foreach ($bits as $bit) { 
				include("experiments-grid.php");
		 	 } ?>
		 	
		 </div>

	</div>
	
	
</section>

