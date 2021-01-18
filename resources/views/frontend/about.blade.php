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
 <link rel="stylesheet" type="text/css" href="css/custom.css">
<style>
footer {
text-align: center;
padding: 3px;
background-color:lightgrey;
color:black;
}

a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: pink;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
/*body {
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
}*/

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>
  @include('layouts.nav')

<section class="my-5">
  <div class="py-5">
    <h1 class="text-center">About Us</h1>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="img/R.jpg" class="img-fluid aboutimg">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h3 class="display-7">This is REVUE</h3>
        <p class="py-3">A single platform for large varieties of entertainment,
under one roof, is a flexible platform & may change or add
number of other sections as per the change in the aptitude &
interest with time of the users to remain relevant for every
generation.</p>
        <div class="btn btn-success"><a href="{{route('moredetails')}}" target="_blank">Check More Details</div>
      </div>
    </div>
  </div>
</section>
<footer>
  <h2>REVUE</h2>
  <p>Knowledge with Entertainment - REVUE</p>
</footer>
</body></html>
