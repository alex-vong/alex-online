 <section class="signup-cs case-study">
		<section class="container">
			<div class="cs-heading">
				<h1 class="second-level-heading">Signup Form Case Study</h1>
				<p class="body-copy">This week on my journey to learn Javascript, I encountered functions and event handlers. To improve my knowledge and as a challenge to myself, I wanted to build my own sign up page and try and mimic the ones you see everyday in the wild.

				<span class="block">
					If you do not care to read this case study and would like to see the live project site, you can click on this link <a href="https://alexvong.dev/modules/js-signup-page/" target="_blank">JS-Signup-Page</a>
				</span>

				<span class="block">You can also view a live demo of the project below:</span>
				</p>

			   <div style="height: 0px; overflow: hidden; padding-top: 56.25%; position: relative; width: 100%;">
			        <iframe
			            style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;"
			            src="https://tube.rvere.com/embed?v=aFpfMFta8gs"
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
							<li>GitHub</li>
							<li>Tower</li>
							<li>AWS</li>
							<li>FileZilla</li>
							<li>MDN Docs</li>
							<li><a href="https://regex101.com/"></a>RegEx101.com</li>
							<li>Affinity Designer</li>
							<li><a href="https://www.opengraph.xyz/"></a>OpenGraph.xyz</li>
						</ul>
					</div>
			</div>

			<div class="project-goals">
				<h2 class="third-level-heading">#Project-Goals</h2>
				<p class="body-copy">Create a sign up form to better understand how forms work after user clicks submit, the use of Javascript event handler’s role with them, and implementing Regular Expressions and functions to test form inputs.</p>

			</div>

			<div class="intro">
				<h2 class="third-level-heading">
					#Everyones-Got-One
				</h2>
				<p class="body-copy">Sign up forms are all too common these days with virtually every website you find on the web incorporating it. And of course, it makes complete sense. Businesses want you to sign up so they have your information. Take a look at some of those businesses such as <span><a href="https://dashboard.stripe.com/register">Stripe</a></span>,<span><a href="https://identity.getpostman.com/signup"> Postman</a></span>, and <span><a href="https://www.espn.com/"> ESPN</a></span>.</p>

				<picture>
					<img src="../images/signup-examples.svg" alt="example signup forms from Stripe, Postman, and ESPN">
				</picture>

				<p class="body-copy">So what better way to show employers that I understand (or at least have dabbled with) sign up forms than creating my own fully-ish functioning form.</p>
				
			</div>

			<div class="design">
				<h2 class="third-level-heading">
					#Design
				</h2>
				<figure>
				    <blockquote>
				        <p class="body-copy">"Making every page or screen self-evident is like having good lighting in a store: it just makes everything seem better."</p>
				    </blockquote>
				    <figcaption class="body-copy">— Steve Krug, <cite>Don't Make Me Think</cite></figcaption>
				</figure>

				<p class="body-copy">
					Design plays a key role in any project. After all, the design and look of any project is the first thing the user sees after the page loads. The user need to be able to tell instantly that this is a sign up page based on the layout and look and instinctively know what to do. Navigating through the site needs to be effortless and seamless and the user should not have to think at all. Oh and the site has to also be completely responsive so it can view it on any device.
				</p>

				<div class="what-we-need-container">
					<h3 class="fourth-level-heading">##What-We-Need</h3>
					<ul class="what-we-need body-copy">
						<li>Inputs with easy distinctions for:
							<ul>
								<li>First Name</li>
								<li>Last Name</li>
								<li>Email Address</li>
								<li>Password</li>
							</ul>
						</li>
						<li>Submit Button that provided feedback for success or error</li>
						<li>Site to be fully responsive</li>	
					</ul>
				</div>

				<p class="body-copy">I usually start every design mockup the same way our forefathers did: with good ol’ pen and paper.</p>

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

				<span class="block">ll that there is left to do is to continue learning more and more. I do aim to come back to this project from time to time and maybe even add some new functionality and things I learn on my JavaScript and Web Development journey.</span>
				</p>
				
			</div>



		</section>

</section>