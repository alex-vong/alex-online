<!-- <section class="container my-goals">
	<h2 class="third-level-heading">Goals</h2>


	<blockquote class="body-copy intro">
		“What you get by achieving your goals is not as important as what you become by achieving your goals.” <span class="quoter">David Henry Thoreau</span>
	</blockquote>

<?php include("projects-data.php") ?> 
	
<?php foreach($myGoals as $goal) { ?>

	<div class="goal">
		<h3 class="fourth-level-heading"><?=$goal['goalHeading']?></h3>
			<ul class="body-copy">
				<?php foreach ($goal['goals'] as $single) { ?>
					<li><?=$single?></li>
				<?php } ?>

				<?php if ($goal['salary'] && ($page === 'goals')) { ?>
					<li>Starting salary of <?=$goal['salary']?></li>
				 <?php } ?>


				<?php if ($goal['targetDate']) { ?>
					<li>Target Date <?=$goal['targetDate']?></li>
				 <?php } ?>
			</ul>
	</div>

<?php } ?>

</section> -->


