

<section class="writing">
			
		<section class="container">
			
			<div class="my-writing">
				<h2 class="section-heading second-level-heading"><?=ucfirst($page)?></h2>

				
				<p class="body-copy intro">I try and write as often as possible on my web developer journey. Writing has never been my strong suite and I've always felt self-conscious about talking about myself. However, over the last year I've realize that writing is such a powerful tool and asset in my goal of becoming a developer.
				</p>

				<p class="body-copy intro">I wrote these articles to talk about things I work on, past and present, and all the emotions and experience that come with it to better my understanding of the process. I hope that these articles can help others on their journey as well.
				</p>

			</div>



		 	<?php include("contact-me.php") ?> 

		</section>

		<div class="latest-blog blog">
				<h3 class="third-level-heading">Featured Articles</h3>
			<?php include("projects-data.php") ?>

<!-- 			<div class="article-grid">

				<?php foreach ($latestBlog as $blog) { 

					if (!$blog["demo"]) {
					include("article-grid.php");
					}

			 	 } ?>
		 	 </div>


		<a href="https://alexvong.substack.com/" class="animated-line view-all-link" target="_blank">
			<p class="body-copy">
				<span>View All Blogs on My Substack</span>
			</p>
		</a>
		</div> -->

</section>


