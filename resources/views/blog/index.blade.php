
<!DOCTYPE html>
<html>
<head>
  <title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- <link href="https://fonts.googeapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet"> -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>

<body>

<section>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#blog" data-slide-to="0" class="active"></li>
    <li data-target="#book" data-slide-to="1"></li>
    <li data-target="#music" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slide.jpg" alt="blog posts" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Blogs.... :)</h3>
        <p>Just express yourself,Because..</p>
        <p>TO BLOG= SHARE, COMMUNICATE & INSPIRE</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slide2.jpg" alt="books lover" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Books</h3>
        <p>Books are a uniquely portable magic!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slide 3.jpg" alt="i love music" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Music is love</h3>
        <p>I love listening songs...!</p>
        <p>Music beats are like my heart beats...</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</section>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container-fluid">
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

 <a href="profile.php">Profile</a>

 <a href="home.php">Home</a>

  <a href="about.php">About</a>
  <a href="categories.php">Categories</a>
  <a href="book.php">Books</a>
  <a href="music.php">Music</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ REVUE</button>
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


<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">This Is REVUE</h1>
        <p class="lead text-muted">A single platform for large varieties of entertainment,
            under one roof, is a flexible platform & may change or add
            number of other sections as per the change in the aptitude &
            interest with time of the users to remain relevant for every
            generation.</p>
                    <p>
          <a href="moredetails.php" >Click For More Details</a>

        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($blogs as $blog)
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c"/>
              <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            <div class="card-body">
              <p class="card-text">{{ substr($blog['body'], 0, 80) }}</p>
              <div class="tags">
                @foreach($blog['tags'] as $tag)
                      <span class="badge badge-info">{{ $tag['name'] }}</span>
                      @endforeach
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Profile</button>
                </div>
                <small class="text-muted">- by <b>{{ $blog['user']['name'] }}</b></small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      {{ $blogs->links() }}
    </div>
  </div>

</main>

 <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
