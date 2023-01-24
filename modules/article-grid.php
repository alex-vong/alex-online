
<div class="article-card box-shadow <?php if ($page === "home") {echo "stagnant";}?>">
	<div class="article-content">
		<ul class="card-meta">
			<li class="article-date quiet-voice">
				<?=$blog['month']?> <?=$blog['day']?>
			</li>
			<li class="read-time quiet-voice">
				<?=$blog['read-time']?> min read
			</li>
		</ul>
		<a href="<?=$blog["link"]?>" class="animated-line" target="_blank">
			<h3 class="third-level-heading"><span class="animated-line"><?=$blog["title"]?></span></h3>
		<div class="line"></div>
			
		</a>
		<p class="body-copy preview"><?=$blog["preview"]?></p>
		
		<a href="<?=$blog["link"]?>" class="quiet-voice read-more" target="_blank">Read More</a>

	</div>
</div>
