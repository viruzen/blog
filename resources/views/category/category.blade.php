<!DOCTYPE html>
<html>
<head>
  <title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://fonts.googeapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<style>

url('https://fonts.googleapis.com/css?family=Raleway:300,400');
body {
  background: lightgreen;
  font-family: 'Raleway', sans-serif;
}


/* Heading */

h1 {
  font-size: 1.5em;
  text-align: center;
  padding: 70px 0 0 0;
  color: black;
  font-weight: 300;
  letter-spacing: 1px;
}



/* Layout Styling */

#container {
  width: 100%;
  margin: 0 auto;
  padding: 50px 0 150px 0;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
}


/* Button Styles */

.button {
  display: inline-flex;
  height: 40px;
  width: 150px;
  border: 2px solid green;
  margin: 20px 20px 20px 20px;
  color: green;
  text-transform: uppercase;
  text-decoration: none;
  font-size: .8em;
  letter-spacing: 1.5px;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

a {
  color: green;
  text-decoration: none;
  letter-spacing: 1px;
}


/* First Button */

#arrow-hover {
  width: 15px;
  height: 10px;
  position: absolute;
  transform: spin(60px);
  opacity: 0;
  -webkit-transition: all .25s cubic-bezier(.14, .59, 1, 1.01);
  transition: all .15s cubic-bezier(.14, .59, 1, 1.01);
  margin: 0;
  padding: 0 5px;
}

a#button-1:hover img {
  width: 15px;
  opacity: 1;
  transform: spin(50px);
}


/* Second Button */

#button-2 {
  position: relative;
  overflow: hidden;
  cursor: pointer;
}

#button-2 a {
  position: relative;
  transition: all .35s ease-Out;
}

#spin {
  width: 0;
  height: 0;
  opacity: 0;
  left: 70px;
  top: 20px;
  transform: rotate(0deg);
  background: none;
  position: absolute;
  transition: all .5s ease-Out;
}

#button-2:hover #spin {
  width: 200%;
  height: 500%;
  opacity: 1;
  left: -70px;
  top: -70px;
  background: green;
  transform: rotate(80deg);
}

#button-2:hover a {
  color: lightgreen;
}


/* Third Button */

#button-3 {
  position: relative;
  overflow: hidden;
  cursor: pointer;
}
#button-3 a {
  position: relative;
  transition: all .45s ease-Out;
}

#spin {
  width: 0;
  height: 0;
  opacity: 0;
  left: 70px;
  top: 20px;
  transform: rotate(0deg);
  background: none;
  position: absolute;
  transition: all .5s ease-Out;
}

#button-3:hover #spin {
  width: 200%;
  height: 500%;
  opacity: 1;
  left: -70px;
  top: -70px;
  background: green;
  transform: rotate(80deg);
}

#button-3:hover a {
  color: lightgreen;
}

/* Fourth Button */

#button-4 {
  position: relative;
  overflow: hidden;
  cursor: pointer;
}

#button-4 a {
  position: relative;
  transition: all .45s ease-Out;
}

#spin {
  width: 0;
  height: 0;
  opacity: 0;
  left: 70px;
  top: 20px;
  transform: rotate(0deg);
  background: none;
  position: absolute;
  transition: all .5s ease-Out;
}

#button-4:hover #spin {
  width: 200%;
  height: 500%;
  opacity: 1;
  left: -70px;
  top: -70px;
  background: green;
  transform: rotate(80deg);
}

#button-4:hover a {
  color: lightgreen;
}


/* Fifth Button */

#button-5 {
  position: relative;
  overflow: hidden;
  cursor: pointer;
}

#button-5 a {
  position: relative;
  transition: all .45s ease-Out;
}

#spin {
  width: 0;
  height: 0;
  opacity: 0;
  left: 70px;
  top: 20px;
  transform: rotate(0deg);
  background: none;
  position: absolute;
  transition: all .5s ease-Out;
}

#button-5:hover #spin {
  width: 200%;
  height: 500%;
  opacity: 1;
  left: -70px;
  top: -70px;
  background: green;
  transform: rotate(80deg);
}

#button-5:hover a {
  color: lightgreen;
}


/* Sixth Button */

#button-6 {
  position: relative;
  overflow: hidden;
  cursor: pointer;
}

#button-6 a {
  position: relative;
  transition: all .45s ease-Out;
}

#spin {
  width: 0;
  height: 0;
  opacity: 0;
  left: 70px;
  top: 20px;
  transform: rotate(0deg);
  background: none;
  position: absolute;
  transition: all .5s ease-Out;
}

#button-6:hover #spin {
  width: 200%;
  height: 500%;
  opacity: 1;
  left: -70px;
  top: -70px;
  background: green;
  transform: rotate(80deg);
}

#button-6:hover a {
  color: lightgreen;
}


/* Seventh Button */

#button-7 {
  position: relative;
  overflow: hidden;
  cursor: pointer;
}

#button-7 a {
  position: relative;
  left: 0;
  transition: all .45s ease-Out;
}

#spin {
  width: 0;
  height: 0;
  opacity: 0;
  left: 70px;
  top: 20px;
  transform: rotate(0deg);
  background: none;
  position: absolute;
  transition: all .5s ease-Out;
}


#button-7:hover #spin {
  width: 200%;
  height: 500%;
  opacity: 1;
  left: -70px;
  top: -70px;
  background: green;
  transform: rotate(80deg);
}
#button-7:hover a {
  color: lightgreen;
}

@media screen and (min-width:1000px) {
  h1 {
    font-size: 2.2em;
  }
  #container {
    width: 50%;
  }
}
body {
  font-family: "Lato", sans-serif;

}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}
footer {
text-align: center;
padding: 3px;
background-color:lightgrey;
color:black;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

.btn-group button {
  background-color: #4CAF50; /* Green background */
  border: 1px solid green; /* Green border */
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */

}
</style>
</head>

<body>
  @include('layouts.nav')
  <h1>CATEGORIES</h1>
<br>
<br>
<!-- Flex Container -->
<div id="container">


  <div class="button" id="button-2">
    <div id="spin"></div>
    <a href="#">Story</a>
  </div>

  <div class="button" id="button-3">
    <div id="spin"></div>
    <a href="#">Poem</a>
  </div>

  <div class="button" id="button-4">
    <div id="spin"></div>
    <a href="#">Travel</a>
  </div>

  <div class="button" id="button-5">
    <div id="spin"></div>
    <a href="#">Fashion</a>
  </div>

  <div class="button" id="button-6">
    <div id="spin"></div>
    <a href="#">Food</a>
  </div>

  <div class="button" id="button-7">
    <div id="spin"></div>
    <a href="#">Sports</a>
  </div>

  <!-- End Container -->
</div>
<footer>
  <h2>REVUE</h2>
  <p>Knowledge with Entertainment - REVUE</p>
</footer>
  </body>
  </html>
