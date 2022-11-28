<div class="stuff">

	<project-card class="background">

		<div class="preview-section">
			<a href="<?=$project["project-link"]?>" target="_blank">
				<picture>
					<img src="<?=$project["image"]?>" alt="<?=$project["alt-text"]?>">
				</picture>
			</a>
			<div class="project-card-links">
					<a href="<?=$project["case-study"]?>" class="body-copy animated-line" target="_blank"><span>Case Study</span></a>

					<a href="<?=$project["project-link"]?>" class="body-copy animated-line" target="_blank"><span>View Project</span></a>
			</div>
		</div>

		<div class="card-details">
			<a href="<?=$project["project-link"]?>" target="_blank">
					<h3 class="fourth-level-heading animated-line">
						<span>
							<?=$project["name"]?>
						</span>
					</h3>
			</a>
			<p class="body-copy inside-part"><?=$project["description"]?></p>


			<!-- <ul>
				<?php foreach ($project['languages'] as $language) { ?>
					<li class="quiet-voice <?=$language?>">#<?=strtoupper($language)?></li>

				<?php } ?>
			</ul> -->

		</div>
		


	</project-card>

</div>