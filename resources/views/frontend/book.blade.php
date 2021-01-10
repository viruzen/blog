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
  height: 2250px;
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


</style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="/profile">Profile</a>
  <a href="/blog">Home</a>
  <a href="/about">About</a>
  <a href="/category">Categories</a>
  <a href="/book">Books</a>
  <a href="/music">Music</a>
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
    <h1 class="text-center">BOOKS</h1>
  </div>
  <div class="container-fluid">
    <div class="row">
</div>
   <h3 style="color:blue"; font: "times new roman"; align="center" >Top 10 Books :</h3>

   <section class="my-5">
  <div class="py-5">
<ul class="thumbs">
    <li><a href="https://sites.google.com/a/newbestbookslala.web.app/perdinamuliksa/-pdf-download-a-promised-land-by-barack-obama"> <img src="https://obamabook.com/wp-content/uploads/2020/08/a-promised-land-barack-obama.png" width="150" height="150" alt="A Promised Land" ><span> A Promised Land </span></a></li>

    <li><a href="https://allbooksworld.com/writers-lovers-by-lily-king-epub-download/"> <img src="https://www.studycrux.com/image/5e7bb2407325e949fbe5ecd9" width="150" height="150" alt="writers lovers" ><span> Writers & Lovers</span></a></li>

    <li><a href="https://www.yumpu.com/en/document/view/63013270/pdf-epub-uncanny-valley-memoir-anna-wiener"> <img src="https://m.media-amazon.com/images/I/51K9QACsHrL.jpg" width="150" height="150" alt="uncanny valley (memoir)" ><span> uncanny valley (memoir)</span></a></li>

    <li><a href="https://sites.google.com/site/desarefrevergergegre/monikahogan116"> <img src="https://miro.medium.com/max/768/1*DMME-b1ywdcM5LniPS-C1A.jpeg" width="150" height="150" alt="Caste" ><span> Caste by Isabel Wilkerson</span></a></li>

    <li><a href="https://allbooksworld.com/monogamy-by-sue-miller-epub-download/"> <img src="https://pbs.twimg.com/media/Ec3QJc8UMAAxdCA.jpg" width="150" height="150" alt="Monogamy by Sue Miller" ><span> Monogamy by Sue Miller</span></a></li>

    <li><a href="https://allbooksworld.com/homeland-elegies-by-ayad-akhtar-epub-download/"> <img src="https://pbs.twimg.com/media/EiV57W1U8AEubyN.jpg" width="150" height="150" alt="Homeland Elegies by Ayad Akhtar" ><span> Homeland Elegies by Ayad Akhtar</span></a></li>

<li><a href="https://www.yumpu.com/en/document/view/63909591/full-book-pdf-download-the-lying-life-of-adults-by-elena-ferrante"> <img src="https://www.studycrux.com/image/5f84179809a0062f183c96a6" width="150" height="150" alt="The Lying Life of Adults" ><span> The Lying Life of Adults by Elena Ferrante</span></a></li>

<li><a href="https://allbooksworld.com/a-burning-by-megha-majumdar-251/"> <img src="https://i1.wp.com/pictures.abebooks.com/isbn/9780525658696.jpg" width="150" height="150" alt="A Burning" ><span> A Burning</span></a></li>

<li><a href="https://twitter.com/i/events/1290360020014702593"> <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1594623934l/49779327._SX318_.jpg" width="150" height="150" alt="I Hold a Wolf by the Ears" ><span> I Hold a Wolf by the Ears</span></a></li>

<li><a href="https://www.pinterest.ru/pin/682436149773888725/"> <img src="https://images-eu.ssl-images-amazon.com/images/I/31iZiPPvheL._SY445_QL70_ML2_.jpg" width="150" height="150" alt="Flake by Matthew Dooley" ><span> Flake by Matthew Dooley</span></a></li>


</ul>

</div>
</section>
</div>
</section>
</body>
</html>
