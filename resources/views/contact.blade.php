<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
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

.section {
    text-align:center;
    padding:100px 20px;
}

.btn {
    display:inline-block;
    padding:10px 20px;
    background:yellow;
    color:black;
    border-radius:20px;
    text-decoration:none;
    margin:10px;
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

<div class="section">
    <h2>Contact Us</h2>

    <p>Imran Shafi: 0336-8239626</p>
    <a href="tel:03368239626" class="btn">Call Now</a>

    <p>Usama: 0313-2792945</p>
    <a href="tel:03132792945" class="btn">Call Now</a>
</div>

</body>
</html>
