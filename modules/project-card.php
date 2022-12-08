<div class="stuff">

	<project-card class="bg-gradient">

		<div class="preview-section">
			<a href="<?=$project["project-link"]?>" target="_blank">
				<picture>
					<img src="<?=$project["image"]?>" alt="<?=$project["alt-text"]?>">
				</picture>
			</a>

		</div>
		<div class="card-details">
			<a href="<?=$project["project-link"]?>" target="_blank">
					<h3 class="third-level-heading animated-line">
						<span>
							<?=$project["name"]?>
						</span>
					</h3>
			</a>
			<p class="quiet-voice inside-part"><?=$project["description"]?>
				
			</p>

			<?php 
				if($project["featured"]) { ?>
					<div class='line'></div>
					<div class="project-card-links">
						
					    <a href="<?=$project["case-study"]?>" class="quiet-voice read-more" target="_blank">Case Study</a>

						<a href="<?=$project["github-repo"]?>" class="body-copy" target="_blank">
							<picture>
								<img src="../images/github-icon.svg" alt="">
							</picture>
						</a>

						<a href="<?=$project["project-link"]?>" class="body-copy" target="_blank">
							<picture>
								<img src="../images/view-project.svg" alt="">
							</picture>
						</a>
					
					<?php }
				 ?>


			</div>

		</div>
	</project-card>

</div>