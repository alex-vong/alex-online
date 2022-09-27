

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

		<section class="headings">
				<h3 class="intro-voice">Headings</h3>
				<h2 class="second-level-heading">This will be the layout and style of headings throughout the site</h2>	
		</section>


		<section class="sg-project-card">

			<h3 class="intro-voice">Projects</h3>
			<h2 class="second-level-heading">This will be the project card</h2>	
		
			<projects-grid>
				<?php include("modules/projects-data.php") ?>
				<?php foreach ($projects as $project) {

					if($project["demo"]) { 
					include('project-card.php');
					}

				} ?>

			</projects-grid>

		</section>

		<section class="sg-blogs">

			<h3 class="intro-voice">Blogs</h3>
			<h2 class="second-level-heading">Layout for articles</h2>	
		
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

			<h3 class="intro-voice">Animations</h3>
			<h2 class="second-level-heading">Cool Animation Stuffs</h2>	


			<div class="hover-state">
				<a href="#" class="animated-line" target="_blank">
					<p class="body-copy">
						<span class="animated-line">Hover over Links</span>
					</p>
				</a>
			</div>

			<p class="body-copy">Hover Scale Over Cards:</p>
	
				<?php include("modules/projects-data.php") ?>
				<?php foreach ($projects as $project) {

					if($project["demo"]) { 
					include('project-card.php');
					}

				} ?>

		</section>
		

	</inner-column>
</section>