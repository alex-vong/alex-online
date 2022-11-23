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
					I decided to use the AccuWeather API because it was pretty easy to understand. 
					After perusing through the AccuWeather API reference I found a Locations API where it allowed me to use a city text search which returns information for an array of cities that match the search text. It required the resource URL, API key, and a query.
					<span class="block">
					After familiarizing myself with the site, I set up an account on AccuWeather and create an “app” with them so I can get an API key.
					</span>
				</p>
								
				<picture>
					<img src="../images/api-key.svg" alt="image of api key">
				</picture>
				
				<p class="body-copy">I also found a <strong>Locations API</strong> where it allowed me to use a city text search which returns information for an array of cities that match the search text. It required the <strong>resource URL, API key,</strong> and a <strong>query</strong>.</p>

				<picture>
					<img src="../images/city-search.svg" alt="image of city search endpoint from AccuWeather API">
				</picture>
			</div>

			<div class="what-we-need-container">
				<h3 class="fourth-level-heading">##API-Testing-Hard-Code</h3>
				<p class="body-copy">
				I first tested this API endpoint request by manually inputting it the URL request, apikey, and the value of “Houston” into <strong>Postman</strong> and seeing what results I would get.
				</p>

				<picture>
					<img src="../images/postman-resp.svg" alt="postman response of city search">
				</picture>

				<p class="body-copy">The image above does not capture the entire JSON response but the request was successful and the response was an array of all “Houston” cities in the world. While doing this project I learned that there is a Houston, B.C. Who knew?! Now that I know the url request and endpoints work via Postman, I need to test it out on my project.</p>
								
			</div>

			<div class="what-we-need-container">
				<h3 class="fourth-level-heading">##API-TestingCode</h3>
				<p class="body-copy">
				I first tested this API endpoint request by manually inputting it the URL request, apikey, and the value of “Houston” into <strong>Postman</strong> and seeing what results I would get.

				<span class="block">This method was to see if I followed the endpoint request correctly and what would the response be.</span>
				</p>

				<picture>
					<img src="../images/postman-resp.svg" alt="postman response of city search">
				</picture>

				<p class="body-copy">The image above does not capture the entire JSON response but the request was successful and the response was an array of all “Houston” cities in the world. While doing this project I learned that there is a Houston, B.C. Who knew?! Now that I know the url request and endpoints work via Postman, I need to test it out on my project.

				<span class="block">Now that I know the url request and endpoints work via Postman, I need to test it out on my project with some actual code.</span>
				</p>

				<picture>
					<img src="../images/api-test.svg" alt="image of first steps of api code">
				</picture>

				<p class="body-copy">This time I tested the results on the Mozilla Firefox Developer Edition Browser’s console (what a mouth full).</p>

				<picture>
					<img src="../images/moz-api-response.svg" alt="image of api testing on mozilla">
				</picture>

				<p class="body-copy">And it works! We get an array of cities and they include data such as city name, state, a unique key, etc.
				<span class="block">
					I do not need the entire array and just need the 0 index since that is the most common city and the rest are just small towns no one has heard of. I will go back to <code>line 10</code> above and <code>return data[0]</code>. <em>Also if the user did want the weather information for Houston, B.C, they can just type that in to get the results for that city</em>.
					</span>
				</p>


								
			</div>

			<div class="tie-it-all-together">
				<h2 class="third-level-heading">#Tie-it-all-Together</h2>
				<p class="body-copy">So now that we have a rough idea of how fetch API request and response works and was successfully able to an async function to make a request to the AccuWeather API and get some information and turn it into JSON, we just need to finish the rest of the application with what we already know how to do. And if things go wrong, we do more testing and find solutions!.
				</p>

				<picture>
					<img src="../images/fetch-calls.svg" alt="image of fetch calls">
				</picture>

				<p class="body-copy">Above we add an <strong>event listener</strong> to the input and once the user submits, the <code>getCity</code> function from above will be called and the value/city will be passed into it. <code>getCity</code> will the zero index from that array of cities (as mentioned above).

				<span class="block">
					Next we will call a new function called <code>getWeather</code> (that is extremely similar to <code>getCity</code>) except we will use it to get the weather forecast. Essentially the same steps occur as in <code>getCity</code> and weather conditions for the city are returned. 
				</span>
				</p>

				<picture>
					<img src="../images/get-weather.svg" alt="image of get weatjer function">
				</picture>

				<p class="body-copy">
					When we run this we get the weather conditions for the input.
				</p>

				<picture>
					<img src="../images/fetch-json.svg" alt="image of fetch response">
				</picture>

				<p class="body-copy">Finally we can sift through the returned JSON file and update the DOM with whatever information we want from it. </p>

				<picture>
					<img src="../images/signup-pass.svg" alt="sign up pass example">
				</picture>

				<p class="body-copy">I continue to use to formula for the rest of the inputs. Each input will continue to test the user’s inputs against their specific RegEx test and will throw errors as long as the inputs fail.</p>

				<picture>
					<img src="../images/sign-up-side-by-side.svg" alt="sign up side by side example">
				</picture>
				<div >
					<p class="body-copy">I decided to grab:</p>
					<ul class="tools"> 
						<li>City Name and State</li>
						<li>Day of the Week</li>
						<li>Current Temperature in Fahrenheit</li>
						<li>High and Lows for the day</li>
						<li>Weather Condition</li>
						<li>Condition Icon</li>
					</ul>
				</div>

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