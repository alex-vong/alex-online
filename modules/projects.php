<section class="projects container">
	<section>

		<h2 class="section-heading second-level-heading"><?=ucfirst($page)?></h2>
		<p class="body-copy">I love building responsive and intuitive websites and am always working on something. Here is a small collection of some of my recent projects and experiences.</p>

		<projects-grid>
			
	    <blockquote>
	        <p class="body-copy">"I hear and I forget. I see and I remember. I do and I understand" <span>💭 Confucius</span></p>

	    </blockquote>

			<?php include("projects-data.php") ?>
			<?php foreach ($projects as $project) {

				if(!$project["demo"]) { 
				include('project-card.php');
				}

			} ?>
		</projects-grid>

	</section>

	<section class="bits">

		<h3 class="section-heading third-level-heading">Experiments</h3>
		<p class="body-copy">Random Snippets of Code and Experimental Bits</p>	


		 <section class="bits-grid background">
		 	<?php include("projects-data.php") ?> 

			<?php foreach ($bits as $bit) { 
				include("experiments-grid.php");
		 	 } ?>
		 	
		 </section>
		</a>

	</section>
	
	
</section>

