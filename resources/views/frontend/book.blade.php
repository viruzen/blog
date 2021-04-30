<!DOCTYPE html>
<html>
<head>
  <title>BOOKS</title>
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




.grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  justify-items: center;
  align-items: center;
  grid-gap: 30px;
}

.flip-card {
  background-color: transparent;
  width: 200px;
  height: 200px;
  perspective: 1000px;

}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: yellow;
  color: black;
  transform: rotateY(180deg);
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

<div class="py-5">
    <h1 class="text-center">BOOKS</h1>
  </div>


<section id="team">
  <div class="container">
    <div class="grid">
      <!-- #str heroes -->
      <!-- #abaddon -->

      <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
          <img src="https://obamabook.com/wp-content/uploads/2020/08/a-promised-land-barack-obama.png" alt="A Promised Land" style="width:200px;height:200px;">
      </div>
      <div class="flip-card-back">
        <h3>A Promised Land</h3>
        <p>By: Barac Obama</p>
        <a href="https://sites.google.com/a/newbestbookslala.web.app/perdinamuliksa/-pdf-download-a-promised-land-by-barack-obama">Read this Book</a>
      </div>
    </div>
  </div>

     <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
          <img src="https://www.studycrux.com/image/5e7bb2407325e949fbe5ecd9" alt=" Writers & Lovers" style="width:200px;height:200px;">
      </div>
      <div class="flip-card-back">
        <h3> Writers & Lovers</h3>
        <p></p>
        <a href="https://allbooksworld.com/writers-lovers-by-lily-king-epub-download/">Read this Book</a>
      </div>
    </div>
  </div>

     <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
          <img src="https://m.media-amazon.com/images/I/51K9QACsHrL.jpg" alt="uncanny valley (memoir)" style="width:200px;height:200px;">
      </div>
      <div class="flip-card-back">
        <h3> uncanny valley (memoir)</h3>
        <p></p>
        <a href="https://www.yumpu.com/en/document/view/63013270/pdf-epub-uncanny-valley-memoir-anna-wiener">Read this Book</a>
      </div>
    </div>
  </div>

        <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
          <img src="https://miro.medium.com/max/768/1*DMME-b1ywdcM5LniPS-C1A.jpeg" alt="Caste by Isabel Wilkerson<" style="width:200px;height:200px;">
      </div>
      <div class="flip-card-back">
        <h3>Caste</h3>
        <p> by:Isabel Wilkerson</p>
        <a href="https://sites.google.com/site/desarefrevergergegre/monikahogan116">Read this Book</a>
      </div>
    </div>
  </div>

        <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
          <img src="https://pbs.twimg.com/media/EiV57W1U8AEubyN.jpg" alt=" Homeland Elegies by Ayad Akhtar" style="width:200px;height:200px;">
      </div>
      <div class="flip-card-back">
        <h3> Homeland Elegies</h3>
        <p> by:Ayad Akhtar</p>
        <a href="https://allbooksworld.com/homeland-elegies-by-ayad-akhtar-epub-download/">Read this Book</a>
      </div>
    </div>
  </div>

      <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
          <img src="https://www.studycrux.com/image/5f84179809a0062f183c96a6" alt="The Lying Life of Adults" style="width:200px;height:200px;">
      </div>
      <div class="flip-card-back">
        <h3>The Lying Life of Adults</h3>
        <a href="https://www.yumpu.com/en/document/view/63909591/full-book-pdf-download-the-lying-life-of-adults-by-elena-ferrante">Read this Book</a>
      </div>
    </div>
  </div>

      <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
          <img src="https://i1.wp.com/pictures.abebooks.com/isbn/9780525658696.jpg" alt=" A Burning" style="width:200px;height:200px;">
      </div>
      <div class="flip-card-back">
        <h3>A Burning</h3>
        <a href="https://allbooksworld.com/a-burning-by-megha-majumdar-251/">Read this Book</a>
      </div>
    </div>
  </div>

     <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
          <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1594623934l/49779327._SX318_.jpg" alt="I Hold a Wolf by the Ears" style="width:200px;height:200px;">
      </div>
      <div class="flip-card-back">
        <h3>I Hold a Wolf by the Ears</h3>
        <a href="https://twitter.com/i/events/1290360020014702593">Read this Book</a>
      </div>
    </div>
  </div>

	<div class="flip-card">
<div class="flip-card-inner">
	<div class="flip-card-front">
			<img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fi.gr-assets.com%2Fimages%2FS%2Fcompressed.photo.goodreads.com%2Fbooks%2F1564199892l%2F45754981.jpg&imgrefurl=https%3A%2F%2Fwww.goodreads.com%2Fbook%2Fshow%2F45754981-the-glass-hotel&tbnid=cECZ-UuAiMEr-M&vet=12ahUKEwiFgMfH26juAhVygEsFHSXfDxsQMygAegUIARCfAQ..i&docid=8FETvmGPnCQfRM&w=1000&h=1498&q=The%20Glass%20Hotel&ved=2ahUKEwiFgMfH26juAhVygEsFHSXfDxsQMygAegUIARCfAQ" alt="The Glass Hotel" style="width:200px;height:200px;">
	</div>
	<div class="flip-card-back">
		<h3>The Glass Hotel</h3>
		<p>by:Emily John Mandel</p>
		<a href="https://www.goodreads.com/book/show/45754981-the-glass-hotel">Read this Book</a>
	</div>
</div>
</div>

      <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
          <img src="https://images-eu.ssl-images-amazon.com/images/I/31iZiPPvheL._SY445_QL70_ML2_.jpg" alt="Flake by Matthew Dooley" style="width:200px;height:200px;">
      </div>
      <div class="flip-card-back">
        <h3>Flake</h3>
        <p> by:Matthew Dooley</p>
        <a href="https://www.pinterest.ru/pin/682436149773888725/">Read this Book</a>
      </div>
    </div>
  </div>
</section>
<br>
	<footer>
	  <h2>REVUE</h2>
	  <p>Knowledge with Entertainment - REVUE</p>
	</footer>

     </div>
   </div>
 </section>

</body>
</html>
