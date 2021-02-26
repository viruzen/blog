<!DOCTYPE html>
<html>
<head>
  <title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
{{--  <link href="https://fonts.googeapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">--}}
 <meta name="viewport" content="width=device-width, initial-scale=1">
<style>


body {
  font-family: "Lato", sans-serif;
  background: #f3f3f3;
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

 /* Add a gray background color and some padding to the footer */
 footer {
 text-align: center;
 padding: 3px;
 background-color:lightgrey;
 color:black;
 }

* {
  box-sizing: border-box;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}


</style>
<body>
@include('layouts.nav')
</body></head>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.btn-rounded {
    border-radius: 2em;
}
.text-muted {
    color: #98a6ad!important;
}
h4 {
    line-height: 22px;
    font-size: 18px;
}

.card-header{
    padding:0;
    margin-bottom: 0;
    background-color: #ffffff;
    border-bottom: 0;
    font-weight: bold;
}

.height-100 {
    height: 100vh
}

.card {
    width: 380px;
    border: none
}

.dots {
    height: 20px;
    width: 20px;
    margin-top: 4px;
    margin-left: 4px;
    background-color: #4CAF50;
    border-radius: 50%;
    border: 2px solid #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 10px
}

.list li {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 13px;
    border-top: 1px solid #eee;
    cursor: pointer
}

.list li:hover {
    background-color: #4CAF50;
    color: #fff
}
.rounded{
  height: 300px;
}
</style>
</head>
<body>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="row" id="follow">
  <div class="col-sm-3" v-for="(user, index) in users">

      <div class="card text-center" style="margin: 70px">

        <div class="py-4 p-2">
           @if(!empty($image))
            <img src="{{asset($image->url)}}" class="rounded">
          @else
            <img src="https://i.imgur.com/EnANUqj.jpg" class="rounded" width="100">
          @endif
            <div class="fullname pt-2"><h2>{{$user->name}}</h2></div>
            <div class="mt-3 d-flex flex-row justify-content-center">
                <h5>{{$user->username}}</h5> <span class="dots"><i class="fa fa-check"></i></span>
            </div>
            <div>
              <a href="{{ route('profile.edit') }}" class="btn btn-success">
                <i class="fa fa-pencil"></i> Edit
              </a>
              <a href="{{route('blog.create')}}" class="btn btn-outline-secondary">
                <i class="fa fa-plus"></i> Create
              </a>
           </div>
        </div>
        <div>
            <ul class="list-unstyled list">
                <li> <span class="font-weight-bold">Post</span>
                    <div> <span class="mr-1">{{$user->post_count}}</span> <i class="fa fa-angle-right"></i> </div>
                </li>
                <li> <span class="font-weight-bold">Followers</span>
                    <div> <span class="mr-1">{{$user->follower_count}}</span> <i class="fa fa-angle-right"></i> </div>
                </li>
                <li> <span class="font-weight-bold">Following</span>
                    <div> <span class="mr-1">{{$user->follow_count}}</span> <i class="fa fa-angle-right"></i> </div>
                </li>
            </ul>
        </div>
      </div>
  </div>

  <div class="col-sm-9">
      <h1>
          Edit
      </h1>
      <form class="form-horizontal" method="POST" action="{{ route('profile.update',['id' => $user->id]) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" aria-describedby="name" value="{{$user->name}}" name="name" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" aria-describedby="email" value="{{$user->email}}" name="email" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" aria-describedby="username" value="{{$user->username}}" name="username" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="profile">Image</label>
          <input id="name" type="file" class="form-control" name="profile"  />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
<!-- END GRID -->
<footer>
  <h2>REVUE</h2>
  <p>Knowledge with Entertainment - REVUE</p>
</footer>

</body>
</html>
