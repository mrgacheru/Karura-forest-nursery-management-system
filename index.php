<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  background-image: url('wallpaperflare.com_wallpaper.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  animation: backgroundAnimation 20s infinite alternate;
  padding: 20px;
  font-family: Arial;
}

@keyframes backgroundAnimation {
  0% { background-image: url('wallpaperflare.com_wallpaper.jpg'); }
  33% { background-image: url('wallpaperflare.com_wallpaper (1).jpg'); }
  66% { background-image: url('wallpaperflare.com_wallpaper (4).jpg'); }
  100% { background-image: url('wallpaperflare.com_wallpaper (2).jpg'); }
}

/* Center website */
.main {
  max-width: 1200px; /* Wider main container */
  margin: auto;
  background-color: rgba(255, 255, 255, 0.8); /* Adds a semi-transparent background */
  padding: 20px;
  border-radius: 10px;
}

h1 {
  font-size: 50px;
  word-break: break-all;
  animation: fadeIn 2s ease-in-out;
  text-align: center;
  position: relative;
}

.buttons {
  position: absolute;
  top: 0;
  right: 0;
}

button {
  background-color: #4CAF50; /* Green */
  color: white;
  padding: 10px 20px;
  margin: 5px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  
}

button:hover {
  background-color: #45a049;
}

@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create columns that float next to each other */
.column {
  float: left;
  width: 25%; /* Four columns per row */
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

/* Responsive layout - makes a two-column layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the columns stack on top of each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}

/* Footer */
footer {
  text-align: center;
  padding: 10px;
  background-color: #333;
  color: white;
  margin-top: 20px;
}
</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">
  
  <h1>Karura Forest Nursery Management <br>System</h1>
  <hr>

  <h2>PORTFOLIO</h2>
  <div class="buttons">
    <button onclick="location.href='user/index.php'">Sign in as User</button>
    <button onclick="location.href='admin/index.php'">Sign in as Admin</button>
  </div>
  <p>More trees more life.</p>

  <!-- Portfolio Gallery Grid -->
  <div class="row">
    <div class="column">
      <div class="content">
        <img src="wallpaperflare.com_wallpaper (1).jpg" alt="Mountains" style="width:100%">
        <h3>My Work</h3>
        <p>Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="wallpaperflare.com_wallpaper (4).jpg" alt="Lights" style="width:100%">
        <h3>My Work</h3>
        <p>Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="wallpaperflare.com_wallpaper.jpg" alt="Nature" style="width:100%">
        <h3>My Work</h3>
        <p>Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="wallpaperflare.com_wallpaper (2).jpg" alt="Mountains" style="width:100%">
        <h3>My Work</h3>
        <p>Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="wallpaperflare.com_wallpaper (1).jpg" alt="Mountains" style="width:100%">
        <h3>My Work</h3>
        <p>Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="wallpaperflare.com_wallpaper (4).jpg" alt="Lights" style="width:100%">
        <h3>My Work</h3>
        <p>Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="wallpaperflare.com_wallpaper.jpg" alt="Nature" style="width:100%">
        <h3>My Work</h3>
        <p>Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="wallpaperflare.com_wallpaper (2).jpg" alt="Mountains" style="width:100%">
        <h3>My Work</h3>
        <p>Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
      </div>
    </div>
  <!-- END GRID -->
  </div>

  <<div class="slideshow-container">
    <div class="mySlides fade">
      <img src="wallpaperflare.com_wallpaper (4).jpg" alt="Bear" style="width:100%">
      <div class="text">Some Other Work</div>
      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>
  
    <div class="mySlides fade">
      <img src="wallpaperflare.com_wallpaper (1).jpg" alt="Mountains" style="width:100%">
      <div class="text">Mountain View</div>
      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>
  
    <div class="mySlides fade">
      <img src="wallpaperflare.com_wallpaper.jpg" alt="Nature" style="width:100%">
      <div class="text">Nature Scene</div>
      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div class="dot-container">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span> 
  </div>
  
  <script>
  let slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
  }
  </script>
  
  <style>
  .slideshow-container {
    position: relative;
    max-width: 100%;
    margin: auto;
    border-radius: 10px;
    overflow: hidden;
  }
  
  .mySlides {
    display: none;
    width: 100%;
  }
  
  .text {
    color: #000;
    font-size: 18px;
    padding: 8px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
    background-color: rgba(255, 255, 255, 0.7);
  }
  
  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    padding: 16px;
    color: white;
    font-weight: bold;
    border-radius: 3px;
    background-color: rgba(0, 0, 0, 0.5);
  }
  
  .prev:hover, .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }
  
  .dot-container {
    text-align: center;
    padding: 20px;
  }
  
  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }
  
  .active, .dot:hover {
    background-color: #717171;
  }
  </style>
</div>

<!-- Footer -->
<footer>
  <p>&copy; 2024 Karura Forest Nursery Management System. All rights reserved.</p>
</footer>

</body>
</html>
