if (history.scrollRestoration) {
    history.scrollRestoration = 'manual';
} else {
    window.onbeforeunload = function () {
        window.scrollTo(0, 0);
    }
}

console.clear();


const home = document.querySelector('.home');
const about = document.querySelector('.about');
const projects = document.querySelector('.projects');
const writing = document.querySelector('.writing');

const mobileNav = document.querySelector('.nav-bar-mobile');

const greeting = document.querySelector('.greeting');

const light = document.querySelector('.light');
const dark = document.querySelector('.dark');

const lightMobile = document.querySelector('.nav-bar-mobile .light');
const darkMobile = document.querySelector('.nav-bar-mobile .dark');

console.log(light);
console.log(dark);




let newDate = new Date();
  // newDate.setHours(14);
  let hour = newDate.getHours();
  let setGreeting = "";

  
window.addEventListener("load", (event) => {

  if (greeting) {
  if (hour >= 0 && hour <= 3) {
    setGreeting = `Hello, Night 🦉`;
    renderGreeting(setGreeting);
  }

  if (hour >= 4 && hour <= 7) {
    setGreeting = `Greetings, Early 🐣`;
    renderGreeting(setGreeting);

  }

    if (hour >= 8 && hour <= 11) {
    setGreeting = `Good Morning ☕`;
    renderGreeting(setGreeting);
  }

  if (hour >= 12 && hour <= 17) {
    setGreeting = `Good Afternoon 🍔`;
    renderGreeting(setGreeting);
  }

   if (hour >= 17 && hour <= 23) {
    setGreeting = `Good Evening 🥃`;
    renderGreeting(setGreeting);
  }
}

});



function renderGreeting(phrase) {
  greeting.innerText = phrase;
}

home.addEventListener('click', ()=> {
  home.classList.add('active');
  about.classList.remove('active');
  projects.classList.remove('active');
  writing.classList.remove('active');

});

about.addEventListener('click', ()=> {
  home.classList.remove('active');
  about.classList.add('active');
  projects.classList.remove('active');
  writing.classList.remove('active');
});

projects.addEventListener('click', ()=> {
  home.classList.remove('active');
  about.classList.remove('active');
  projects.classList.add('active');
  writing.classList.remove('active');
});

writing.addEventListener('click', ()=> {
  home.classList.remove('active');
  about.classList.remove('active');
  projects.classList.remove('active');
  writing.classList.add('active');
});



// light.addEventListener('click', ()=>{
//   light.classList.add('hidden');
//   dark.classList.remove('hidden');
// });

// dark.addEventListener('click', ()=>{
//   dark.classList.add('hidden');
//   light.classList.remove('hidden');
// })


function getTheme() {
  return window.localStorage.getItem('chosenTheme');
}

function setTheme(name) {
  window.localStorage.setItem('chosenTheme', name);
  document.body.dataset.theme = name;
  var theme = document.body.dataset.theme;
  document.cookie = "theme=" + theme;

  console.log(theme);

  console.log(light);
  console.log(dark);

  if (theme === 'light') {
      light.classList.add('hidden');
        dark.classList.remove('hidden');

        if (lightMobile) {
            lightMobile.classList.add('hidden');

        }

        if(darkMobile) {
          darkMobile.classList.remove('hidden');
       }
  }

  if (theme == 'dark') {
        light.classList.remove('hidden');
        dark.classList.add('hidden');
        if (lightMobile) {
            lightMobile.classList.remove('hidden');
        }

        if(darkMobile) {
          darkMobile.classList.add('hidden');
       }
  }

}


/* set chosen theme on page load */
if ( getTheme() ) {
  setTheme( getTheme() );
}


window.addEventListener('click', function(selected) {

  if ( selected.target.matches('switcher button svg') ) {
    console.clear();
    var selectedScheme = selected.target.dataset.scheme;
    setTheme(selectedScheme);
  }

});














