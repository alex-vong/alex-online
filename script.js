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


const homeMobile = document.querySelector('.home-mobile');
const aboutMobile = document.querySelector('.about-mobile');
const projectsMobile = document.querySelector('.projects-mobile');
const writingMobile = document.querySelector('.writing-mobile');



home.addEventListener('click', ()=> {
  home.classList.add('active');
  about.classList.remove('active');
  projects.classList.remove('active');
  writing.classList.remove('active');

  console.log(home);
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


homeMobile.addEventListener('click', ()=> {
  homeMobile.classList.add('active');
  aboutMobile.classList.remove('active');
  projectsMobile.classList.remove('active');
  writingMobile.classList.remove('active');

});

aboutMobile.addEventListener('click', ()=> {
  homeMobile.classList.remove('active');
  aboutMobile.classList.add('active');
  projectsMobile.classList.remove('active');
  writingMobile.classList.remove('active');
});

projectsMobile.addEventListener('click', ()=> {
  homeMobile.classList.remove('active');
  aboutMobile.classList.remove('active');
  projectsMobile.classList.add('active');
  writingMobile.classList.remove('active');
});

writingMobile.addEventListener('click', ()=> {
  homeMobile.classList.remove('active');
  aboutMobile.classList.remove('active');
  projectsMobile.classList.remove('active');
  writingMobile.classList.add('active');
});

function getTheme() {
  return window.localStorage.getItem('chosenTheme');
}

function setTheme(name) {
  window.localStorage.setItem('chosenTheme', name);
  document.body.dataset.theme = name;



  var theme = document.body.dataset.theme;

  document.cookie = "theme=" + theme;


  console.log(theme);

}

/* set chosen theme on page load */
if ( getTheme() ) {
  setTheme( getTheme() );
}



window.addEventListener('click', function(selected) {

  if ( selected.target.matches('switcher button') ) {
    console.clear();
    var selectedScheme = selected.target.dataset.scheme;
    setTheme(selectedScheme);
  }

});