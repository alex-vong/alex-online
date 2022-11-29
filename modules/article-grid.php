
<div class="article-card background">
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
		</a>
		<p class="body-copy headline"><?=$blog["headline"]?></p>
		
	</div>

	<a href="<?=$blog["link"]?>" target="_blank">
		<picture>
			<img src="../images/right-arrow2.svg" alt="right-arrow-icon">
		</picture>
	</a>


</div>
