 <section class="weather-app case-study">
		<section class="container">
			<div class="cs-heading">
				<h1 class="second-level-heading">Weather App Case Study</h1>
				<p class="body-copy"><strong>Asynchronous JavaScript</strong> is a <strike>fairly</strike> difficult concept to fully grasp, especially for someone as new to JS as I am. I understand that it allows your program to continue running while waiting for for certain task and not having to wait on them.

				<span class="block">With that I know, or think I know, a Weather App seemed like a good first API project to do. So without further ado, here we go.</span>

				<span class="block">
					If you'd like to go straigt to the live project site, you can click on this link <a href="https://alexvong.dev/modules/js-weather-app/" target="_blank">JS-Weather-App</a> or view a live demo of the project below:
				</span>
				</p>

			   <div style="height: 0px; overflow: hidden; padding-top: 56.25%; position: relative; width: 100%;">
			        <iframe
			            style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;"
			            src="https://tube.rvere.com/embed?v=owDb4glpdnk"
			            title="YouTube video player"
			            frameBorder="0"
			            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
			            allowFullScreen>
			        </iframe>
			    </div>

			    <div class="tools-resources">
						<h4 class="fourth-level-heading">##Tools and Resources Used:</h4>
						<ul class="tools body-copy"> 
							<li>HTML</li>
							<li>CSS</li>
							<li>JavaScript</li>
							<li>AccuWeather API</li>
							<li>MDN Docs</li>
							<li>PostMan/Hoppscotch.io</li>
							<li>GitHub</li>
							<li>Tower</li>
							<li>AWS</li>
							<li>FileZilla</li>
							<li>Affinity Designer</li>
							<li>OpenGraph.xyz</li>
						</ul>
					</div>
			</div>

			<div class="project-goals">
				<h2 class="third-level-heading">#Project-Goals</h2>
				<p class="body-copy">Enhance my knowledge of fetch APIs, call back functions, and Asynchronous JavaScript by utilizing AccuWeather's API to get weather information on a city that the user types in.</p>

			</div>

			<div class="intro">
				<h2 class="third-level-heading">
					#Intro-to-APIs
				</h2>
				<p class="body-copy">No, it is not a type of alcoholic beverage (like you haven’t heard that one before…). <strong>Application Programming Interface (API)</strong> are ways two softeware components talk to one another and how request and responses are made. 

				<span class="block"> It is another topic that will take some time for me to fully comprehend and get comfortable with. I can see the benefits of APIs however and the power it holds in allowing programmers to “fetch” large amounts of information they need so they can filter through them and grab what they need and dynamically add those data to the DOM. <em>Mind blown.</em></span>
				
			</div>

				<div class="what-we-need-container">
					<h3 class="fourth-level-heading">##API-Key</h3>
					<p class="body-copy">
						First things first was to set up an account on AccuWeather and create an “app” with them so I can get an API key</p>
					</p>
									

				<picture>
					<img src="../images/api-key.svg" alt="image of api key">
				</picture>

				

				<picture>
					<img src="../images/signup-mockup.svg" alt="Initial mock up for signup form in pen and paper">
				</picture>

				<p class="body-copy">
					Personally it is easier to get the layout and structure down this way as you are not distracted with all the features and options of a design editor.
				</p>

				<picture>
					<img src="../images/signup-affinity.svg" alt="Signup form design on Affinity Designer">
				</picture>
			</div>

			<div class="functionality">
				<h2 class="third-level-heading"> #Functionality </h2>
				<figure>
				    <blockquote>
				        <p class="body-copy">"If something requires a large investment of time — or looks like it will — it’s less likely to be used."</p>
				    </blockquote>
				    <figcaption class="body-copy">— Same Guy From Above (He's pretty good),<cite> Don't Make Me Think</cite></figcaption>
				</figure>

				<div class="what-we-need-container">
					<h3 class="fourth-level-heading">##What-We-Need</h3>
					<p class="body-copy">Before starting the code for this project I first wanted to understand how this application even works. I attempted to break down each component to its most simplest form.

					<span class="block">To tackle this, I went onto Whimsical and created a Mind Map breaking down each and every step and the results that I can think of.</span>
					</p>

					<picture>
						<img src="../images/signup-flow1.svg" alt="Signup flow chart">
					</picture>

					<picture>
						<img src="../images/signup-flow2.svg" alt="Signup flow chart">
					</picture>
				</div>
			</div>

			<div class="overcoming-challenges">
				<h2 class="third-level-heading">#Time-To-Code</h2>
				<p class="body-copy">The HTML and CSS were pretty straight forward. Create a form with a bunch of inputs nested inside and have a button someone obvious that the user can click on to submit the form. All the components surrounding it was also fully responsive and can resize based on the device it was on.
				<span class="block">But now comes the tricky part: Javascript. Being my first actual project using the language, I knew I was in for some anguish and headaches.</span>
				<span class="block">To overcome this I had to learn about Regular Expressions (RegEx). After what seemed like hours and hours of reading MDN docs, watching tutorial after tutorial, and reading articles after articles, I applied my newfound knowledge into action.</span>
				<span class="block">I first created a RegEx test for each input and assigned/created a path in memory to them onto a variable. </span>
				</p>

				<picture>
					<img src="../images/reg-variables.svg" alt="image of regex variable code">
				</picture>

				<p class="body-copy">Next, I tested each one by one starting with the input for first name:</p>

				<picture>
					<img src="../images/reg-test.svg" alt="image of regex variable testing code">
				</picture>

				<p class="body-copy">
					Here is a breakdown of the logic behind the code:

					<span class="block">When user types something into the <code>input</code> field, the <code>value</code> is tested against the RegEx test I created. If/once the input fails the test, a class of <code>.error</code> will be added onto the input which places a <span class="red">red border</span> around the input and props an error message up to notifying the user that an error has occurred.</span>
				</p>

				<picture>
					<img src="../images/signup-fail.svg" alt="sign up fail example">
				</picture>

				<p class="body-copy">If the user deletes the initial input, the <code>.error</code> class and error message will then need to be removed so user can start with a clean slate. If user next inputs a value that passes the RegEx test, a class of <code>.success</code> will be added onto the input which this time places a <span class="green">green border</span> around it signifying the user that his input is valid and he can move onto the next input field.</p>

				<picture>
					<img src="../images/signup-pass.svg" alt="sign up pass example">
				</picture>

				<p class="body-copy">I continue to use to formula for the rest of the inputs. Each input will continue to test the user’s inputs against their specific RegEx test and will throw errors as long as the inputs fail.</p>

				<picture>
					<img src="../images/sign-up-side-by-side.svg" alt="sign up side by side example">
				</picture>

				<p class="body-copy">The same method is applied to the Submit button. Once clicked, the function will run to make sure all the inputs have successfully passed their RegEx test, and if true is returned, a notification will pop up letting the user now their inputs are successful.</p>
			</div>

			<div class="conclusion">
				<h2 class="third-level-heading">#Conclusion</h2>
				<p class="body-copy">There is still so much I need to learn about JavaScript and even more that I do not know or grasp. But all in all, I enjoyed this project and at the end of the day, deem it as a success. I was able to learn more about event handlers, forms, logics, and gain valuable JavaScript experience.

				<span class="block">All that there is left to do is to continue learning more and more. I do aim to come back to this project from time to time and maybe even add some new functionality and things I learn on my JavaScript and Web Development journey.</span>
				</p>
				
			</div>



		</section>

</section>