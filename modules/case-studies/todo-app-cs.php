 <section class="todo-app case-study">
		<section class="container">
			<div class="cs-heading">
				<ul class="body-copy languages">
					<li class='html'>HTML</li>
					<li class='css'>CSS</li>
					<li class='js'>JavaScript</li>
				</ul>
		
				<h1 class="second-level-heading">A Todo List Application incorporating the fundamentals of the CRUD operations</h1>

				<h2 class="body-copy">Todo List Application Case Study</h2>

				<picture>
					<img src="../images/crud-main-img.svg" class="main-img"alt="main image for crud case study">
				</picture>
					
			
			</div>

			<div class="cs-intro">

				<div class="project-goals">
					<h2 class="third-level-heading">#Project-Goals</h2>
					<p class="body-copy">Build a todo list application that follows the 4 principal CRUD operations: Create, Read, Update, and Delete. And learn a thing or two about CRUD along the way to be able to think more like a programmer</p>

				</div>


				<p class="body-copy"><strong>Asynchronous JavaScript</strong> is a <strike>fairly</strike> difficult concept to fully grasp, especially for someone as new to JS as I am. I understand that it allows your program to continue running while waiting for for certain task and not having to wait on them.

				<span class="block">With that I know, or think I know, a Weather App seemed like a good first API project to do. So without further ado, here we go.</span>

				<span class="block">
					If you'd like to go straigt to the live project site, you can click on this link <a href="https://alexvong.dev/modules/js-weather-app/" target="_blank">JS-Weather-App</a> or view a live demo of the project below:
				</span>
				<p class="body-copy">
					If you'd like to go straigt to the live project site, you can click on this link <span><a href="https://alexvong.dev/modules/js-weather-app/" target="_blank">JS-Weather-App</a></span> or view a live demo of the project below:
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

				<div >
					<p class="body-copy">I decided to grab:</p>
					<ul class="list body-copy"> 
						<li>City Name and State</li>
						<li>Day of the Week</li>
						<li>Current Temperature in Fahrenheit</li>
						<li>High and Lows for the day</li>
						<li>Weather Condition</li>
						<li>Condition Icon</li>
					</ul>
				</div>

				<p class="body-copy">Put them all together, add a little pixie dust and vanilla Javascript with DOM manipulation and CSS Styles and I was able to get this:</p>

				<picture>
					<img src="../images/weather-app-mobile.svg" alt="weather app in mobile view" class="mobile">
				</picture>
				<picture>
					<img src="../images/weather-app-desktop.svg" alt="weather app in desktop view">
				</picture>

				<p class="body-copy">With the main challenge solved, all that is left seeing if there are any other information I would want to be shown on the browser and some finishing touches to styling and making sure the project is full responsive. </p>
				
			</div>

			<div class="over-coming-challenges">
				<h2 class="third-level-heading">#Overcoming-Challenges</h2>
				<div class="challenge challenge-1">
					<h3 class="fourth-level-heading">##API-Key-Limits</h3>
					<p class="body-copy">During this project I kept running into fetch issues and could not get data from the AccuWeather API. At first I was baffled because everything was working just find prior and I was able to request data and receive a response.After taking a look in the Network tab I saw my url request has a status code of 401 which according to MDN meant “response status code indicates that the client request has not been completed because it lacks valid authentication credentials for the requested resource.”
					</p>
					<picture>
						<img src="../images/api-key-error.svg" alt="api key error">
					</picture>

					<p class="body-copy">After a while of researching, Googleing, Stack Overflow-ing, and Reddit-ing, I learned that AccuWeather give you only 50 request per “app” so I had to delete and recreate “apps” to get new API keys. I had to replicate this process whenever I used up my 50 request per key.</p>
				</div>
				
				<div class="challenge challenge-2">
					<h3 class="fourth-level-heading">##Secure-Network-Error</h3>
					<p class="body-copy">I came across some issues with the fetch api request after deploying this project on my portfolio site. The error was thrown every time I tried to search a city. Initially I thought I just needed a new API key but after some further digging in the Network tab and console I discovered the error was with the url request link provided by AccuWeather.
					</p>
					<picture>
						<img src="../images/s-error.svg" alt="http error">
					</picture>

					<p class="body-copy">The URL request given by AccuWeather was not a secure and because of that I was unable to make a proper request. I went back to the URL request in my project and added an ‘s’ to the ‘http’ request and that seemed to have done the trick. .</p>
				</div>

				
			</div>

			<div class="conclusion">
				<h2 class="third-level-heading">#Conclusion</h2>
				<p class="body-copy">This project was extremely challenging but a lot of fun and provided me with an immeasurable amount of experience and knowledge regarding fetch APIs, call back functions, asynchronous JavaScript, and so much more. .
				</p>
				
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



		</section>

</section>