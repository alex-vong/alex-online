<section class="experiments">
	<inner-column>
		<h2 class="section-heading top-level-heading">Random Bits</h2>

		<div class="container">


			 <p class="body-copy intro">Take a look at some of the projects I have worked on</p>

			 <div class="projects-grid">
			 	<?php include("projects-data.php") ?>

				<?php foreach ($bits as $project) { 
					include("projects-grid.php");
			 	 } ?>
			 	
			 </div>

			 <div class="blogs">

			 	<h3 class="second-level-heading">CodePens</h3>
			 		<div class="blog-grid">

					 	<?php foreach ($codePens as $blog) {
					 		include("article-grid.php"); 
					 	} ?>
				 	</div>
			 
			 </div>
					
		</div>

	<?php include("contact-me.php") ?>

	</inner-column>
</section>
