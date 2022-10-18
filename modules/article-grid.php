<a href="<?=$blog["link"]?>" target="_blank">
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
				<h3 class="fourth-level-heading"><span class="animated-line"><?=$blog["title"]?></span></h3>
			</a>
			<p class="body-copy"><?=$blog["headline"]?></p>
			<p class="intro quiet-voice"><?=$blog['intro']?></p>
		</div>
	</div>
</a>