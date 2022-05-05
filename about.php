<!doctype html>
<html>
<head>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }
    </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link href="/dist/output.css" rel="stylesheet"> -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">

</head>
<body>
    <!-- navbar -->
<nav class="w-screen h-auto fixed backdrop-blur-md bg-black/80 flex items-center justify-between px-2 py-2  md:px-16 md:py-3 z-20">
<div class="flex items-center">
    <a href="index.php" class="flex items-center">
    <img src="./assets/logo.png" alt="logo" class="h-10 md:h-20">
    <p class=" md:text-2xl pl-2 text-white leading-4">Shubham<br>Nagari</p>
    </a>
</div>
<div>
    <ul class="hidden md:flex space-x-14 font-medium text-white">
        <li><a href="./index.php">Home</a></li>
        <li><a href="./projects.php">Projects</a></li>
        <li><a href="./about.php">About</a></li>
        <li><a href="./contact.php">Contact</a></li>
    </ul>
    <div class="md:hidden">
        <button onclick=openmenu()>
           <span class="material-symbols-outlined text-white md:hidden">
        menu
        </span>
    </button>
    </div>
</div>
</nav>
<!-- navbar -->
<!-- mobile navbar -->
<div class="fixed md:hidden bg-black/80 backdrop-blur-md z-10 text-white w-full text-center">
 <div id="menu"  class="hidden">   
    <button onclick=closemenu() class="pt-20">
        <span class="material-symbols-outlined text-white">
            close
            </span>
    </button>
<ul class="pt-5 py-5 space-y-6">
    <li><a href="./index.php" onclick=closemenu()>Home</a></li>
    <li><a href="./projects.php"  onclick=closemenu()>Projects</a></li>
    <li><a href="./about.php"  onclick=closemenu()>About</a></li>
    <li><a href="./contact.php"  onclick=closemenu()>Contact</a></li>
</ul>
<div onclick=closemenu() class="z-0 absolute w-screen h-screen bg-black/50"></div>
</div>
</div>
<!-- mobile navbar  -->
<!-- about us -->
<div class="bg-indigo-500 h-auto pt-28">
<div class="md:flex items-center justify-center px-5 md:px-20 ">
<div class="md:w-3/5 bg-white/50 p-5 rounded md:bg-white/0">
<h1 class="underline text-2xl md:text-4xl md:text-white underline-offset-8 uppercase decoration-4 decoration-red-500">about us</h1>
<p class="text-sm md:text-base mt-5 md:text-white "><img src="./assets/logo.png" class="md:hidden pb-5"/> SHUBHAM INFRASTRUCTURE (formerly known as SHUBHAM
    BUILDERS AND DEVELOPERS) is a leading real estate Group of
    companies providing comprehensive residential and commercial solutions
    across various categories. Established in 2010, we have successfully
    developed Residential and commercial projects in Neral and Phalthan
    and have given possession within schedule time period, ,while over 3 lakhs
    sqft are under development and 20 lakhs sqft work under planning across
    in Mumbai and Thane district . Known as Trustworthy group , quality
    structure, innovative design and concepts, Welcoming customers as
    working partners We believe in delivering customers Dream homes We
    have happy families :)</p>
</div>
<div>
    <img src="./assets/bg1.png" alt="" class="h-96  opacity-95 hidden md:block">
</div>
</div>

<div class="md:flex px-5 md:px-20 space-y-5 md:space-y-0 md:space-x-5 py-5">
<div class="bg-white/50 p-5 px-5 md:px-10 rounded">
    <h1 class="underline text-2xl md:text-4xl  underline-offset-8 uppercase decoration-4 decoration-cyan-500">VISION</h1>
    <p class="mt-5 text-sm md:text-base">Build customers dream.....by delivering dream home with Quality product, timely
        completion and budgeted homes.</p>
</div>
<div class="bg-white/50 p-5 px-5 md:px-10 rounded">
    <h1 class="underline text-2xl md:text-4xl  underline-offset-8 uppercase decoration-4 decoration-green-500">MISSION</h1>
    <p class="mt-5 text-sm md:text-base">In rank to be in top 5 builders and developers in india and in top 25 in world in coming
        Decade.</p>
</div>
</div>
<div class=" px-5 md:px-20 pb-10">
<p class="text-white">
    SHUBHAM INFRASTRUCTURE IS BEST PLATFORM FOR MONEY
INVESTMENT IN REAL ESTATE .....<br>
WE Offer for Investors – BEST DEAL & RATE APPRICIATION SCHEME
BUSINESS PROPOSAL<br>
MONTHLY INCOME SCHEME

LAND PROPOSAL- IF you have clear title land and want to sale kindly
contacts us.
</p>
</div>

</div> 
<!-- about us -->
<!--footer-->
<div class="bg-stone-900 px-2 py-5 md:px-20 md:py-10 text-white">
    <div class="flex items-center ">
<img src="./assets/logo.png" alt="logo" class="h-10 md:h-20">
<p class="text-sm md:text-2xl">Shubham<br>
    Infrastructure</p>
</div>
<p class="mt-2 text-sm md:text-2xl text-gray-400">Let&#39;s find you together the place you deserve REPLACE &quot;Get the best flat at the best price! &quot;</p>
<div class="md:flex mt-5 justify-between">
<div class="space-y-2 text-sm md:text-base  md:w-1/2 md:space-y-10">
<p>+91 8424-8453-44</p>
<p>Address- Shubham Nagari, Off Mumbai- Goa Highway, Opp. Gangai Hotel, Khairewadi, Oros,
    Taluka Kudal, District- Sindhdurg.</p>
    <a href = "mailto:contact@shubhamnagari.com">Email - contact@shubhamnagari.in</a><br>
    <div class="flex space-x-8 ">
    <a href="https://www.facebook.com/Shubham-Nagari-101997754972702">FACEBOOK</a>
    <a href="https://www.instagram.com/chandsiduiqi2020/?igshid=tml6e6gxx0dw">INSTAGRAM</a>
    <a href="https://twitter.com/nagari_shubham">TWITTER</a></div>
</div>
<div class="px-5 mt-10 md:mt-0">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3832.753996941136!2d73.70685964822769!3d16.13002174232708!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1fd6f816b4adf9f1!2s7J8M4PH4%2BVGF!5e0!3m2!1sen!2sin!4v1651753490059!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>                                                                                                                                                                                                                                                                  
</div>
</div>
    <!--footer-->



    <script>
        function openmenu(){
    document.getElementById('menu').classList.remove('hidden')
        }
        function closemenu(){
            document.getElementById('menu').classList.add('hidden')
        }
    </script>
</body>
</html>