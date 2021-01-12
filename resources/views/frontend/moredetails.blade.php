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
</style>
</head>
<body>
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
  </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
     <a href="profie.php">Profile</a>
    <a href="home.php">Home</a>

    <a href="about.php">About</a>
    <a href="categories.php">Categories</a>
    <a href="book.php">Books</a>
    <a href="music.php">Music</a>
  </div>

  <div id="main">
    <button class="openbtn" onclick="openNav()">☰  REVUE</button>
  </div>

   <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit "> Search </button>
        </form>
  </div>
  <script>
  function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }

  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }

  </script>
  </nav>


  <section class="my-5">
    <div class="py-5">
      <h1 class="text-center">About Us</h1>
    </div>
    <div class="container-fluid">
      <div class="row">
  </div>

  <div class="col-lg-6 col-md-6 col-12">
          <h3 class="display-4">This is REVUE</h3>
          <p>Revue is an user friendly blogging site, which is an online journal or
  informational website displaying information in reverse chronological
  order, with the latest posts appearing first, at the top. It is a platform
  where user share their views on a subject or show their skills to other
  audiences.Makes it easy to socialize.</p>
  <p> It can be used for socializing and gaining knowledge at the same time. Admin makes a report of user’s details and make it easy for users to socialize. Here, users/managers have to login through a unique id to post/upload their blogs that is write-ups , quotes, poems,short stories, shayris etc. Users can also upload their any work of
  photography,art,painting,designs etc. in image format.</p>
  <p> Users can search their subject as per their interest as a category column
  will be given and while posting/uploading anything on the site user has to
  select the category they want to publish in.</p>
  <p> For education purpose and entertainment both the site will also provide
  users with links of top 10 best sellers in books section, and links of top 10
  trending songs of the month. User can comment, react and even update their profile in this site but only
  after login registration.</p>

        </div></div></section></body></html>

<section class="my-5">
  <div class="py-5">
    <h1 class="text-center">About Us</h1>
  </div>
  <div class="container-fluid">
    <div class="row">
</div>

<div class="col-lg-6 col-md-6 col-12">
        <h3 class="display-4">This is REVUE</h3>
        <p>Revue is an user friendly blogging site, which is an online journal or
informational website displaying information in reverse chronological
order, with the latest posts appearing first, at the top. It is a platform
where user share their views on a subject or show their skills to other
audiences.Makes it easy to socialize.</p>
<p> It can be used for socializing and gaining knowledge at the same time. Admin makes a report of user’s details and make it easy for users to socialize. Here, users/managers have to login through a unique id to post/upload their blogs that is write-ups , quotes, poems,short stories, shayris etc. Users can also upload their any work of
photography,art,painting,designs etc. in image format.</p>
<p> Users can search their subject as per their interest as a category column
will be given and while posting/uploading anything on the site user has to
select the category they want to publish in.</p>
<p> For education purpose and entertainment both the site will also provide
users with links of top 10 best sellers in books section, and links of top 10
trending songs of the month. User can comment, react and even update their profile in this site but only
after login registration.</p>

      </div></div></section></body></html>
