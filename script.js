
console.clear();

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