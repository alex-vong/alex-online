


<!-- <h2 class="second-level-heading">
	Featured Articles
</h2> -->
<p class="section-heading body-copy for-those">
	For those who like to read &darr;
</p>

<div class="article-grid">
	<?php include("modules/projects-data.php") ?>

		<?php foreach ($latestBlog as $blog) { 

			if(!$blog["demo"] && $blog["front-page"]) { 
			include('article-grid.php');
			}

		 } ?>
</div>


<a href="?page=writing" class="body-copy view-all-link" target="_blank">
		View All Articles
</a>
