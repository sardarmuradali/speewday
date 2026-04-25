<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Zone Prices - Speedway</title>

<style>
*{margin:0;padding:0;box-sizing:border-box;}

body{
    font-family:Arial;
    background:#0b2a6f;
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

/* Hero */
.hero{text-align:center;padding:40px;}
.hero span{color:yellow;}

/* Notice */
.notice{
    background:white;
    color:black;
    padding:20px;
    margin:20px;
    border-radius:10px;
}

/* Search */
.search{text-align:center;padding:20px;}
.search input{
    padding:10px;
    width:250px;
    border-radius:5px;
    border:none;
}
.search button{
    padding:10px 20px;
    background:yellow;
    border:none;
    border-radius:5px;
    cursor:pointer;
}
#result{margin-top:20px;}

/* Zones */
.zones{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
    padding:20px;
}
.zone{
    background:white;
    color:black;
    padding:20px;
    border-radius:10px;
}
.zone h3{
    background:#0b2a6f;
    color:white;
    padding:10px;
    border-radius:5px;
}
.zone ul{margin-top:10px;padding-left:20px;}
.zone li{margin:5px 0;}

.footer{
    text-align:center;
    padding:20px;
    background:#081f4d;
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
/* Responsive */
@media(max-width:768px){
    .zones{grid-template-columns:1fr;}
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
    <h1>Zone Wise <span>Delivery Charges</span></h1>
</div>

<!-- Notice -->
<div class="notice">
    <h3>📢 Delivery Charges Adjustment Notice</h3>
    <p>Rs. 100 surcharge per order applied from April 4, 2026.</p>
</div>

<!-- Search -->
<div class="search">
    <h2>Find Delivery Charges</h2>
    <input type="text" id="areaInput" placeholder="Enter area (e.g. DHA, Gulshan)">
    <button onclick="findZone()">Search</button>
    <div id="result"></div>
</div>

<!-- Zones -->
<div class="zones">

<!-- Zone A -->
<div class="zone">
<h3>Zone A - PKR 260</h3>
<ul>
<li>DHA</li><li>Clifton</li><li>Frere Town</li><li>Bath Island</li><li>Civil Lines</li><li>Cantt</li>
</ul>
</div>

<!-- Zone B -->
<div class="zone">
<h3>Zone B - PKR 300</h3>
<ul>
<li>Creek Vista</li><li>Emaar Towers</li><li>Jinnah Hospital</li><li>Lalazar</li><li>Defense View</li>
<li>Kashif Center</li><li>Hotel Mehran</li><li>Shireen Jinnah Colony</li>
</ul>
</div>

<!-- Zone C -->
<div class="zone">
<h3>Zone C - PKR 360</h3>
<ul>
<li>I.I. Chundrigar Road</li><li>Lucky Star</li><li>Mehmoodabad</li><li>Saddar</li>
</ul>
</div>

<!-- Zone D -->
<div class="zone">
<h3>Zone D - PKR 460</h3>
<ul>
<li>Sindhi Muslim Society</li><li>PECHS</li><li>Kashmir Road</li><li>Jamshed Road</li>
<li>Garden East</li><li>Bhadrabad</li><li>Sharfabad</li><li>M Ali Society</li>
<li>KDA Scheme 1</li><li>Shahrah-e-Faisal</li><li>Kharadar</li><li>West Wharf</li><li>Keamari</li>
</ul>
</div>

<!-- Zone E -->
<div class="zone">
<h3>Zone E - PKR 560</h3>
<ul>
<li>Korangi</li><li>Karsaz</li><li>Agha Khan Hospital</li><li>Liaquat National Hospital</li>
<li>Dalmia</li><li>Askari 4</li><li>Gulshan e Jamal</li><li>Garden West</li><li>PIB Colony</li>
</ul>
</div>

<!-- Zone F -->
<div class="zone">
<h3>Zone F - PKR 660</h3>
<ul>
<li>Gulshan e Iqbal</li><li>Gulistan e Johar</li>
</ul>
</div>

<!-- Zone G -->
<div class="zone">
<h3>Zone G - PKR 760</h3>
<ul>
<li>Nazimabad</li><li>North Nazimabad</li><li>Shah Faisal</li><li>FB Area</li><li>Liaquatabad</li>
</ul>
</div>

<!-- Zone H -->
<div class="zone">
<h3>Zone H - PKR 860</h3>
<ul>
<li>Scheme 33</li><li>Landhi</li><li>Malir</li><li>Safoora</li>
</ul>
</div>

<!-- Zone I (FIXED ✅) -->
<div class="zone">
<h3>Zone I - PKR 960</h3>
<ul>
<li>Site Area</li>
<li>Naya Nazimabad</li>
<li>North Karachi</li>
</ul>
</div>

</div>

<!-- Footer -->
<div class="footer">
© 2026 Speedway Delivery
</div>

<!-- JS -->
<script>
const zones = {

// A
"dha":{zone:"A",price:260},
"clifton":{zone:"A",price:260},
"cantt":{zone:"A",price:260},

// B
"creek vista":{zone:"B",price:300},
"emaar":{zone:"B",price:300},

// C
"saddar":{zone:"C",price:360},
"mehmoodabad":{zone:"C",price:360},

// D
"pechs":{zone:"D",price:460},
"kharadar":{zone:"D",price:460},
"keamari":{zone:"D",price:460},

// E
"korangi":{zone:"E",price:560},
"karsaz":{zone:"E",price:560},

// F
"gulshan":{zone:"F",price:660},
"johar":{zone:"F",price:660},

// G
"nazimabad":{zone:"G",price:760},
"fb area":{zone:"G",price:760},

// H
"malir":{zone:"H",price:860},
"landhi":{zone:"H",price:860},

// I (IMPORTANT)
"site area":{zone:"I",price:960},
"naya nazimabad":{zone:"I",price:960},
"north karachi":{zone:"I",price:960}
};

function findZone(){
let input=document.getElementById("areaInput").value.toLowerCase();
let result=document.getElementById("result");

for(let key in zones){
if(input.includes(key)){
let d=zones[key];
result.innerHTML=`
<div style="background:white;color:black;padding:15px;border-radius:10px;display:inline-block;">
Zone: ${d.zone} <br>
Price: PKR ${d.price} <br>
<small>+ Rs.100 surcharge</small>
</div>`;
return;
}
}
result.innerHTML="<p style='color:yellow;'>Area not found</p>";
}
</script>

</body>
</html>
