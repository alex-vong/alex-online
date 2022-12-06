
	<inner-column>
		<div class="blur"></div>
		<masthead>
			<a href="?page=home">
				<h1 class="intro-voice desktop"><span>Alex</span> Vong</h1>
			</a>

			<nav class="nav-bar nav-bar-desktop">

				<div class="nav-links">
					<a href="#home" class="quiet-voice animated-line <?php if ($page == "home") { echo "active"; } ?>"><span class="<?php if ($page == "home") { echo "active"; } ?>">Home</span></a>
					<a href="#about" class="quiet-voice animated-line <?php if ($page == "about") { echo "active"; } ?>"><span>About</span></a>	
					<a href="#projects" class="quiet-voice animated-line <?php if ($page == "projects") { echo "active"; } ?>"><span>Projects</span></a>
					<a href="#writing" class="quiet-voice animated-line <?php if ($page == "writing") { echo "active"; } ?>"><span>Writing</span></a>
				</div>

				<div class="theme-switcher">
					<button data-scheme='day'>
						<i class="fa-solid fa-sun"></i>
					</button>

					<button data-scheme='day'>
						<i class="fa-solid fa-moon"></i>
					</button>
				</div>

			</nav> 

			<nav class="nav-bar nav-bar-mobile">
				<a href="#home" class="body-copy <?php if ($page == "home") { echo "active"; } ?>">
					<span class="<?php if ($page == "home") { echo "active"; } ?>">
						<i class="fa-solid fa-house"></i>
					</span>
				</a>

				<a href="#about" class="body-copy <?php if ($page == "about") { echo "active"; } ?>">
					<span>
						<i class="fa-regular fa-address-card"></i>
					</span>
				</a>	
				<a href="#projects" class="body-copy <?php if ($page == "projects") { echo "active"; } ?>">
					<span>
						<i class="fa-regular fa-folder"></i>
					</span>
				</a>

				<a href="#writing" class="body-copy <?php if ($page == "writing") { echo "active"; } ?>">
					<span>
						<!-- <i class="fa-regular fa-newspaper"></i> -->
						<i class="fa-regular fa-keyboard"></i>
					</span>

				</a>
				
			</nav>




		</masthead>


	</inner-column>






<!-- 					<a href="?page=resume" class="animated-line <?php if ($page == "resume") { echo "active"; } ?>"><span>Resume</span></a>  -->
<!--  				<switcher>
					<button data-scheme='day'>Light 🌕</button>
					<button data-scheme='dark'>Dark 🌑</button>

				</switcher>	  -->