

<section class="style-guide">
	<inner-column>

		<section class="headline">
			<h1 class="section-heading top-level-heading"> Style Guide</h1>
			<div>
				<p class="sg-intro body-copy">
				This style guide page will serve as a resource template for all the design elements, choices, and rules for <a href="https://alexvong.dev" target="_blank">alexvong.dev</a>
				</p>
			</div>
<!-- 		<div class="theme-switcher">
			<switcher>
				<a href="?page=style-guide" class="quiet-voice <?php if ($page == "style-guide") { echo "active"; } ?>"><button data-scheme='day' class="quiet-voice day">Day </button></a>
				<a href="?page=style-guide" class="quiet-voice <?php if ($page == "style-guide") { echo "active"; } ?>"><button data-scheme='night' class="quiet-voice night">Night</button></a> 
				
				 <button data-scheme='night' class="quiet-voice night">Dark </button>
			</switcher>	 
		</div>  -->
		</section>

		<section class="sg-colors">
			<?php include('sg-swatches.php') ?>
			
		</section>

		<section class="sg-font">
			<?php include("sg-fonts.php") ?>
		</section>

		<section class="sg-voice-types">
			<?php include("sg-voice-types.php") ?>

		</section>

		<section class="sg-project-card">

			<h3 class="second-level-heading">Projects</h3>
			<h2 class="body-copy">This will be the project card</h2>	
			<div class="demo-project-card">
								<?php include("modules/projects-data.php") ?>
				<?php foreach ($projects as $project) {

					if($project["demo"]) { 
					include('project-card.php');
					}

				} ?>
			</div>

		</section>

		<section class="sg-blogs">

			<h3 class="second-level-heading">Blogs</h3>
			<h2 class="body-copy">Layout for articles</h2>	
		
			<div class="article-grid">
				<?php include("modules/projects-data.php") ?>

				<?php foreach ($latestBlog as $blog) { 

					if($blog["demo"]) { 
					include('article-grid.php');
					}

				 } ?>
			</div>

		</section>


		<section class="sg-animations">

			<h3 class="second-level-heading">Animations</h3>


			<div class="hover-state">
				<a href="#" class="animated-line" target="_blank">
					<p class="body-copy">
						<span class="animated-line">Hover over Links</span>
					</p>
				</a>
			</div>

			<p class="body-copy">Hover gradient border over project cards:</p>
	
				<?php include("modules/projects-data.php") ?>
				<?php foreach ($projects as $project) {

					if($project["demo"]) { 
					include('project-card.php');
					}

				} ?>

		</section>
		

	</inner-column>
</section>