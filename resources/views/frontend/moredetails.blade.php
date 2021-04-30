  <!DOCTYPE html>
  <html>
  <head>
    <title></title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googeapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
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
  </div>

  <div class="col-lg-6 col-md-6 col-12">
          <h1 class="display-5">This is REVUE</h1><br>
          <br>
          <h3>Revue is an user friendly blogging site, which is an online journal or
  informational website displaying information in reverse chronological
  order, with the latest posts appearing first, at the top. It is a platform
  where user share their views on a subject or show their skills to other
  audiences.Makes it easy to socialize.</h3><br>
  <h3> It can be used for socializing and gaining knowledge at the same time. Admin makes a report of user’s details and make it easy for users to socialize. Here, users/managers have to login through a unique id to post/upload their blogs that is write-ups , quotes, poems,short stories, shayris etc. Users can also upload their any work of
  photography,art,painting,designs etc. in image format.</h3><br>
  <h3> Users can search their subject as per their interest as a category column
  will be given and while posting/uploading anything on the site user has to
  select the category they want to publish in.</h3><br>
  <h3> For education purpose and entertainment both the site will also provide
  users with links of top 10 best sellers in books section, and links of top 10
  trending songs of the month. User can comment, react and even update their profile in this site but only
  after login registration.</h3><br>

        </div></div></section>
        <footer>
          <h2>REVUE</h2>
          <p>Knowledge with Entertainment - REVUE</p>
        </footer>
      </body></html>
