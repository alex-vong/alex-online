

<section class="style-guide case-study">
	

		<section class="headline">
			<h1 class="section-heading top-level-heading"> Style Guide</h1>
			<div>
				<p class="sg-intro body-copy">
				This style guide page will serve as a resource template for all the design elements, choices, and rules for <span><a href="https://alexvong.dev" target="_blank">alexvong.dev</a></span>
				</p>
			</div>

		</section>

		<section class="logos">
				<h3 class="second-level-heading">Logos</h3>
				<p class="body-copy">Although I do not have mucho logos on this personal site, it is still important to define specific logos and icons used throughout the website and rules pertaining to them such as spacing, placement, colors, etc.</p>

				<div class="logo-stuff">
					<div class="heading-logo">
						<h3 class="body-copy">Site logo</h3>
						<h2 class="third-level-heading">Alex Vong</h2>
						<h2 class="third-level-heading">AV</h2>
						<h2 class="fourth-level-heading">Alex Vong</h2>		
						<h2 class="fourth-level-heading">AV</h2>
						<p class="body-copy">It will be featured in the heading and the footer. It'll be larger on top of the site than it is in the footer. Should (hopefully) be the first or second thing the user noticed.</p>

					</div>

					<div class="social-media-icon">
						<h3 class="body-copy">Social Media Icons</h3>
						<ul class="social-media body-copy">
							<li class="body-copy"> <i class="fa-brands fa-linkedin"></i> LinkedIn</li>
							<li class="body-copy"><i class="fa-brands fa-github" ></i> GitHub</li>
							<li class="body-copy"><i class="fa-brands fa-codepen" ></i> CodePen</li>
							<li class="body-copy"><i class="fa-brands fa-twitter" ></i> Twitter</li>
						</ul>
					</div>

				</div>
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

		<section class="buttons">
				<h3 class="second-level-heading">Buttons</h3>

				<div class="button-talk">
					<p class="body-copy">I also do not have many buttons on my personal site, I mainly allow the user to clock directly on links (although I may change that and add some actual buttons on my CTAs later), but it is important to address the specific styles of buttons on a website.</p>
					<p class="body-copy">The I would normally tackle buttons is to have 2-3 max buttons designs that are very similar to one another to maintain consistency. I would also use a 1 to 2 padding top/bottom to left/right ratio for spacing.</p>
				</div>

				<div class="button-examples">
					<a class="body-copy btn btn-swipe-left btn-swipe-left--purple" href="#"><span class='btn'> Click me </span></a>
					<a class="body-copy btn btn-swipe-up btn-swipe-up--purple" href="#"><span class='btn'> Click me </span></a>

				</div>


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
		

	
</section>








<!-- 		<div class="theme-switcher">
			<switcher>
				<a href="?page=style-guide" class="quiet-voice <?php if ($page == "style-guide") { echo "active"; } ?>"><button data-scheme='day' class="quiet-voice day">Day </button></a>
				<a href="?page=style-guide" class="quiet-voice <?php if ($page == "style-guide") { echo "active"; } ?>"><button data-scheme='night' class="quiet-voice night">Night</button></a> 
				
				 <button data-scheme='night' class="quiet-voice night">Dark </button>
			</switcher>	 
		</div>  -->