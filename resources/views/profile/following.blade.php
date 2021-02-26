<!DOCTYPE html>
<html>
<head>
  <title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googeapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="{{ asset('js/jquery.min.js') }}"></script>
 <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
 <script src="{{ asset('js/select2.min.js') }}"></script>
 <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
 <style>

     /* Add a gray background color and some padding to the footer */
     footer {
     text-align: center;
     padding: 3px;
     background-color:lightgrey;
     color:black;
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

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
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
     * {
       box-sizing: border-box;
     }

     body {
     	color: #999;
     	background: #f3f3f3;
     	font-family: "Muli-Regular";
     	src: url("../fonts/muli/Muli-SemiBold.ttf");
     }

     header{
       font-size: 36px;
       margin-bottom: 60px;
       font-family: 'Montserrat', sans-serif;
     }

     .container {
       border-radius: 5px;
       background-color: #fcfcfc;
       padding: 20px;
       box-shadow: -2px 4px 28px 0px rgba(0,0,0,0.75);
       width:60%;
       max-width: 60%;
       height: auto;
     }

     .btn {
       margin-top: 30px;
     }

     input[type=text], select, textarea {
       width: 100%;
       padding: 12px;
       border: 1px solid #ccc;
       border-radius: 4px;
       resize: vertical;
     }

     label {
       padding: 12px 12px 12px 0;
       display: inline-block;
     }

     input[type=submit] {
       background-color: #4CAF50;
       color: white;
       padding: 12px 20px;
       border: none;
       border-radius: 4px;
       cursor: pointer;
       float: right;
     }

     input[type=submit]:hover {
       background-color: #45a049;
     }


     .col-25 {
       float: left;
       width: 25%;
       margin-top: 6px;
     }

     .col-75 {
       float: left;
       width: 75%;
       margin-top: 6px;
     }

     /* Clear floats after the columns */
     .row:after {
       content: "";
       display: table;
       clear: both;
     }

     /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
     @media screen and (max-width: 600px) {
       .col-25, .col-75, input[type=submit] {
         width: 100%;
         margin-top: 0;
       }
     }

     body {
    background-color: #eee
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

    @include('layouts.nav')
    <div class="row" id="follow">
      <div class="col-sm-3" v-for="(user, index) in users">

          <div class="card text-center" style="margin: 70px">

            <div class="py-4 p-2">
                <div v-if="user.image">
                   <img :src="user.image.url" class="rounded" width="100">
                 </div>
                <div v-else>
                   <img src="https://i.imgur.com/EnANUqj.jpg" class="rounded" width="100">
                 </div>
                <div class="mt-3 d-flex flex-row justify-content-center">
                    <h5>@@{{user.username}}</h5> <span class="dots"><i class="fa fa-check"></i></span>
                </div>
                <div>
                   <span v-if="auth_username !== user.username">
                     <button class="btn btn-success" v-if="user.isFollow == 0" :name="user.id" :id="index" :index="index" v-on:click="followed($event)">Follow</button>
                     <button class="btn btn-outline-secondary" :id="index" :name="user.id"  :index="index" v-on:click="unfollowed($event)" v-else>Unfollow</button>
                   </span>
                   <button class="btn btn-outline-secondary">
                     <i class="fa fa-users"></i> View
                   </button>
                 </div>
            </div>
            <div>
                <ul class="list-unstyled list">
                    <li> <span class="font-weight-bold">Post</span>
                        <div> <span class="mr-1">@{{user.post_count}}</span> <i class="fa fa-angle-right"></i> </div>
                    </li>
                    <li> <span class="font-weight-bold">Comments</span>
                        <div> <span class="mr-1">45</span> <i class="fa fa-angle-right"></i> </div>
                    </li>
                    <li> <span class="font-weight-bold">Followers</span>
                        <div> <span class="mr-1">@{{user.follow_count}}</span> <i class="fa fa-angle-right"></i> </div>
                    </li>
                </ul>
            </div>
          </div>
      </div>
    </div>
  <footer>
    <h2>REVUE</h2>
    <p>Knowledge with Entertainment - REVUE</p>
  </footer>
</body>
<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
 const app = new Vue({
   el: '#follow',
   data : {
     auth_username: {!! json_encode(Auth::user()->username) !!},
     username: {!! json_encode($user->username) !!},
     users: [],
     follow_id: 0
   },
   created() {
      fetch('http://localhost/blog/public/api/v1/{!! $user->id !!}/following/{!! Auth::user()->id !!}')
          .then(response => response.json())
          .then(json => {
            this.users = json.users
          })
   },
   methods: {
     followed: function(event) {
        follow_id = event.currentTarget.id
        user_id = event.currentTarget.name
        url = 'http://localhost/blog/public/api/v1/follow/'+{!! json_encode(Auth::user()->id) !!}+'/'+user_id
        axios.post(url)
        console.log(url)
        this.users[follow_id].isFollow = 1
        this.users[follow_id].follow_count += 1
     },
     unfollowed: function(event) {
        follow_id = event.currentTarget.id
        user_id = event.currentTarget.name
        console.log(user_id)
        url = 'http://localhost/blog/public/api/v1/unfollow/'+{!! json_encode(Auth::user()->id) !!}+'/'+user_id
        axios.post(url)
        this.users[follow_id].isFollow = 0
        this.users[follow_id].follow_count-=1
     }
   }
 })
</script>
</html>
