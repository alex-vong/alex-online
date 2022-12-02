<?php

$projects = [

	[
		"name" => "Title of Project",
		"description" => "Description of the project, what it is and what was the goal",
		"project-link" =>"https://peprojects.dev/alpha-1/alexvong/poke-dex/",
		"case-study" =>"https://peprojects.dev/alpha-1/alexvong/poke-dex/",
		"image" => "https://peprojects.dev/images/square.jpg",
		"hot" => false,
		"demo" => true, 
	],

	[
		"name" => "PokeDex",
		"description" => "I like Pokemon so I created my own PokeDex featuring the original 151 pocket monsters.",
		"project-link" =>"https://peprojects.dev/alpha-1/alexvong/poke-dex/",
		"case-study" => false,
		"image" => "images/poke.svg",
		"hot" => false,
		"demo" => false,
		"languages" => ['html', 'css', 'php'],
		"alt-text" => "image for Pokedex project card"

	],
	
	[
		"name" => "Huddle",
		"description" => "A responsive website challenge from Front End Mentor",
		"project-link" =>"https://alexvong.dev/modules/huddle/",
		"case-study" =>false,
		"image" => "images/huddle.svg",
		"hot" => false,
		"demo" => false,
		"languages" => ['html', 'css', 'php'],
		"alt-text" => "image for Huddle project card"

	],
	[
		"name" => "Weather App",
		"description" => "A JavaScript Weather App that shows real time weather data for any inputted city using AccuWeather API",
		"project-link" =>"https://alexvong.dev/modules/js-weather-app/",
		"case-study" => "?page=weather-app-cs",
		"image" => "images/weather-app-img.svg",
		"hot" => true,
		"demo" => false,
		"languages" => ['html', 'css', 'php', 'js'],
		"alt-text" => "image for Weather App project card credit to artist @rawpixel.com via https://www.freepik.com/author/rawpixel-com"

	],
	[
		"name" => "Todo App",
		"description" => "A Todo List Application implementing the fundamentals of the CRUD operations (Create, Read, Update, and Delete)",
		"project-link" =>"https://alexvong.dev/modules/js-todo-list/",
		"case-study" =>"?page=todo-app-cs",
		"image" => "images/todo-app-img.svg",
		"hot" => true,
		"demo" => false,
		"languages" => ['html', 'css', 'php', 'js'],
		"alt-text" => "image for todo list project"


	],

	[
		"name" => "Sign Up Page",
		"description" => "An interactive and fully responsive signup form incorporating JS Event Handlers and Regular Expression testing",
		"project-link" =>"https://alexvong.dev/modules/js-signup-page/",
		"case-study" =>"?page=signup-cs",
		"image" => "images/signup.svg",
		"hot" => true,
		"demo" => false,
		"languages" => ['html', 'css', 'php', 'js'],
		"alt-text" => "image for Sign Up Form project"


	],
	[
		"name" => "Responsive Layouts Garden",
		"description" => "A collection of responsive components found on various websites in the wild and replicated to better understand responsive layouts & designs",
		"project-link" => "https://alexvong.dev/modules/responsive-layout-collection/",
		"case-study" => "https://peprojects.dev/alpha-1/alexvong/30day-responsive-layout-challenge/",
		"image" => "images/layoutgarden.svg",
		"hot" => true,
		"demo" => false,
		"languages" => ['html', 'css', 'php'],
		"alt-text" => "image for RLG project card"
	],

	[
		"name" => "Buy a Home - Super Responsive Layout Challenge",
		"description" => "Created a responsive website template and styled it with a real estate theme",
		"project-link" =>"https://peprojects.dev/alpha-1/alexvong/tiny-homes",
		"case-study" =>false,
		"image" => "images/tiny-homes.svg",

		"hot" => false,
		"demo" => false,
		"languages" => ['html', 'css', 'php'],
		"alt-text" => "image for Home project card"

	],

	[
		"name" => "MOAA - Museum of Alex Arts",
		"description" => "A Gallery of skecthes I made on Affinity Designer",
		"project-link" =>"https://peprojects.dev/alpha-1/alexvong/a-thing-a-day",
		"case-study" =>false,
		"image" => "images/thingaday.svg",

		"hot" => false,
		"demo" => false,
		"languages" => ['html', 'css', 'php'],
		"alt-text" => "image for MOAA project card"

	],


	
];


$bits = [
	[
		"name" => "Intergalactic Plant World",
		"description" => "Goal was to create a psychedelic and far out website for a local plant shop. Just plain simple fun and",
		"project-link" => "https://peprojects.dev/alpha-1/alexvong/IPW/",
		"has-project-site" => true,

	],
	[
		"name" => "Pet Adoption Site",
		"description" => "My FIRST ever attempt at building a responsive website. This site will forever be archived and never changed or touched upon but used for personal research purposes.",
		"project-link" =>"https://peprojects.dev/alpha-1/alexvong/pawsitive-pets/",
		"has-project-site" => true,
	
	],

	[
		"name" => "CSS Positioning in Action",
		"description" => "A quick demo showing all the different CSS positionings.",
		"project-link" =>"https://codepen.io/Alexv0ng/pen/oNZxOoP",
		"has-project-site" => false,
	],
	[
		"name" => "Apple Site",
		"description" => "Challenge was to recreate a website in only one hour. Can I do it?",
		"project-link" =>"https://codepen.io/Alexv0ng/pen/abpRozV",
		"has-project-site" => false,
	],

	[
		"name" => "SVG Creations",
		"description" => "This Codepen shows the code behing a few SVG images I created on Affinity Designer",
		"project-link" =>"https://codepen.io/Alexv0ng/pen/LYxKMbO",
		"has-project-site" => false,
	],


];

$latestBlog = [
		[
		"title" => "Todo List App Case Study",
		"month" => "Nov",
		"day" => "25th",
		"year" => 2022,
		"link" => "?page=todo-app-cs",
		"headline" => "A Todo List Application incorporating the fundamentals of the CRUD operations",
		"preview" => "CRUD is an acronym that stands for Create, Read, Update and Delete. Think of it as a simple concept that represents the four basic functions that applications should be able to do and are considered necessary to implement a persistent storage application. Or in simpler terms, it represents the four basic operations you can do on any data. You can create something new, read or view the newly created data,",
		"read-time" => 7,
		"demo" => false,
		"front-page" => true,
	],

	[
		"title" => "Weather App Case Study",
		"month" => "Nov",
		"day" => "3rd",
		"year" => 2022,
		"link" => "?page=weather-app-cs",
		"headline" => "A JavaScript Weather App that shows real time weather data for any inputted city",
		"preview" => "Asynchronous JavaScript is a fairly difficult concept to fully grasp, especially for someone as new to JS as I am. I understand that it allows your program to continue running while waiting for for certain task and not having to wait on them. Application Programming Interface (API) is another topic that will take some time for me to fully comprehend and get comfortable with. I can see the benefits of APIs however and the power it holds in allowing programmers to “fetch” large amounts of information they need so they can filter through them and grab what they need and dynamically add those data to the DOM. Mind blown....",
		"read-time" => 5,
		"demo" => false,
		"front-page" => true,
	],
	[
		"title" => "SignUp Form Case Study",
		"month" => "Nov",
		"day" => "2nd",
		"year" => 2022,
		"link" => "?page=signup-cs",
		"headline" => "An interactive and fully responsive signup form incorporating JS Event Handlers and RegEx testing",
		"preview" => "Sign up forms are all too common these days with virtually every website you find on the web incorporating it. And of course, it makes complete sense. Businesses want you to sign up so they have your information. I’ve been learning more about inputs, functions, event listeners, and forms and figured making my own fully functional and responsive sign up form would be a great way to improve my knowledge of those subjects...",
		"read-time" => 6,
		"demo" => false,
		"front-page" => false,
	],
	[
		"title" => "Prim vs Ref Data Types",
		"month" => "Oct",
		"day" => "18th",
		"year" => 2022,
		"link" => "https://alextalk.substack.com/p/javascript-things-primitive-vs-reference",
		"headline" => "Learn about how Primitive and Reference Data Types are stored and updated.",
		"preview" => "On your JavasScript journey, you’ve come across Primitive Data Types and Reference Data Types. You probably learned that the main difference between the two is “how they are stored in memory” where primitive data types are often assigned a new value while reference data types are given a new reference to that memory. In this article, I will go further in detail on the two data types and hope my explanation...",
		"read-time" => 5,
		"demo" => false,
		"front-page" => true,
	],

	[
		"title" => "For Loops: The Basics",
		"month" => "Oct",
		"day" => "12th",
		"year" => 2022,
		"link" => "https://alextalk.substack.com/p/javascript-things-for-loops-101",
		"headline" => "Loops! What are they good FOR? Absolutely incrementing! Loop it again!",
		"preview" => "Today on my journey to learn JavaScript, I came across the for loop. It seems nowadays that the for loop is not used as often. It is used so infrequently in fact, that almost all of the JS tutorials I’ve watched merely introduce the concept and then quickly move on without really explaining exactly how it works (and trust me, I watched A LOT of JS tutorials on this). In this article I aim to further break down the for loop with real ...",
		"read-time" => 5,
		"demo" => false,
		"front-page" => true,
	],

	[
		"title" => "Website Design: 101",
		"month" => "Oct",
		"day" => "9th",
		"year" => 2022,
		"link" => "https://alextalk.substack.com/p/literally-every-responsive-layout",
		"headline" => "Designing a website is easy. Just follow the same blueprint that basically every other website out there uses and then, CHA-CHING, you're rich!",
		"preview" => "One of the coolest things about web design, and websites in general, are that those designs are all unique to the individual business. From color palettes to typography to layout and spacing, there are infinite ways to design a website and because of that, it is difficult to find two websites that share the same design. But what we can find, if we look underneath the hood, is that majority of the websites contain the same reusebale components...",
		"read-time" => 4,
		"demo" => false,
		"front-page" => false,
	],

	[
		"title" => "Making a Styles-Guide",
		"month" => "Sep",
		"day" => "27th",
		"year" => 2022,
		"link" => "https://alextalk.substack.com/p/style-guide-101",
		"headline" => "On today's episode we talk about Web Style Guides, what they are, why they are important, and just how to make our own. Stay tuned!",
		"read-time" => 5,
		"preview" => "A website style guide outlines a comprehensive set of standards for a company for its brand identity and how those identities are expressed on its website. Within those standards are a set of rules or guidelines for how its visual elements should be used throughout its site. These rules or guidelines are typically used as references for anyone who works on the website so that there will be a clear understanding for the page design...",
		"demo" => false,
		"front-page" => false,
	],

	[
		"title" => "The CSS Box Model",
		"month" => "Sep",
		"day" => "23rd",
		"year" => 2022,
		"link" => "https://codepen.io/Alexv0ng/full/dyNdRgr",
		"headline" => "A CodePen article teaching the basics of the CSS Box Model with the help of Jack Skellington.",
		"preview" => "The CSS Box Model is a tale as old as time (or well since the 90s anyways), and true as it can be. It is a crucial concept that all Front-End Developers must understand if they wish to build and design successful webpages. In this article I will try and explain the basic core principals of the CSS Box Model as I understand...",
		"read-time" => 8,
		"demo" => false,
		"front-page" => false,
	],

	[
		"title" => "Dark Side of the Web",
		"month" => "Aug",
		"day" => "22nd",
		"year" => 2022,
		"link" => "https://alextalk.substack.com/p/dark-mode-prefers-color-scheme",
		"headline" => "This article aims to briefly introduce the CSS prefers-color-scheme media feature and how to implement it in your code.",
		"preview" => "Dark mode is a fairly new feature that has seem to become stable across all devices nowadays. Most, if not all, smartphones, tablets, and computers all come with an added dark mode as the feature aims to enhance visual ergonomics by reducing eye strain, facilitating screens to adjust according to current light conditions, and...",
		"demo" => false,
		"read-time" => 3,
		"front-page" => false,
	],
	[
		"title" => "The Code Behind an SVG",
		"month" => "Aug",
		"day" => "6th",
		"year" => 2022,
		"link" => "https://alextalk.substack.com/p/the-code-behind-an-svg",
		"headline" => "Ever wonder what is under the hood of an SVG and what makes it so different than the other image formats?",
		"preview" => "A Scalable Vector Graphic, or SVG for short, is an image defined by geometric shapes (numbers) as opposed to bitmap images. Unlike JPG and PNG (which are made up of little squares), a vector graphic can be sized up infinitely without degrading in quality Or in simple terms, it means an image that DOES NOT lose any quality when it is super zoomed in. To elaborate more on SVGs...",
		"read-time" => 4,
		"demo" => false,
		"front-page" => false,
	],


];


// $favoriteBlog = [
// 	[
// 		"title" => "30 Day Responsive Layout Challenge",
// 		"link" => "https://alexvong.substack.com/p/30-day-responsive-layout-challenge",
// 		"date" => "October 25, 2021",
// 		"hot" => true,
// 	],
// 	[
// 		"title" => "The Condifence I Needed to Pursue Web Development",
// 		"link" => "https://community.codenewbie.org/alexv0ng/the-confidence-i-needed-to-pursue-web-development-2hh3",
// 		"date" => "August 24, 2021",
// 		"hot" => true,
// 	],
// 	[
// 		"title" => "Working with My First Client",
// 		"link" => "https://alexvong.substack.com/p/working-with-my-first-client-an-intro",
// 		"date" => "May 26, 2021",
// 		"hot" => false,
// 	],
// 	[
// 		"title" => "A Brief Intro to CSS Box Model",
// 		"link" => "https://alexvong.substack.com/p/a-brief-intro-to-css-box-model",
// 		"date" => "April 12, 2021",
// 		"hot" => true,
// 	],		

// ];



$longTermGoals = [ 
	"Get a full-time Front End Developer job at an entertainment/movie company such as Disney/ESPN, Dreamworks, PXL, or NBC",
	"Having a starting salary of at least $70k" 
	];


$shortTermGoals = [
	"Clean up personal site, fix any loose ends, and get it up and running by end of week 3/5/22", 
	"Continue adding new responsive components to responsive layout collection (min 3 a week)",
	"Flesh out PHP Pokedex Project",
	"Repeat with next showcase project (4 projects total)",
	"Write case study for each (2 days per project)",

	];



$myGoals = [

	[
		"goalHeading" => "5 Year Goal",
		"goals" => ["Be a full-time Front-End developer for an entertainment company such as Disney/ESPN, Dreamworks, PXL"],
		"salary" => "$100,000",
		"targetDate" => false,
	],

	[
		"goalHeading" => "End of Course Goal",
		"goals" => ["Get a full-time Front-End developer job", "Have personal portfolio site complete featuring atleast 4 fully completed projects"],
		"salary" => "$70,000",
		"targetDate" => "July 2022",
	],

	[
		"goalHeading" => "End of Month Goal (April 2022)",
		"goals" => ["Get my personal site completed up and running (landing, about, projects, writing, goal, resume, and style-tile pages complete along with theme switcher", "Have one complete project to feature (tiny-homes or plant-world)"],
		"salary" => false,
		"targetDate" => false,
	],

	[
		"goalHeading" => "End of Week Goal (April 23rd)",
		"goals" => ["Finish mock up and style-tile of personal site on Figma/Affinity Designer", "Begin code for new personal site", "Begin working on first featured project", "Continue adding to \"A Thing a Day\" and 
							\"Responsive Layout Garden\""
						], 
							
		"salary" => false,
		"targetDate" => false,
	],


];



$experience = [
	[
		"companyName" => "Perpetual Education",
		"location" => "Pasadena, CA",
		"position" => "Web Developer Intern",
		"startDate" => "March 2021",
		"endDate" => "PRESENT",
		"duties1" => "Learned and worked with the fundamentals of HTTP, HTML, CSS, scription, PHP, Javascript, Server-side rendering, Client-side rendering, JAM stack ideas, progressive web apps, etc",
		"duties2" => "Something else that I helped with",
		"duties3" => "One last bullet point of something I did because 3 bullet points are good",
	],

	[
		"companyName" => "Trader Joe's",
		"location" => "Pasadena, CA",
		"position" => "Crew Member",
		"startDate" => "November 2017",
		"endDate" => "PRESENT",
		"duties1" => "Cross-trained in all positions including but not limited to cahsiering, restocking items, keeping track and notating inventory and ordering items when needed, managing store charity donations",
		"duties2" => "Train new employees and run New Hire Orientation",
		"duties3" => "Work in a fast pace and high demand enviornment while providing excellent customer services",
	],

	[
		"companyName" => "Modern Eyes Optometry",
		"location" => "Cerritos, CA",
		"position" => "Optician",
		"startDate" => "August 2014",
		"endDate" => "October 2017",
		"duties1" => "Managed patient scheduling, health records, medical history, insurances and billing information",
		"duties2" => "Maintained communications between office staff and customers through phone calls, text messages, and emails ",
		"duties3" => "Perform pre-screening and testing including visual field test, glaucoma test, visual acuity test, and any and all test required by the optometrist",
	],

];


$technicalSkills = ["HTML", "CSS", "PHP", "WordPress", "Javascript"];

$programKnowledge = ["Tower", "Transmit", "Sequel Pro", "Mamp", "Affinity Designer", "Google Suite"];



$technicalKnowledge = ["Metadata", "Search Engine Optimization (SEO)", "Agile Methodology", "Linux and MacOS"];


$education = [

	[
		"schoolName" => "Perpetual Education's Design for the Web Mentorship",
		"degree" => "Web Devloper Intern",
	],

	[
		"schoolName" => "University of California, Riverside",
		"degree" => "B.A., Media and Cultural Studies with a Minor in Film Studies",
	],

];

















