


<h2 class="second-level-heading">
	Featured Blogs
</h2>
<p class="section-heading body-copy">
	I like to write sometimes. Here are some of those times.
</p>

<div class="article-grid">
	<?php include("modules/projects-data.php") ?>

		<?php foreach ($latestBlog as $blog) { 

			if(!$blog["demo"] && $blog["front-page"]) { 
			include('article-grid.php');
			}

		 } ?>
</div>


<a href="?page=writing" class="animated-line view-all-link">
	<p class="body-copy">
		<span>View More Blogs</span>
	</p>
</a> 
