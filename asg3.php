<?php

printTop();

print
"<!--  body of document starts here  --> \n".
"<body> \n".
"<div class='heading'> \n".
  "<h2>  Colby Hayes' Webpage</h2> \n".
"</div> \n".
"<div class='content'> \n".
"<!--  float left starts here --> \n".
 "<div class='floatleft'> \n".
 "<h3> My major </h3> \n".

    "Computer Science \n".

 "<h4> My hobbies </h4> \n".
 "<ul> \n".
 "<li> Biking </li> \n".
 "<li> Gaming </li> \n".
 "<li> Pick-up sports </li> \n".
 "</ul> \n".

 "<h6> Some helpful links: </h6> \n".
  "<a href='http://validator.w3.org'> html validator </a> \n". 
  "<br /><br /> \n".
  "<a href='http://w3schools.com/html/default.asp'> html reference </a> \n".
  "<br /><br /> \n".
  "<a href='http://w3schools.com/css/default.asp'> css reference </a> \n".
  "<br /><br /> \n".
  "<a href='https://stackoverflow.com/'> Stack Overflow</a> \n".
  "<br /><br /> \n".
  "<a href='https://www.khanacademy.org/'>Khan Academy</a> \n".
  "<br /><br /> \n".
  "<a href='http://jbryan2.create.stedards.edu/cosc2328/'> cosc 2328</a> \n".
  
  "<h6> COSC 2328 Assignments: </h6> \n".
 "</div> \n".
"<!--  end of float left  --> \n".
"<!--  start new float left  --> \n".
 "<div class='floatleft'> \n".
  "<div class='border'> \n".
  "<br /> \n".
     "My siblings and I... \n".
  "<br /> \n".
      "<img src='./images/fam.jpg' alt='my Siblings and I...' height='250' width='250'/> \n".

   "</div> \n".
 "</div> \n".
"<!--  end of float left  --> \n".
"<div class='clear'></div> \n".
"<p class='footer'> \n".
 "St. Edward&apos;s University .:. cosc 2328 - web programming .:. spring 2018 \n".
"</p> \n".

"</div> \n";

printBottom();

function printBottom() {
    print
    "<!--  end of content  --> \n".
    "</body> \n".
    "</html> \n";
}

function printTop() {
    print
    "<!DOCTYPE html> \n".
    "<html lang='en'> \n".
    "<head>".
         "<meta charset='utf-8'>".
        "<meta name='viewport' content='width=device-width, initial-scale=1.0'> \n".
        "<meta name='description' content='Assignment #1 COSC 2328'> \n".
        "<meta name='author' content='Colby Hayes'>".
        "<link rel='icon' href='../favicon.ico' type='image/x-icon'/> \n".

    "<!--  style sheet linked in here  --> \n".
    "<link rel='stylesheet' href='./css/homepage.css' type='text/css' /> \n".

    "<!--  change page title here  --> \n".
    "<title>  Colby Hayes' COSC 2328 Home Page  </title> \n".

    "</head>";
}

?>