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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          sans: ['Inter', 'sans-serif'],
        },
      }
    }
  }
</script>

  <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">

</head>
<body>
<nav class="w-screen h-auto fixed backdrop-blur-md bg-black/80 flex items-center justify-between px-5 py-2  md:px-16 md:py-3 z-20">
<div class="flex items-center">
    <img src="./assets/logo.png" alt="logo" class="h-10 md:h-20">
    <p class=" md:text-2xl pl-2 text-white leading-4">Shubham<br>Nagari</p>
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
<!-- header -->

<header class="relative mb-20 md:hidden"> 
    <img src="./assets/bg.jpg" alt="" class="h-96 md:h-auto object-cover">
    <div class="absolute top-[100px] md:top-[200px] px-5 md:px-10 lg:px-20 md:flex">
        <div>
    <p class="text-4xl md:text-7xl text-white uppercase">Fulfilling <span class="underline underline-offset-2  md:underline-offset-8 decoration-4 decoration-orange-500"><br>dream</span> of a <span class="underline underline-offset-2  md:underline-offset-8 decoration-4  decoration-sky-500"><br>living</span> in the <span class="underline underline-offset-2  md:underline-offset-8 decoration-4 decoration-green-500"><br>nature</span> own land...</p>
    <a href="#" class="text-xl text-white hover:border-b-4 border-red-500 -mt-3">Contact</a></div>
    <img src="./assets/card.jpg" alt="" class="rounded-xl h-80 mx-auto md:h-auto w-auto">
    </div>
    </header>




<div id="carouselExampleIndicators" class="carousel slide relative hidden md:block" data-bs-ride="carousel">
    <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
      <button
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide-to="0"
        class="active"
        aria-current="true"
        aria-label="Slide 1"
      ></button>
      <button
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide-to="1"
        aria-label="Slide 2"
      ></button>
      <button
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide-to="2"
        aria-label="Slide 3"
      ></button>
    </div>
    <div class="carousel-inner relative w-full overflow-hidden h-[500px]">
      <div class="carousel-item active float-left w-full">
        <img
          src="./assets/building3.jpg"
          class="block w-full object-cover"
          alt="Wild Landscape"
        />
      </div>
      <div class="carousel-item float-left w-full">
        <img
          src="./assets/jan-canty-KcQuXaHCSPE-unsplash (1).jpg"
          class="block w-full"
          alt="Camera"
        />
      </div>
      <div class="carousel-item float-left w-full">
        <img
          src="./assets/robert-collins-tvc5imO5pXk-unsplash (1).jpg"
          class="block w-full"
          alt="Exotic Fruits"
        />
      </div>
    </div>
    <button
      class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev"
    >
      <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
      class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next"
    >
      <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- header -->
<!-- about -->
<div class="mt-80 md:mt-0 md:pt-20">
<h1 class="text-2xl md:text-5xl text-center p-2">Start living your best life in Kokan&#39;s NATURE.
    <p class=" text-sm md:text-xl text-center">Experience absolute peace and tranquility at Shubham Nagari.</p>

<div class="pt-10 md:flex md:px-10 lg:px-20 md:pt-20">
<div class="px-2 text-left md:w-4/5 md:px-3 pb-5">
<h1 class="underline text-2xl  md:text-4xl underline-offset-8 decoration-4underline-offset-8 decoration-4 decoration-orange-500">ABOUT</h1>
<p class="text-sm md:text-xl pt-5">&quot;Shubham Nagari&quot; is one of the <span class="font-semibold">best township project by ???Shubham Infrastructure???,</span> a leading
    Real Estate company. Located at Oros- Khariewadi, Kudal, Sindhudurg. Oros is a town and district headquarters of
    the Sindhudurg District. Sindhudurg is the best destination for holidays in the summer &amp; rainy
    seasons.</p>
</div>
<div>
<img src="./assets/interior.jpg" alt="" class="rounded-md">
</div>
</div>
</div>
<!-- about -->
<!-- mission and vision -->
<div class="md:flex px-5 pt-10 md:pt-20 justify-center md:divide-x-2 divide-gray-400 md:px-10 lg:px-20">
<div class="md:w-1/2">
<h1 class="underline text-2xl md:text-4xl underline-offset-8 decoration-4underline-offset-8 decoration-4 decoration-red-500">VISION</h1>
<p class="pt-5 text-sm md:text-xl">To set new standards of excellence in the service of providing a top-quality living. To maintain
    leadership through innovation in the field of design, technology, and quality.</p>
</div>
<div class="md:w-1/2 md:pl-10">
<h1 class="underline text-2xl md:text-4xl underline-offset-8 decoration-4underline-offset-8 decoration-4 decoration-indigo-500">MISSION</h1>
<ul class="pt-5 text-sm md:text-xl">
    <li><span class="material-symbols-outlined">
        bubble_chart
        </span>Total customer satisfaction.</li>
    <li><span class="material-symbols-outlined">
        bubble_chart
        </span>Fiber manual recordTrust and reliability.</li>
    <li><span class="material-symbols-outlined">
        bubble_chart
        </span>Respect for the environment.</li>
</ul>
</div>
</div>
<!-- mission and vision -->
<!-- quality -->
<div class="pt-10 px-5 md:pt-20 md:px-10 lg:px-20">
<h1  class="underline text-2xl md:text-4xl underline-offset-8 decoration-4underline-offset-8 decoration-4 decoration-green-500">QUALITY ASSURANCE</h1>
<p class="pt-5 text-sm md:text-xl"> Reputation and trust are the building blocks of long term success in the construction industry.
    Assuring our customers &#39;good quality&#39; is, not just a business policy, but a business philosophy,
    with us at Shubham Nagari. The only laboratory certified concrete and best quality construction
    material are used. Qualified engineers and architects, trained site personnel, strict adherence
    to schedules, and meticulous paper-work are the hallmarks of all our projects. </p>
</div>
<!-- quality -->
<!-- locations -->
<div class="pt-10 px-5 md:px-10 lg:px-20 md:mt-20">
    <h1 class="underline text-2xl md:text-4xl underline-offset-8 decoration-4underline-offset-8 decoration-4 decoration-blue-500">LOCATIONS</h1>
    <p class="pt-5 text-sm md:text-xl">Shubham Nagari is located at Oros on Mumbai - Goa Highway.</p>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mt-5 items-center justify-center px-10">
    <div>
        <img src="./assets/malvan-beach-in-sindhudurg Cropped.jpg" alt="" class=" h-60 rounded-xl md:grayscale hover:grayscale-0 transition duration-300">
        <p>Malvan Beach/Fort 35 KM</p>
    </div>
    
    <div class="">
        <img src="./assets/trakarli.jpg" alt="" class=" h-60 rounded-xl md:grayscale hover:grayscale-0 transition duration-300">
        <p>Tarkarli Beach 40 KM</p>
    </div>
    
    <div>
        <img src="./assets/bhogve.jpg" alt="" class=" h-60 rounded-xl md:grayscale hover:grayscale-0 transition duration-300">
        <p>Bhogve Beach Niwati Fort 41 KM</p>
    </div>
    <div>
        <img src="./assets/vengurla.jpg" alt="" class=" h-60 rounded-xl md:grayscale hover:grayscale-0 transition duration-300">
        <p>Vengurla Beach 41 KM</p>
    </div>
    
    <div>
        <img src="./assets/sindhudurg Cropped.jpg" alt="" class=" h-60 rounded-xl md:grayscale hover:grayscale-0 transition duration-300">
        <p>Sindhudurg Station 2 KM</p>
    </div>
    
    <div class="">
        <img src="./assets/chipi ap.jpg" alt="" class=" h-60 rounded-xl md:grayscale hover:grayscale-0 transition duration-300">
        <p>Chipi Airport 32 KM</p>
    </div>
    
    <div>
        <img src="./assets/mopa.jpg" alt="" class=" h-60 rounded-xl md:grayscale hover:grayscale-0 transition duration-300">
        <p>Mopa Intl. Airport 68 KM</p>
    </div>
    </div>

</div>
<!-- locations -->
<!-- features -->
<div class="pt-10 px-5 md:px-10 lg:px-20 md:pt-20">
<h1 class="underline text-2xl md:text-4xl underline-offset-8 decoration-4underline-offset-8 decoration-4 decoration-purple-500">FEATURES</h1>
<p class="text-sm md:text-xl pt-5">What would you call a ???Better Life???? A life in which you are well-connected to your family and
    your community.<br> When you are connected to all the places you care about and all the
    destinations &amp; amenities that are important to you.</p>
    <h1 class="text-xl md:text-2xl underline pt-5">SPECIAL FEATURES</h1>
    <div class="md:flex mt-5 items-center justify-between">
        <div class="md:flex md:space-x-5 md:w-1/2 ">
            <div>
                <ul class="uppercase space-y-2 md:space-y-10 text-sm md:font-semibold">
                    <li class="flex items-center"><span class="material-symbols-outlined bg-red-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                        local_hospital
                        </span>civil hospita(2km)</li>
                    <li class="flex items-center"><span class="material-symbols-outlined bg-blue-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                        water
                        </span>sindhudurga lake(2km)</li>
                    <li class="flex items-center"><span class="material-symbols-outlined bg-slate-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                        castle
                        </span>sindhudurga fort(30km)</li>
                    <li class="flex items-center"><span class="material-symbols-outlined bg-orange-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                        temple_hindu
                        </span>ravalnath template(1km)</li>
                </ul>
            </div>

            <div>
                <ul class="uppercase mt-2 md:mt-0 space-y-2 md:space-y-10 text-sm md:font-semibold">
                    <li class="flex items-center"><span class="material-symbols-outlined bg-green-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                        school
                        </span>school & college zone(done bosco high school 1km)</li>
                    <li class="flex items-center"><span class="material-symbols-outlined bg-red-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                        train
                        </span>sindhudurga station(2km)</li>
                    <li class="flex items-center"><span class="material-symbols-outlined bg-blue-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                        surfing
                        </span>tarkarli/devbaug beach(32km)</li>
                    <li class="flex items-center"><span class="material-symbols-outlined bg-red-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                        assured_workload
                        </span>goverment office area(1.5km)</li>
                </ul>
            </div>
        </div>

        <div>
            <img src="./assets/map.png" alt="">
        </div>
    </div>
</div>
<!-- features -->

<!-- buildings -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-5 px-5 md:px-10 py-10">
    <img src="./assets/volks_Page_02.jpg" alt="" class="md:hover:scale-125 transition duration-300 object-cover">
    <img src="./assets/volks_Page_08.jpg" alt="" class="md:hover:scale-125 transition duration-300 object-cover">
    <img src="./assets/volks_Page_11.jpg" alt="" class="md:hover:scale-125 transition duration-300 object-cover">
</div>
<!-- buildings -->
<!-- amenities -->
<div class="px-5 md:px-10 lg:px-20 py-10">
<h1 class="underline text-2xl md:text-4xl underline-offset-8 decoration-4underline-offset-8 decoration-4 decoration-indigo-500">AMENITIES</h1>
<div class="bg-gray-100 shadow-lg md:shadow-none rounded-md md:bg-opacity-0 ">
<div class="md:flex  rounded-md md:bg-stone-100 justify-between p-1 md:p-5 md:shadow-lg mt-5">
<div class="w-3/5">
    <img src="./assets/My project (1).png" alt="" class="hidden md:flex">
</div>
<div>
    <ul class="text-sm md:text-base">
        <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
            done
            </span>G+3 RCC Frame Structure</li>

            <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
                done
                </span>External Brick / Block Work 150MM in Thikness</li>
                <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
                    done
                    </span>internal Brick / Block Work 150MM in Thikness</li>
                    <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
                        done
                        </span>External plaster double coat sand faced</li>
                        <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
                            done
                            </span>internal gypsum plaster</li>
                            <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
                                done
                                </span>porcelain tiles(ceramic) of 2x2 in all rooms & kitchen</li>
                                <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
                                    done
                                    </span>ceramic tiles for wall dado work of wc bath,& kitchen platform up to loft level</li>
                                    <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                        </span>black garnite kitchen platform with stainless steel sink</li>
    </ul>
</div>
</div>

<div class="md:flex  rounded-md md:bg-stone-100 justify-between p-1 md:p-5 md:shadow-lg md:mt-5">
    <div>
        <ul class="text-sm md:text-base">
            <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
                done
                </span>sandalwood door frame for all room door</li>
    
                <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
                    done
                    </span>flush door 35MM thickness with oil paint on both sides for bedrooms</li>
                    <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
                        done
                        </span>bakelite door for wc & bathroom</li>
                        <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
                            done
                            </span>marble window frame for all window of wc & bathroom doors</li>
                            <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
                                done
                                </span>concealed electrical wiring with modular switches</li>
                                <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
                                    done
                                    </span>heavy duty powder coated aluminum section window frame</li>
                                    <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                        </span>CPVC concealed plumbing with seiko fitting</li>
                                        <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
                                            done
                                            </span>OBD paint for all internal walls</li>
        </ul>
    </div>
    <div class="w-3/5">
        <img src="./assets/My project (2).png" alt="" class="hidden md:flex">
    </div>
    </div>

    <div class="md:flex  rounded-md md:bg-stone-100 justify-between p-1 md:p-5 md:shadow-lg md:mt-5">
        <div class="w-3/5">
            <img src="./assets/3 Amenities Garden.jpg" alt="" class="hidden md:flex rounded-md object-cover h-60 w-full">
        </div>
        <div>
            <ul class="text-sm md:text-base">
                <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
                    done
                    </span>100% acrylic paint for all external walls</li>
        
                    <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
                        done
                        </span>green matble stone in staircase trade & riser</li>
                        <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
                            done
                            </span>grand entrance portal</li>
                            <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
                                done
                                </span>entrance lobby</li>
                                <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
                                    done
                                    </span>internal tar road with solar street lights</li>
                                    <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                        </span>rain-water harvesting</li>
                                        <li class="flex items-center capitalize"><span class="material-symbols-outlined text-3xl text-green-500">
                                            done
                                            </span>graden</li>
            </ul>
        </div>
        </div>

    </div>
</div>
<!-- amenities -->


<!-- highlights -->
<div class="px-5 mt-10 md:px-10 lg:px-20 pb-10">
<h1 class="underline text-2xl md:text-4xl underline-offset-8 decoration-4underline-offset-8 decoration-4 decoration-yellow-500">HIGHLIGHTS</h1>
<ul class="mt-5">
    <li class="text-sm md:text-xl font-semibold">1) National highway Mumbai- goa touch property.
        <p class="font-thin pt-1">- Buy a home with breathtaking views, refreshing air, calm and gated colony in the beauty of
            kokan&#39;s with superior connectivity &amp; ZERO Compromise!</p>
    </li>
    
  <li class="text-sm md:text-xl font-semibold mt-3">
    2) All modern amenities available.
        <p class="text-base font-thin pt-1">- All amenities to live a luxurious life with peace full ambience, refreshing air in the beauty of
            kokan.</p>
    </li>
    <li class="text-sm md:text-xl font-semibold mt-3">
        3) Garden flats, terrace flats available.
        <p class=" font-thin pt-1">- Shubham nagari offers you a wonderful garden flats, terrace flats to experience life in aboslute
            peace and tranquility.</p>
    </li>
    <li class="text-sm md:text-xl font-semibold mt-3">
        4) 24 hours availability of water and electricity.
        <p class="font-thin pt-1">- Shubham nagari is surrounded by nature, positive atmosphere that adds to our health &amp; well-
            being with all amenities. 24x7 Running water, Solar lights, Attractive entrance gate, garden,
            Jogging track, Temple, Rainwater harvesting,Internal tar roads with superior connectivity</p>
    </li>
    <li class="text-sm md:text-xl font-semibold mt-3">
        5) In oros 1st project which has entrance lobby space.
        <p class=" font-thin pt-1">- The lobby is the first impression of the building, it&#39;s perceived to reflect the personality of its
            owners and residents.</p>
    </li>
    <li class="text-sm md:text-xl font-semibold mt-3">
        6) Childern garden space.
        <p class=" font-thin pt-1">- Living in a good social environment increases the probability that a child will develop positive
            social relationship. Kids and youngsters had enough space to move around freely and play
            carefree.</p>
    </li>
    <li class="text-sm md:text-xl font-semibold mt-3">
        7) All market place, banks, ATM, hospitals, schools, colleges nearby.
        <p class=" font-thin pt-1">- Shubham Nagari is situated at a very near to banks, schools, hospitals, market place,
            restaurants, ATMs, etc.</p>
    </li>
    <li class="text-sm md:text-xl font-semibold mt-3">
        8) Sindhudurg railway station 1 KM from the project site.
        <p class=" font-thin pt-1">- Ready to flats for sale in Oras, Kokan which offers superior connectivity &amp; ZERO Compromise.</p>
    </li>
</ul>
</div>
<!-- highlights -->

<!-- rooms -->

<div class="px-5 pb-10 md:px-10 lg:px-20 md:mb-20">
    <h1 class="underline text-2xl md:text-4xl underline-offset-8 decoration-4underline-offset-8 decoration-4 decoration-cyan-500">OUR PROJECTS</h1>
    <div class="mt-5 hidden md:block">
    <iframe width="900" height="400" src="https://www.youtube.com/embed/3KpluMUgQfE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="mt-5 md:hidden">
    <iframe width="300" height="150" src="https://www.youtube.com/embed/3KpluMUgQfE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<p class="mt-3 text-sm md:text-base font-semibold">To know more click on the <a href="#" class="text-red-700 hover:border-b-2 border-gray-600">link</a></p>
</div>
<!-- rooms -->
<!-- footer -->
<div class="bg-stone-900 px-5 py-5 md:px-10 lg:px-20 md:py-10 text-white ">
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
<!-- footer -->


<script>
    function openmenu(){
document.getElementById('menu').classList.remove('hidden')
    }
    function closemenu(){
        document.getElementById('menu').classList.add('hidden')
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>

</body>
</html>



<!-- https://shubham-infrastructure.netlify.app -->