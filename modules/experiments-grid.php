<div class="bit-card">

		<bit-card-icons>

			<?php 
				if ($bit["efp"]) { ?>
					<i class="fa-solid fa-person-walking"></i>


				<?php } else { ?>
					<i class="fa-solid fa-flask"></i>
				<?php } ?>


			<?php 

				if ($bit["has-project-site"]) { ?>
					<a href="<?=$bit["project-link"]?>" target="_blank">
						<i class="fa-solid fa-arrow-up-right-from-square"></i>
						
					</a>
				 <?php }

				 else { ?>
					<a href="<?=$bit["project-link"]?>" target="_blank">
						<i class="fa-brands fa-codepen"></i>
					</a>

				 <?php 

			} ?>

		</bit-card-icons>

		<h3 class="third-level-heading"><?=$bit["name"]?></h3>
		<p class="body-copy"><?=$bit["description"]?></p>
		
		<ul class="quiet-voice bit-language">
		 	<?php
		 		foreach($bit["languages"] as $language) { ?>
		 				<li><?=strtoupper($language)?></li>
		 		<?php }
		 	 ?>
		</ul>



</div> 
