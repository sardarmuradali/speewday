<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="icon" href="{{ asset('logo.jpg') }}">

<style>
body {
    margin:0;
    font-family:Arial;
    background:linear-gradient(135deg,#0b2a6f,#081f4d);
    color:white;
}

/* Navbar */
/* ===== GLOBAL NAVBAR (USE IN ALL PAGES) ===== */

.navbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:12px 40px;
    background:#05195E;
    box-shadow:0 2px 10px rgba(0,0,0,0.3);
}

.navbar img{
    height:60px;
}

.nav-links{
    display:flex;
    align-items:center;
    gap:25px;
}

.nav-links a{
    color:white;
    text-decoration:none;
    font-size:15px;
    font-weight:500;
    transition:0.3s;
}

.nav-links a:hover{
    color:yellow;
}

.navbar{
    position:sticky;
    top:0;
    z-index:1000;
}
.nav-links a.active{
    color:yellow;
    border-bottom:2px solid yellow;
}

/* Hero */
.hero {
    text-align:center;
    padding:100px 20px;
}

.hero h1 { font-size:45px; }

.hero span { color:yellow; }

.btn {
    padding:12px 25px;
    background:yellow;
    border:none;
    border-radius:25px;
    margin-top:15px;
    cursor:pointer;
}

/* Sections */
.section {
    padding:60px 20px;
    text-align:center;
}

/* Cards */
.cards {
    display:flex;
    justify-content:center;
    gap:20px;
    flex-wrap:wrap;
}

.card {
    background:rgba(255,255,255,0.1);
    padding:20px;
    border-radius:15px;
    width:250px;
    backdrop-filter:blur(10px);
}

.card h3 {
    color:yellow;
}

/* Footer */
.footer {
    text-align:center;
    padding:20px;
    background:#081f4d;
    margin-top:40px;
}
</style>
</head>

<body>

<!-- Navbar -->
<div class="navbar">
    <img src="{{ asset('logo.jpg') }}">

    <div class="nav-links">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/package') }}">Package</a>
        <a href="{{ url('/zone-price') }}">Zone Prices</a>
        <a href="{{ url('/contact') }}">Contact</a>
    </div>
</div>

<!-- Hero -->
<div class="hero">
    <h1>Fast & Reliable <span>Delivery Service</span></h1>
    <p>We provide professional riders for restaurants & businesses</p>
    <button class="btn">Get Started</button>
</div>

<!-- Features Section -->
<div class="section">
    <h2>Why Choose Us?</h2>

    <div class="cards">
        <div class="card">
            <h3>Fast Delivery</h3>
            <p>We ensure quick and reliable delivery service.</p>
        </div>

        <div class="card">
            <h3>Professional Riders</h3>
            <p>Trained riders for safe and secure delivery.</p>
        </div>

        <div class="card">
            <h3>Monthly Packages</h3>
            <p>Affordable monthly plans for restaurants.</p>
        </div>
    </div>
</div>

<!-- About Section -->
<div class="section">
    <h2>About Us</h2>
    <p>
        Speedway Delivery is a modern delivery solution providing riders to restaurants,
        cafes, and businesses for fast and reliable service across the city.
    </p>
</div>

<!-- CTA Section -->
<div class="section">
    <h2>Start Your Delivery Today</h2>
    <button class="btn">Contact Us Now</button>
</div>

<!-- Footer -->
<div class="footer">
    © 2026 Speedway Delivery | All Rights Reserved
</div>

</body>
</html>
