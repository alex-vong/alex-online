<div class="stuff ">

	<project-card class="box-shadow">

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
									<svg width="100%" height="100%" preserveAspectRatio="none"viewBox="0 0 537 522" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;">
									    <g transform="matrix(1,0,0,1,-7889.86,-3674.99)">
									        <g id="github-logo" transform="matrix(1.23164,0,0,1.06984,-283.074,355.385)">
									            <rect x="6635.84" y="3102.91" width="435.283" height="487.639" preserveAspectRatio="none" style="fill:none; "/>
									            <g id="outline" transform="matrix(17.221,0,0,19.8255,6651.13,3124.25)">
									                <path d="M9,19C4,20.5 4,16.5 2,16M16,22L16,18.13C16.076,17.166 15.733,16.214 15.06,15.52C18.2,15.17 21.5,13.98 21.5,8.52C21.5,7.124 20.962,5.781 20,4.77C20.456,3.549 20.423,2.198 19.91,1C19.397,-0.198 18.73,0.65 16,2.48C13.708,1.859 11.292,1.859 9,2.48C6.27,0.65 5.09,1 5.09,1C4.577,2.198 4.544,3.549 5,4.77C4.03,5.788 3.493,7.144 3.5,8.55C3.5,13.97 6.8,15.16 9.94,15.55C9.275,16.237 8.933,17.176 9,18.13L9,22" style="fill:none;fill-rule:nonzero;stroke:var(--marker);stroke-width:1.89px;"/>
									            </g>
									        </g>
									    </g>
									</svg>

							</picture>
						</a>

						<a href="<?=$project["project-link"]?>" class="body-copy" target="_blank">
							<picture>
								<svg width="100%" height="100%" viewBox="0 0 537 522"  preserveAspectRatio="none" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
								    <g transform="matrix(1,0,0,1,-7873.9,-3088.05)">
								        <g id="up-right-arrow" transform="matrix(1.23164,0,0,1.06984,-299.036,-231.554)">
								            <rect x="6635.84" y="3102.91" width="435.283" height="487.639"  preserveAspectRatio="none" style="fill:none;"/>
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
				 ?>


			</div>

		</div>
	</project-card>

</div>