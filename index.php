<!doctype html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>AOL - Alex OnLine</title>
   <meta name="description" content="Hi, my name is Alex. I am an aspiring Web Designer and Developer.">

   <meta property="og:title" content="Alex On-Line" />
   <meta property="og:type" content="">
   <meta property="og:url" content="">

   <meta property='og:image' content="https://peprojects.dev/alpha-1/alexvong/aol-images/meta-image.png">

   <link rel='stylesheet' href='css/style.css'>
</head>

<body>


   <masthead>
      <inner-column>
         <div class="site-heading">
         <h1 class="loud-voice">Welcome to AOL (Alex OnLine)</h1>

         </div>
      </inner-column>

   </masthead>


   <main>
      <inner-column>
         <section class="about">
            <h2 class="attention-voice"> About Me:</h2>

            <p class="intro-voice">
            Hello, my name is <span>Alex</span>! Welcome to my website! I am currenlty a Student at Perpetual Education's 
            <a href="">"Design for the Web"</a>
            Mentorship. This was one of the first websites I ever built and it will be where I keep all my projects and contact information while I work on my featured personal portfolio site. Stay tuned!
            </p>

            <p class="intro-voice">I also enjoy writing from time to time. If you are interested in reading some of my articles, here is a link to my <a href="https://alexvong.substack.com/">Substack</a></p>

         </section>
      </inner-column>
   </main>


   <section class="contact-me">
      <inner-column>
         <h2 class="attention-voice">
         Contact Me
         </h2>

         <h3 class="intro-voice">
         I am currently seeking employment as a <span>Front End Web Developer</span>. If you are interested in hiring me, you can contact me via

         <span><a href="mailto:avong003@gmail.com">email, </a>
         <a href="https://github.com/c0debrew-sky">GitHub,</a>
         <a href="https://twitter.com/alexv0ng">Twitter,</a> 
         <a href="#">Instagram,</a>
         <a href="https://alexvong.substack.com/">Substack,</a>
         or <a href="https://codepen.io/Alexv0ng">CodePen</a></span>
         </h3>


      </inner-column>
   </section>



   <section class="projects">
      <inner-column>
         <h2 class="attention-voice">Projects</h2>

         <p class="calm-voice">Here ais a glance of some of the projects I have been workin on over the past few months</p>

         <?php include('projects-data.php')?>


         <section class="project-grid">
            <?php foreach ($projects as $project) { ?>

               <div class="project-card">
                  <div class="project-info">
                     <h4 class="stout-voice"><?=$project["project-name"]?></h4>

                     <p class="intro-voice"><?=$project["project-description"]?></p> 
                      
                  </div>

                  <a href="<?=$project['project-link']?>" class="calm-voice" >
                  View Project
                  </a>

               </div>

            <?php } ?>

         </section>

   </inner-column>
</section>






</body>

</html>
