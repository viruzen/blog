<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
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
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

footer {
text-align: center;
padding: 3px;
background-color:lightgrey;
color:black;
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
      <h5>{{$blog->category->name}}, {{$blog->created_at}}</h5>
      <div class="fakeimg" style="height:200px;">Image</div>

      <p>{!! html_entity_decode($blog->body) !!}</p>
      <form action="/html/tags/html_form_tag_action.cfm" method="post">
<textarea name="comments" id="comments" style="width:96%;height:150px;padding:2%;font-size:1.2em;border:1px solid #6DB72C;">
Enter your comments here...
</textarea><br>
<input type="submit" value="Submit Comment">
</form>
    </div>

  </div>
 </div>
 <footer>
  <h2>REVUE</h2>
  <p>Knowledge with Entertainment - REVUE</p>
</footer>
</body>
</html>