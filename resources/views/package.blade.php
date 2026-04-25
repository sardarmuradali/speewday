<!DOCTYPE html>
<html>
<head>
<title>Package</title>
<link rel="icon" href="{{ asset('logo.jpg') }}">

<style>
body { margin:0; font-family:Arial; background:#0b2a6f; color:white; }

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

.card {
    text-align:center;
    padding:80px 20px;
}

.box {
    background:rgba(255,255,255,0.1);
    padding:30px;
    border-radius:15px;
    max-width:350px;
    margin:auto;
}

.price { color:yellow; font-size:35px; }

.navbar{
    position:sticky;
    top:0;
    z-index:1000;
}
.nav-links a.active{
    color:yellow;
    border-bottom:2px solid yellow;
}
</style>
</head>

<body>

<div class="navbar">
    <img src="{{ asset('logo.jpg') }}">

    <div class="nav-links">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/package') }}">Package</a>
        <a href="{{ url('/zone-price') }}">Zone Prices</a>
        <a href="{{ url('/contact') }}">Contact</a>
    </div>
</div>

<div class="card">
    <h2>Monthly Package</h2>

    <div class="box">
        <h3>Standard Plan</h3>
        <div class="price">PKR 3100</div>
        <p>✔ Rider Service</p>
        <p>✔ Monthly Invoice</p>
    </div>
</div>

</body>
</html>
