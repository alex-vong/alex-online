<section class="projects container">
	<section>
		<h2 class="section-heading second-level-heading"><?=ucfirst($page)?></h2>

			
	    <blockquote>
	        <p class="body-copy">"I hear and I forget. I see and I remember. I do and I understand" <span>💭 Confucius</span></p>
	    </blockquote>
	    <p class="body-copy">The quote above sums up my entire web development journey. Early on, I remember being too afraid to start a project due to the paranoia and belief thats I was simply not ready. Instead, I would continue to watch tutorial after tutorial and watch other people build things.</p>

	    <p class="body-copy">It was only after I started building things that I began to understanding the topics and concepts. Constantly building something is one of the greatest learning tools a developer has at their disposal.</p>

	    <p class="body-copy">I will never stop building things because as soon as I do, I will stop learning. So here are a few things I've designed and built:</p>

			    
			
		<projects-grid>
			<?php include("projects-data.php") ?>
			<?php foreach ($projects as $project) {

				if(!$project["demo"]) { 
				include('project-card.php');
				}

			} ?>

			<div class="smaller-projects">
				<section class="bits-grid">
				 	<?php include("projects-data.php") ?> 

					<?php foreach ($smallerProjects as $bit) { 
						include("experiments-grid.php");
				 	 } ?>
			 	
			 	</section>
			</div>



		</projects-grid>




			

	</section>

	<section class="efp">
		<h3 class="section-heading third-level-heading">Exercises for Programmers</h3>
		
		<p class="body-copy">Some challenges I've done from <span>"Exercises for Programmers"</span> by Brian P. Hogan. </p>	


		 <section class="bits-grid">
		 	<?php include("projects-data.php") ?> 

			<?php foreach ($efp as $bit) { 
				include("experiments-grid.php");
		 	 } ?>
		 	
		 </section>
	

		
	</section>

	<section class="bits">
		<h3 class="section-heading third-level-heading">Experiments</h3>
		
		<p class="body-copy">Random snippets of code and experimental bits</p>	


		 <section class="bits-grid background">
		 	<?php include("projects-data.php") ?> 

			<?php foreach ($bits as $bit) { 
				include("experiments-grid.php");
		 	 } ?>
		 	
		 </section>
		

	</section>
	
	
</section>

