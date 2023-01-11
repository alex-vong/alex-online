<div class="bit-card">

		<bit-card-icons>

			<?php 
				if ($bit["efp"]) { ?>
					<i class="fa-solid fa-person-walking"></i>
				<?php } else if ($bit["smallerProject"]) { ?>
					<i class="fa-solid fa-gear"></i>
				<?php }  else { ?>
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

		<?php 

		if ($bit["image"]) { ?>

			<picture>
				<img src="<?=$bit["image"]?>" alt="">
			</picture>
		<?php }
		?>
		<a href="<?=$bit["project-link"]?>" target='_blank'>
			<h3 class="third-level-heading"><?=$bit["name"]?></h3>
		</a>
		<p class="quiet-voice"><?=$bit["description"]?></p>
		
		<ul class="whisper-voice bit-language">
		 	<?php
		 		foreach($bit["languages"] as $language) { ?>
		 				<li><?=strtoupper($language)?></li>
		 		<?php }
		 	 ?>
		</ul>



</div> 
