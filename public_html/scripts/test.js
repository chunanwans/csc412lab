var buttonElement = document.getElementById("title-button");

var elementsArray = document.getElementsByTagName("h1");

var element = elementsArray[0];

function toggle() {
    
  var myButtonClasses = document.getElementById("title-button").classList;

  if (myButtonClasses.contains("myclass")) {
    myButtonClasses.remove("myclass");
  } else {
    myButtonClasses.add("myclass");
  }
  
}
