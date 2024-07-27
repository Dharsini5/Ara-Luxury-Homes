<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="Styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <a href="https://api.whatsapp.com/send?phone=+91 7200040053&amp;text=Hi, " target="_blank" class="whatsapp">
        <img src="whatsapp.png" height="100%" width="100%">
    </a>
    <a href="https://api.whatsapp.com/send?phone=+91 7200040053&amp;text=Hello, " target="_blank" class="contact">
        <img src="phone-icon.png" height="100%" width="100%">
    </a>
    <header>
        <div class="vt" id="gallery">
            <div class="logo">
                <a href="index.php">
                    <img src="9806.png_860.png" alt="logo" height="100%" width="100%">
                </a>
            </div>
            <div class="nav">
                <ul class="list">
                    <li><a href="index.php">Home</a></li>
                    <li> <a href="about.php">About Us</a></li>        
                    <li><a href="Gallery.php">Gallery</a></li>
                    <li><a href="testimonial.php">Testimonial</a></li>
                    <li><a href="enquiry.php">Enquiry</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="enquiry1.jpg" class="d-block w-100" alt="about1">
            <div class="carousel-caption d-none d-md-block">
                <h3>CONTACT US</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="enquiry2.jpg" class="d-block w-100" alt="about2">
            <div class="carousel-caption d-none d-md-block">
                <h3>CONTACT US</h3>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden"></span>
    </button>
</div>
<div class="row">
    <div class="col-6">
        <img src="enquiry3.jpg">
    </div>
    <div class="col-6">
    <form action="enquiry_process.php" method="post">
    <div>
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3">
        <label for="comments" class="form-label">Comments</label>
        <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>
<br><br><br><br>
<footer>
<div class="row" id="row">
    <div class="col-4" id="ab1">
        <img src="9806.png_860.png" alt="logo"  height="100%" width="100%" class="logo"><br><br><br>
        <p>Ara luxury homes is your go-to for premium external elevation and interior solutions. With skilled craftsmanship and client-centric values, we transform visions into reality.</p>
    </div>
    <div class="col-4" id="ab1">
        <h3>Contact</h3>
        <ul>
            <h3>Phone</h3>
            <li>1234567890</li><br>
            <h3>Email Address</h3>
            <li>araluxury@gmail.com</li><br>
            <h3>Location</h3>
            <li>6/2A, Krishna Garden Extn, Singanallur Bus Stand Backside, <br>Uppilipalayam (Po.), Coimbatore-641 015.</li>
        </ul>
    </div>
    <div class="col-4">
    <h3>Map</h3>
    <img src="map.png">
    </div>
</div>
</footer>