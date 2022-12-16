
	<inner-column>
		<div class="blur"></div>
		<masthead>
			<a href="?page=home" class="logo">
				<h1 class="intro-voice desktop"><span>Alex</span> Vong</h1>
			</a>

			<nav class="nav-bar nav-bar-desktop">
				<?php  

					if ($page == "home") { ?>
						<div class="nav-links">
							<a href="#home" class="home quiet-voice <?php if ($page == "home") { echo "active"; } ?>">Home</span></a>
							<a href="#about" class="about quiet-voice"><span>About</span></a>	
							<a href="#projects" class="projects quiet-voice"><span>Projects</span></a>
							<a href="#writing" class="writing quiet-voice"><span>Writing</span></a>
						</div>

					<?php }

				?>

				<?php 
					if ($page && $page != "home") { ?>
						<div class="nav-links">
						<a href="?page=home" class="home quiet-voice <?php if ($page == "home") { echo "active"; } ?>"><span class="<?php if ($page == "home") { echo "active"; } ?>">Home</span></a>
					<a href="?page=about" class="about quiet-voice <?php if ($page == "about") { echo "active"; } ?>"><span>About</span></a>	
					<a href="?page=projects" class="projects quiet-voice <?php if ($page == "projects") { echo "active"; } ?>"><span>Projects</span></a>
					<a href="?page=writing" class="writing quiet-voice <?php if ($page == "writing") { echo "active"; } ?>"><span>Writing</span></a>
				</div>
				<?php }
				 ?>


			</nav> 

			<a href="../images/Alex-Vong-Resume.pdf" 
			   class="read-more quiet-voice resume <?php if ($page == "signup-cs" || $page == "weather-app-cs" || $page == "todo-app-cs") { echo "hidden"; } ?>" 
			   target="_blank">
				<i class="fa-regular fa-file-lines padding-r"></i>Resume
			</a>

				 <?php include('modules/switcher.php') ?>
				






			<?php 
				if ($page != 'todo-app-cs' && $page != 'weather-app-cs' && $page != 'signup-cs' && $page != 'style-guide' ) { ?>
		
					<nav class="nav-bar nav-bar-mobile">
						<?php 
							if ($page == "home") { ?>
								<a href="#home" class=" home-mobile body-copy <?php if ($page == "home") { echo "active"; } ?>">
									<i class="fa-solid fa-house"></i>
								</a>

								<a href="#about" class="about-mobile body-copy">
										<!-- <i class="fa-regular fa-address-card"></i> -->
									<i class="fa-regular fa-user"></i>
								</a>	
								<a href="#projects" class="projects-mobile body-copy">
									<i class="fa-regular fa-folder"></i>
								</a>

								<a href="#writing" class="writing-mobile body-copy">
									
									<i class="fa-regular fa-pen-to-square"></i>
								</a>

							<?php }
						 ?>

						<?php 
							if ($page == "about" || $page == "projects" || $page == "writing") { ?>

								<a href="?page=home" class="home body-copy <?php if ($page == "home") { echo "active"; } ?>">
									<span class="<?php if ($page == "home") { echo "active"; } ?>">
										<i class="fa-solid fa-house"></i>
									</span>
								</a>

								<a href="?page=about" class="about body-copy <?php if ($page == "about") { echo "active"; } ?>">
										<i class="fa-regular fa-address-card"></i>
								</a>	
								<a href="?page=projects" class="projects body-copy <?php if ($page == "projects") { echo "active"; } ?>">
										<i class="fa-regular fa-folder"></i>
								</a>

								<a href="?page=writing" class="writing body-copy <?php if ($page == "writing") { echo "active"; } ?>">
										<i class="fa-regular fa-pen-to-square"></i>


								</a>
							<?php }
						 ?>


						
						
					</nav>

				<?php }

				?>




		</masthead>


	</inner-column>






<!-- 					<a href="?page=resume" class="animated-line <?php if ($page == "resume") { echo "active"; } ?>"><span>Resume</span></a>  -->
<!--  				<switcher>
					<button data-scheme='day'>Light 🌕</button>
					<button data-scheme='dark'>Dark 🌑</button>

				</switcher>	  -->