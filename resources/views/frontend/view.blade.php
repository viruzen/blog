<!DOCTYPE html>
<html>
<head>
  <title>view</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googeapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
ul.thumbs {
  margin:0 auto;
  padding:0;
  list-style:none;
  width:500px;
}
ul.thumbs li { margin:0 0 20px; }
ul.thumbs li a, ul.thumbs li a:visited {
  display:block;
  text-decoration:none;
  color:#000;
}
ul.thumbs li img, ul.thumbs li span {
  display:inline-block;
  vertical-align:middle;
}
ul.thumbs li img { border:2px solid #000; }
ul.thumbs li span {
  width:280px;
  margin:0 0 0 8px
}
ul.thumbs li a:hover { color:#f00 }
ul.thumbs li a:hover img { border-color:#f00 }

body {
  font-family: "Lato", sans-serif;
  height: 1450px;
  background: linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
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

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

footer {
text-align: center;
padding: 3px;
background-color:lightgrey;
color:black;
}

* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;

  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 40%;
  padding-left: 20px;
}



/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
   left: 20%;
   right: 25%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {
    width: 100%;
    padding: 0;
  }
}
</style>
</head>
<body>
  @include('layouts.nav')
<div class="header">
  <h2>Blog</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>{{ucfirst($blog->title)}}</h2>
      <h5>{{$blog->category->name}}, {{$blog->created_at}} </h5>
      <div style="height:150px;"></div>

      <p>{!! html_entity_decode($blog->body) !!}</p>
      <form action="/html/tags/html_form_tag_action.cfm" method="post">
<textarea name="comments" id="comments" style="width:96%;height:150px;padding:2%;font-size:1.2em;border:1px solid #6DB72C;">
Enter your comments here...
</textarea><br><br>
<input type="submit" value="Submit Comment">
</form>
    </div>

  </div>
 </div>
 <br>
 <footer>
  <h2>REVUE</h2>
  <p>Knowledge with Entertainment - REVUE</p>
</footer>
</body>
</html>
