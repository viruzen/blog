<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    {{--  <link href="https://fonts.googeapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">--}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
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
    </style>
</head>
<body>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-3" id="app">
          <div class="text-center">
              <div class="master-card pt-5 pb-5">
                  <div class="thumb-lg member-thumb mx-auto card-img-top zmdi-image-alt">
                      <img src="img/a.jpg" class="rounded-circle img-thumbnail" alt="profile-image" />
                  </div>
                  <div class="user-data">
                      <div class="fullname pt-2"><h2>name</h2></div>
                      <p class="text-muted">
                          0
                          <span class="verify pb-10">
                              <img src="https://www.flaticon.com/svg/static/icons/svg/190/190411.svg" alt="verify-badge" height="15px" width="15px">
                          </span>
                      </p>
                      <span v-if="follow==1">
                        <button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Follow</button>
                      </span>

                      <div class="row">
                          <div class="col-4">
                              <div class="mt-3">
                                  <h4>postcount</h4>
                                  <p class="mb-0 text-muted">Posts</p>
                              </div>
                          </div>
                          <div class="col-4">
                              <div class="mt-3">
                                  <h4>followercount</h4>
                                  <p class="mb-0 text-muted">Followers</p>
                              </div>
                          </div>
                          <div class="col-4">
                              <div class="mt-3">
                                  <h4>followcount</h4>
                                  <p class="mb-0 text-muted">Following</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="col-md-8 pr-3">
            <h1>Blogs</h1>

            <div class="container">
                <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-6 pb-5">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c"/>
                                    <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                                <div class="card-body">
                                    <p class="card-header">{{$blog->title}}</p>
                                    <p class="card-text pt-3">{{substr($blog->body, 0, 80)}}....</p>
                                    <div class="tags">
                                        @foreach($blog->tags as $tag)
                                            <span class="badge badge-secondary">{{$tag->name}}</span>
                                        @endforeach
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            @if(Auth::check())
                                                @if(Auth::user()->username==$user->username)
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                            @endif
                                            @endif
                                        </div>
                                        <small class="text-muted">Total Comments: <b>{{count($blog->comments)}}</b></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

</main>
<!-- END GRID -->
</div>


<footer>
  <h2>REVUE</h2>
  <p>Knowledge with Entertainment - REVUE</p>
</footer>

<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script>
 const app = new Vue({
   el: #app,
   data : {
     follow: 0,
     followers:0,
     following:0,
     post:0
   },
   methods: {
     followed: function(){
       this.follow=1
     },
     followercount: function(){
       this.follower=1
     },
     followingcount: function(){
       this.following=1
     },
     postcount: function(){
       this.post=1
     },
   }
 })
</script>
</body>
</html>
