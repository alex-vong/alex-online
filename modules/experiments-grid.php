<div class="bit-card">


		<bit-card-icons>
			<i class="fa-solid fa-flask"></i>

			<?php 

			if ($bit["has-project-site"]) { ?>
				<a href="<?=$bit["project-link"]?>" target="_blank">
					<picture>
						<svg width="100%" height="100%" viewBox="0 0 537 522" preserveAspectRatio="xMidYMid meet" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
						    <g transform="matrix(1,0,0,1,-7873.9,-3088.05)">
						        <g id="up-right-arrow" transform="matrix(1.23164,0,0,1.06984,-299.036,-231.554)">
						            <rect x="6635.84" y="3102.91" width="435.283" height="487.639" style="fill:none;"/>
						            <g id="base" transform="matrix(-0.734418,-1.03543e-16,9.04257e-17,-0.850053,12827.9,6210.84)">
						                <path d="M7951.84,3269.01C7951.84,3269.01 7953.35,3158.89 7953.35,3158.83C7953.35,3158.79 7953.35,3158.75 7953.35,3158.71C7953.47,3156.35 7956.01,3120.88 8002.46,3126.72L8317.1,3126.72C8331.51,3126.72 8345.08,3133.45 8353.75,3144.89C8356.08,3148.11 8358.12,3151.74 8359.47,3155.87C8360.58,3159.23 8361.14,3162.75 8361.12,3166.29C8361,3192.14 8359.81,3445.43 8359.59,3493.58C8359.54,3502.65 8356.59,3511.47 8351.16,3518.75C8346.12,3525.49 8338.37,3532.43 8326.62,3535.89C8323.95,3536.69 8321.17,3537.1 8318.38,3537.1C8301.15,3537.16 8213.89,3537.16 8213.89,3537.16" style="fill:none;stroke:var(--marker);stroke-width:55.13px;"/>
						            </g>
						            <g id="arrow-up" transform="matrix(0.811929,0,0,0.934723,342.938,102.686)">
						                <path d="M7961,3525.54C8039.1,3447.44 8052.51,3434.02 8220.46,3266.08L8220.46,3434.93L8220.46,3266.08L8055.25,3266.08" style="fill:none;stroke:var(--marker);stroke-width:50px;"/>
						            </g>
						        </g>
						    </g>
						</svg>

					</picture>
				</a>
			 <?php }

			 else { ?>
				<a href="<?=$bit["project-link"]?>" target="_blank">
					<i class="fa-brands fa-codepen"></i>
				</a>

			 <?php 

			} ?>

		</bit-card-icons>

		<h3 class="third-level-heading"><?=$bit["name"]?></h3>
		<p class="body-copy"><?=$bit["description"]?></p>
		
		<ul class="quiet-voice bit-language">
		 	<?php
		 		foreach($bit["languages"] as $language) { ?>
		 				<li><?=strtoupper($language)?></li>
		 		<?php }
		 	 ?>
		</ul>



</div> 
