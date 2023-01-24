 <section class="todo-app case-study">
		<section class="container">
			<div class="cs-heading">
				<?php include('language-tags.php') ?>

		
				<h1 class="second-level-heading">A Todo List Application incorporating the fundamentals of the CRUD operations</h1>

				<h2 class="body-copy cs-sub-heading">Todo List Application Case Study</h2>
			
			</div>

			<div class="cs-intro">

				<div class="project-goals box-shadow">
					<h2 class="third-level-heading">#Project-Goals</h2>
					<p class="body-copy">Build a todo list application that follows the 4 principal CRUD operations: Create, Read, Update, and Delete. And learn a thing or two about CRUD along the way to be able to think more like a programmer</p>

				</div>

				<p class="body-copy">
					If you'd like to go straigt to the live project site, you can click on this link <span><a href="https://alexvong.dev/modules/js-todo-list/" target="_blank">JS-ToDo-List</a></span> or view a live demo of the project below:
				</p>

			   <div style="height: 0px; overflow: hidden; padding-top: 56.25%; position: relative; width: 100%;">
			        <iframe
			            style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;"
			            src="https://tube.rvere.com/embed?v=TJsmnVwyw-g"
			            title="YouTube video player"
			            frameBorder="0"
			            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
			            allowFullScreen>
			        </iframe>
			    </div>

			    
			</div>



			<div class="project-intro">
				<h2 class="third-level-heading">
					#What-The-CRUD
				</h2>
				<p class="body-copy"><strong>CRUD</strong> is an acronym that stands for Create, Read, Update and Delete. Think of it as a simple concept that represents the four basic functions that applications should be able to do and are considered necessary to implement a persistent storage application. Or in simpler terms, it represents the four basic operations you can do on any data. You can <em>create</em> something new, <em>read</em> or view the newly created data, <em>update</em> (or edit) the data, and finally be able to <em>delete</em> it.

				<span class="block">To read more on CRUD operations you can view the <a href="https://en.wikipedia.org/wiki/Create,_read,_update_and_delete">CRUD Wikipedia Page</a></span>
				</p>
			</div>
			<div class="project-intro">
				<h2 class="third-level-heading">
					#Project-Intro
				</h2>
				<p class="body-copy">To understand and work with CRUD operations, I decided to make a <strong>Todo List Application</strong>. Not only is a Todo List a perfect project to incorporate the CRUD operations but it is also an application that I can use ad benefit from on my web development journey. 
				</p>
			</div>

			<div class="what-we-need-container">
				<h3 class="fourth-level-heading drophead">##What-We-Need</h3>
				<p class="body-copy">
					To make this a real CRUD application we need to implement the 4 principals:
					
					<ul class="list body-copy">
						<li><span class="bold-italic">Create</span> - user can create new todo tasks</li>
						<li><span class="bold-italic">Read</span> - user should be able to read/view the task(s) they created</li>
						<li><span class="bold-italic">Update</span> - user should be able to update or edit the task(s)</li>
						<li><span class="bold-italic">Delete</span> - user should be able to delete task(s)</li>
					</ul>
				</p>
								
				<picture>
					<img src="../images/crud-intro-img.svg" alt="crud intro paragraph image">
				</picture>
			</div>
				
			<div class="design-section">
				<h3 class="fourth-level-heading drophead">##Design</h3>
				<p class="body-copy">
				Like I do with all my projects, I first mock up it up on pen and paper and try to map out the project in my head and sketch it down. 

				<span class="block">After having a rough sketch of the application I mock up a render of it on Figma</span>
				</p>

				<div class="design-images">
					<picture>
						<img src="../images/todo-sketch.svg" alt="sketch of todo app on pen and paper">
					</picture>

					<picture>
						<img src="../images/todo-mockup.svg" alt="mockup of todo app on figma">
					</picture>
				</div>

				<p class="body-copy">With the sketch and mock up done, I can now build the project <code>HTML</code> skeleton.</p>

				<picture>
					<img src="../images/todo-skeleton.svg" alt="mockup of todo app on figma">
				</picture>
								
			</div>

			<div class="create-section">
				<h2 class="third-level-heading">
					#Create
				</h2>
				<p class="body-copy">
				The first step of this Todo List Application was to figure out a way for the user to input or <em>create</em> something and take the user's input and do something with it. 

				<span class="block">To do this I created a form with a text input. I then targeted that form and attached an event listener to it. </span>
				</p>

				<picture>
					<img src="../images/create-index.png" alt="create index html image">
				</picture>

				<p class="body-copy">I next took the <code>value</code> of the user’s <code>input</code> and assigned it to a variable <code>task</code>. I then logged the variable to the console to see if I was successfully able to get the value or if there was some error instead.
				</p>

				<picture>
					<img src="../images/create-test.jpg" alt="image of testing create in console">
				</picture>

				<p class="body-copy">Huzzah! I was able to successfully get the user’s input!</p>
			
			</div>

			<div class="read-section">
				<h2 class="third-level-heading">#Read</h2>

				<div class="read">
					<p class="body-copy">Next up, I had to render the data on the <code>DOM</code> so the user can <em>read</em> or view it. I created an empty array and assigned it to a <code>todos</code> global variable. Then back in my user input <code>addTodo</code> code block, I created a <code>if statement</code> that runs if the user input value is greater than 1 character. If it passes then the user’s value will be pushed into the <code>todos</code> array. This way the user can submit multiple tasks and they will all be added to an array.

					<span class="block">But before the <code>todos</code> array gets updated and after the user submits an individual task, the <code>renderOnDom</code> function is called on <code>line 31</code> and the function runs on <code>line 10</code></span>
					</p>

					<picture>
						<img src="../images/render-on-dom.jpg" alt="image of rendering task on DOM">
					</picture>

					<p class="body-copy">The <code>renderOnDom</code> function essentially takes the todos array and created a list item with each item in the array. I added a <code>ul</code> to the HTML and then updated the <code>innerHTML</code> with each <code>li</code>.
					</p>

				<video controls width="75%">
				    <source src="../images/create.mp4"
				            type="video/mp4">
				</video>

				</div>
				
				<div class="over-coming-challenges">
					<h3 class="fourth-level-heading drophead">##Overcoming-Challenges</h3>
					
						<p class="body-copy">One issue I quickly stumbled upon after being able to render the user’s task inputs was that they would dissapear once the browser refreshes. The reason for this is because inputs were not being saved anywhere. 

						<span class="block">I researched ways to save the data in this Todo List App and came across the <code>Window.localStorage</code> property. <code>localStorage</code> is a property that allows JavaScript sites and apps to save key-value pairs in a web browser with no expiration date. This means the data stored in the browser will persist even after the browser window is closed. Since I am not dealing with large amounts of data, this property is just what I need versues a large database.</span>

						<span class="block">I started in my <code>addTodo</code> event handler code block. Instead of pushing the user’s <code>input</code> into an array, I now took the data, <code>JSON.stringify</code>-ed it to convert it to a <strong>JSON string</strong>, and set it to the <code>localStorage</code> via <code>setItem</code> under the key <code>todo-list</code>. I also gave each task a new key:value pairing of <code>taskName:newTodo</code>.</span>
						</p>
						<picture>
							<img src="../images/set-local-storage.png" alt="image of code setting todo to local storage">
						</picture>

						<p class="body-copy">I was able to successfully set the user’s input into the window’s local storage and created an <code>if statement</code> that would run when the browser refreshes. It checked to see if todos has any data (or if it’s truthy) and then takes the data, <code>JSON.parse</code> it so it becomes a JS Object, and then calls the <code>renderOnDom</code> function to display the data.</p>

						<picture>
							<img src="../images/local-storage-console.jpg" alt="image of code setting todo to local storage">
						</picture>
				
				</div>

			</div>

			
			<div class="update-section">
				<h2 class="third-level-heading">#Update</h2>
				<p class="body-copy">The update portion was another major challenge of this Todo List Application. I had to figure out a way for the user to edit the input they submitted and get the new input onto the DOM and I was not completely sure how to even begin.

				<span class="block">So…I began with what I did know. I knew there had to be something the user can click on to start the update process. With that said I added an edit click handler on each task input so the user can click on it which will lead to them being able to edit tasks.</span>
				</p>

				<div class="over-coming-challenges">
					<h3 class="fourth-level-heading drophead">##Overcoming-Challenges</h3>
					
						<p class="body-copy">Now comes the challenging part of allowing the user to edit task that were already submitted and being shown on the DOM. I knew that I would have to somehow target whatever task was clicked on and then call another function to do something. 

						<span class="block">In this instance, and for the sake of change, I decided to add and onClick event handler directly on my edit button. When it is clicked, I took the ID of the current todo along with its taskName and passed it into and call a new editTask function</span>
						</p>
						<picture>
							<img src="../images/edit-task.png" alt="image of edit task code">
						</picture>

						<p class="body-copy">The <code>EditTask</code> function takes the current <code>taskName</code>, and pends it back to the <code>addTodos</code> input field, when it is submitted the new value is then added to the todos object and rendered onto the DOM. I then used a <code>.slice()</code> method to remove the original task from the list since we no longer need it.</p>

				<video controls width="75%">
				    <source src="../images/edit.mp4"
				            type="video/mp4">
				</video>
				
				</div>

				<div class="psa box-shadow">
					<p class="body-copy">I do realize that the approach I used to edit the task is not the best. First off, I am not truly editing the task but instead just creating a new one and deleting the old one. The way I am doing it is not true editing. At the time of writing this case study and working in this application, I do not have another solution. I do not want to get fixated on trying to solve this issue but rather try and finish the applicastion and this case tudy. I will be sure to come back at a later time to find a better solution and update this case study.</p>
				</div>

				<div class="update-from-the-future box-shadow">
					<h3 class="fourth-level-heading drophead">##Update-From-The-Future</h3>
					
						<p class="body-copy">After playing around with the code and looking up possible solutions on <strong>Stack Overflow</strong>, I was able to find another approach to edit task. This new approach changed the selected task rather than just create and push a new one and deleting the old one.

						<span class="block">This new approach is explained in the code below:</span>
						</p>
						<picture>
							<img src="../images/edit-update.png" alt="image of edit task code">
						</picture>

						<p class="body-copy">By setting an isEdited state on the selected value and grabbing it's ID, I was able to then target it's index based on the ID and change it's value to whatever the new value is.</p>

				<video controls width="75%">
				    <source src="../images/edit-update.mp4"
				            type="video/mp4">
				</video>
				
				</div>
				
			</div>

			<div class="delete-section">
				<h2 class="third-level-heading">
					#Delete
				</h2>
				<p class="body-copy">
					We are at the final leg of this <strong>CRUD Application</strong> and all that is left is to find a way to allow the user to <em>delete</em> task. Just like the <em>edit</em> process, I began with creating something the user can click to run a function that will do what I need it to do. I created a delete click handler next to the edit button which will pass the current task id into and call the function <code>deleteTask</code>. 
					</p>

				<picture>
					<img src="../images/delete.png" alt="image of delete code function">
				</picture>

				<p class="body-copy">The <code>deleteTask</code> function takes the current task id and removed it from the todo object via <code>.slice()</code>. The <code>todo</code> object is then set to <code>localStorage</code> to be updated and finally <code>renderOnDom</code> is called yet again to show changed on the <code>DOM</code>.
				</p>

				<video controls width="75%">
				    <source src="../images/delete.mp4"
				            type="video/mp4">
				</video>

								
			</div>

			<div class="Conclusion">
				<h2 class="third-level-heading">
					#Conclusion
				</h2>
				<p class="body-copy">
					This was by far one of the most frustrating, eye gouging, head smashing, and rewarding projects I have done so far. I feel I was able to get a better understanding of not only the CRUD operations but insight on how to make one and the awareness that there are hunfreds of ways to accomplish it. 
				
				<span class="block">
					There are many updates I want to and will be doing to this CRUD application in the future such as:
				</span>
				</p>

				<ul class="list body-copy">
					<li>Finding a better way to edit task then the way I currently have it</li>
					<li>Getting and setting current date</li>
					<li>Allow users to check off task they completed as well as uncheck task</li>
					<li>Feature a completed section with all completes task</li>
				</ul>
			
				<p class="body-copy">So stay tuned boys and girls and make sure to come back to this article to see the changes I have made.</p>

			</div>

			<div class="tools-resources box-shadow">
						<h4 class="fourth-level-heading drophead">##Tools and Resources Used:</h4>
						<ul class="tools body-copy"> 
							<li>HTML</li>
							<li>CSS</li>
							<li>JavaScript</li>
							<li>Window localStorage</li>
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