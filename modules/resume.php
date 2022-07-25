<section class="container resume">
	<inner-column>
		<h3 class="section-heading intro-voice"><?=ucfirst($page)?></h3>
		<h2 class="second-level-heading">The Experience That Made Me Who I am Today</h2>


		<section class="experience">

			<div class="experience-container">

			<div class="top">
				<?php include('projects-data.php'); ?>

				<job-container>
					<h3 class="third-level-heading">Experience</h3>

					<job-card-container>
						<?php foreach ($experience as $exp) { ?>

							<job-card>
						 		<h3 class="intro-voice"><?=$exp["companyName"]?>
						 			<span class="body-copy"><?=$exp["location"]?></span>
						 			<span class="body-copy"><?=$exp["position"]?></span>
						 		</h3>
						 		<p><span class="body-copy"><?=$exp["startDate"]?></span> - <span class="body-copy"><?=$exp["endDate"]?></span></p>

						 		<ul>
						 			<li class="body-copy"><?=$exp["duties1"]?></li>
						 			<li class="body-copy"><?=$exp["duties2"]?></li>
						 			<li class="body-copy"><?=$exp["duties3"]?></li>

						 		</ul>

							</job-card>
	 
						<?php } ?>

					</job-card-container>
				</job-container>
				 
				<aside>

					<h3 class="third-level-heading">Skills</h3>
					
					<skills-cards>
						<technical-skills>
							<ul class="intro-voice"> 
								<h4 class="intro-voice">Technical SKills</h4>
								<?php foreach ($technicalSkills as $skill) { ?>
									<li class="body-copy"><?=$skill?></li>
								<?php } ?>
							</ul>
						</technical-skills>

						<program-knowledge>
							<ul class="intro-voice"> 
								<h4 class="intro-voice">Program Knowledge</h4>
								<?php foreach ($programKnowledge as $program) { ?>
									<li class="body-copy"><?=$program?></li>
								<?php } ?>
							</ul>
						</program-knowledge>

						<technical-knowledge>
							<ul class="intro-voice">
								<h4 class="intro-voice">Technical Knowledge</h4>
								<?php foreach ($technicalKnowledge as $knowledge) { ?>
									<li class="body-copy"><?=$knowledge?></li>
								<?php } ?>
							</ul>
						</technical-knowledge>
					</skills-cards>
				</aside>
				</div>


				<education>
						<h3 class="third-level-heading">Education</h3>
					

						<?php foreach ($education as $edu) { ?>
						
						<school-card>

							<h3 class="intro-voice"> <?=$edu["schoolName"]?></h3>
							<span class="body-copy"><?=$edu["degree"]?></span>
						</school-card>
						
						<?php } ?>


				</education>
				
			</div>
			





		</section>	


	
	 <?php include("contact-me.php") ?> 
	</inner-column>
</section>

