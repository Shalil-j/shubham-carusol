<!doctype html>
<html>

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        #detail1{
            opacity: 0;
            transition: opacity .6s;
            -moz-transition: opacity .6s;
            -o-transition: opacity .6s;
        }
        #detail1:hover{
            opacity: 100%;
            
        }
        #detail2{
            opacity: 0;
            transition: opacity .6s ;
            -moz-transition: opacity .6s ;
            -o-transition: opacity .6s ;
        }
        #detail2:hover{
            opacity: 1;
            
        }
        #detail3{
            opacity: 0;
            transition: opacity .6s ;
            -moz-transition: opacity .6s ;
            -o-transition: opacity .6s ;
        }
        #detail3:hover{
            opacity: 1;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="/dist/output.css" rel="stylesheet"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
        href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,700;1,300&display=swap"
        rel="stylesheet">

</head>

<body>
    <!-- navbar -->
    <nav
        class="w-screen h-auto fixed backdrop-blur-md bg-black/80 flex items-center justify-between px-5 py-2  md:px-16 md:py-3 z-20">
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
        <div id="menu" class="hidden">
            <button onclick=closemenu() class="pt-20">
                <span class="material-symbols-outlined text-white">
                    close
                </span>
            </button>
            <ul class="pt-5 py-5 space-y-6">
                <li><a href="./index.php" onclick=closemenu()>Home</a></li>
                <li><a href="./projects.php" onclick=closemenu()>Projects</a></li>
                <li><a href="./about.php" onclick=closemenu()>About</a></li>
                <li><a href="./contact.php" onclick=closemenu()>Contact</a></li>
            </ul>
            <div onclick=closemenu() class="z-0 absolute w-screen h-screen bg-black/50"></div>
        </div>
    </div>
    <!-- mobile navbar  -->

    <!-- header -->
    <div class="bg-black/80 md:bg-black/50 h-96 overflow-hidden">
        <img src="./assets/building.jpg" alt="" class="w-screen h-[700px] object-cover mix-blend-darken">
        <div class="absolute top-20 md:top-40 px-5 md:px-20 md:w-3/5 text-white">
            <h1 class="underline text-2xl md:text-4xl  underline-offset-8 decoration-4 decoration-red-500">
                Shubham Nagari
            </h1>
            <p class="mt-3 text-sm md:text-base">&quot;Shubham Nagari&quot; is one of the best township project by
                ???Shubham Infrastructure???, a leading
                Real Estate company. Located at Oros- Khariewadi. Oros is a town and district headquarters of
                the Sindhudurg District. Sindhudurg is the best destination for holidays in the summer &amp; rainy
                seasons.</p>
        </div>
    </div>
    <!-- header -->


    <!-- samrath krupa -->
    <div class="px-5 md:px-20 py-10 bg-indigo-200">
        <h1 class="underline text-2xl md:text-4xl  underline-offset-8 uppercase decoration-4 decoration-indigo-500">
            Samarth krupa apartment</h1>
        <div class="md:flex mt-5 md:space-x-5">
            <div class="md:w-3/5">
                <p class="text-sm md:text-base">Project named SAMARTH KRUPA. We are giving decorative entrance lobby,
                    all modern
                    amenities for 1RK & 1 BHK flats.
                    This property is near by National highway mumbai - Goa NH17, located at Oras - sindhudurg,
                    All market places, Govt. offices, school, colleges near by. All sea beaches like tarkarli,
                    vengurla, shiroda, devbhag back water, bhogave
                <ul class="py-2 font-bold">
                    <li> 30 minutes by road journey, Proposed
                        Chipi domestic airport </li>
                    <li>25 minutes by road journey, Proposed Sea World</li>
                    <li>25 minutes by road journey from project site. Goa state </li>
                    <li>40 minutes by road journey from project site.</li>
                </ul>
                This property is best for own residence and investment purpose also</p>

                <a href="./documents/Revised Rera Certificate- plot 4.pdf" download="Revised Rera Certificate- plot 4">
                    <button type="button" class="flex items-center my-2 mt-10 bg-indigo-500 px-3 py-1 text-white"><span
                            class="material-symbols-outlined pr-2">
                            download
                        </span>RERA CERTIFICATE</button>
                </a>
            </div>

            <div>
                <img src="./assets/samrath.png" alt="" class="md:-mt-20 rounded-md  object-cover">
            </div>
        </div>
        <button id="btn1" onclick=showmore1() class=" text-center  text-center w-full mt-5">
            <span class="material-symbols-outlined text-6xl">
                keyboard_arrow_down
            </span>
        </button>

        <div id="detail1" class="hidden">
            <!-- ********************************** -->

            <h1 class="text-2xl font-bold uppercase text-center pt-5">floor plans</h1>
            <div class="grid grid-cols-1 md:grid-cols-2">
                <img src="./assets//samrath-plan1.png" alt="">
                <img src="./assets//samrath-plan2.png" alt="">
            </div>

            <div class="md:flex justify-between">
                <div>
                    <h1 class="text-2xl uppercase">SPECIAL features</h1>
                    <div class="md:flex md:space-x-5 md:w-1/2 mt-5">
                        <div>
                            <ul class="uppercase space-y-2 md:space-y-10 text-sm md:font-semibold">
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-red-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        local_hospital
                                    </span>civil hospita(2km)</li>
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-blue-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        water
                                    </span>sindhudurga lake(2km)</li>
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-slate-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        castle
                                    </span>sindhudurga fort(30km)</li>
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-orange-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        temple_hindu
                                    </span>ravalnath template(1km)</li>
                            </ul>
                        </div>

                        <div>
                            <ul class="uppercase mt-2 md:mt-0 space-y-2 md:space-y-10 text-sm md:font-semibold">
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-green-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        school
                                    </span>school & college zone(done bosco high school 1km)</li>
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-red-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        train
                                    </span>sindhudurga station(3km)</li>
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-blue-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        surfing
                                    </span>tarkarli/devbaug beach(32km)</li>
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-red-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        assured_workload
                                    </span>goverment office area(1.5km)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <h1 class="text-2xl uppercase">amenities</h1>
                    <div class="md:flex">
                        <div>
                            <ul class="text-sm md:text-base">
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>G+3 RCC Frame Structure</li>

                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>External Brick / Block Work 150MM in Thikness</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>internal Brick / Block Work 150MM in Thikness</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>External plaster double coat sand faced</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>internal gypsum plaster</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>porcelain tiles(ceramic) of 2x2 in all rooms & kitchen</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>ceramic tiles for wall dado work of wc bath,& kitchen platform up to loft
                                    level</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>Kitchen platform of black granite with stainless steel sink</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>sandalwood door frame for all room door</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>flush door at entrance of 35MM thick with design lamination sheet</li>


                            </ul>
                        </div>
                        <div>
                            <ul class="text-sm md:text-base">
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>flush door for bed rooms of30MM thick both side oil paint</li>

                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>bakelite door for wc & bathroom</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>marble window frame for all window of wc & bathroom doors</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>concealed electrical wiring with modular switches</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>heavy duty powder coated aluminum section window frame</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>CPVC concealed plumbing with seiko fitting</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>OBD paint for all internal walls</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>100% acrylic paint for all external walls</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>kota stone in staircase trade & riser</li>



                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-10 px-5 md:py-20 md:px-20">
                <h1
                    class="underline text-2xl md:text-4xl  underline-offset-8 uppercase decoration-4 decoration-green-500">
                    Pricing</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-2 mt-5 px-auto md:px-0">
                    <div class="flex-col  border-2 border-gray-200 items-center h-auto w-60 rounded-md">
                        <div class="h-52 overflow-hidden">
                            <img src="./assets/1rk.png" alt="" class="object-cover rounded-md">
                        </div>
                        <div class="text-center py-4">
                            <p class="font-bold">1RK</p>
                            <p>Starting from</p>
                            <p class="text-xl underline-offset-1 underline">12 lakhs</p>
                            <button class="text-sm mt-3 text-white rounded bg-red-500 px-5 py-1">
                                Contact Now!
                            </button>
                        </div>
                    </div>

                    <div class="flex-col  border-2 border-gray-200 items-center h-auto w-60 rounded-md">
                        <div class="h-52 overflow-hidden">
                            <img src="./assets/1bhk.png" alt="" class="object-cover rounded-md">
                        </div>
                        <div class="text-center py-4">
                            <p class="font-bold">1BHK</p>
                            <p>Starting from</p>
                            <p class="text-xl underline-offset-1 underline">17 lakhs</p>
                            <button class="text-sm mt-3 text-white rounded bg-red-500 px-2 py-1">
                                Contact Now!
                            </button>
                        </div>
                    </div>

                    <div class="flex-col  border-2 border-gray-200 items-center h-auto w-60 rounded-md">
                        <div class="h-52 overflow-hidden">
                            <img src="./assets/wip.jpg" alt="" class="object-cover rounded-md">
                        </div>
                        <div class="text-center py-4">
                            <p class="font-bold">2BHK</p>
                            <p>Starting from</p>
                            <p class="text-xl underline-offset-1 underline">----</p>
                            <button class="text-sm mt-3 text-white rounded bg-red-500 px-2 py-1">
                                Contact Now!
                            </button>
                        </div>
                    </div>

                    <div class="flex-col  border-2 border-gray-200 items-center h-auto w-60 rounded-md">
                        <div class="h-52 overflow-hidden">
                            <img src="./assets/wip.jpg" alt="" class="object-cover rounded-md">
                        </div>
                        <div class="text-center py-4">
                            <p class="font-bold">3BHK</p>
                            <p>Starting from</p>
                            <p class="text-xl underline-offset-1 underline">----</p>
                            <button class="text-sm mt-3 text-white rounded bg-red-500 px-2 py-1">
                                Contact Now!
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <button id="downarrows" onclick=showless1() class=" text-center  text-center w-full mt-5">
                <span class="material-symbols-outlined text-6xl">
                    keyboard_arrow_up
                </span>
            </button>
            <!-- ********************************** -->
        </div>


    </div>
    <!-- samrath krupa -->
    <!-- sai krupa -->
    <div class="px-5 md:px-20 py-10 bg-red-200">
        <h1 class="underline text-2xl md:text-4xl  underline-offset-8 uppercase decoration-4 decoration-red-500">Sai
            krupa apartment </h1>
        <div class="md:flex mt-5 md:space-x-5">
            <div class="md:w-3/5">
                <p class="text-sm md:text-base">Project named SAI KRUPA. We are giving decorative entrance lobby, all
                    modern amenities for
                    1RK & 1 BHK flats.
                    This property is near by National highway mumbai - Goa NH17, located at Oras - sindhudurg,
                    All market places, Govt. offices, school, colleges near by. All sea beaches like tarkarli,
                    vengurla, shiroda, devbhag back water, bhogave
                <ul class="py-2 font-bold">
                    <li> 30 minutes by road journey, Proposed Chipi domestic airport </li>
                    <li>25 minutes by road journey, Proposed Sea World</li>
                    <li>25 minutes by road journey from project site. Goa state </li>
                    <li>40 minutes by road journey from project site.</li>
                </ul>
                This property is best for own residence and investment purpose also</p>

                <a href="./documents/Revised Rera Certificate-Plot 8,9,10.pdf"
                    download="Revised Rera Certificate-Plot 8,9,10">
                    <button type="button" class="flex items-center my-2 mt-10 bg-red-500 px-3 py-1 text-white"><span
                            class="material-symbols-outlined pr-2">
                            download
                        </span>RERA CERTIFICATE</button>
                </a>
            </div>

            <div>
                <img src="./assets/sai.png" alt="" class="md:-mt-20 rounded-md object-cover">
            </div>
        </div>

        <button id="btn2" onclick=showmore2() class=" text-center  text-center w-full mt-5">
            <span class="material-symbols-outlined text-6xl">
                keyboard_arrow_down
            </span>
        </button>

        <div id="detail2" class="hidden">
            <!-- ********************************** -->


            <h1 class="text-2xl font-bold uppercase text-center pt-5">floor plans</h1>
            <div class="grid grid-cols-1 md:grid-cols-2">
                <img src="./assets/sai-pan1.png" alt="">
                <img src="./assets/sai-pan2.png" alt="">
            </div>


            <div class="md:flex justify-between">
                <div>
                    <h1 class="text-2xl uppercase">SPECIAL features</h1>
                    <div class="md:flex md:space-x-5 md:w-1/2 mt-5">
                        <div>
                            <ul class="uppercase space-y-2 md:space-y-10 text-sm md:font-semibold">
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-red-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        local_hospital
                                    </span>civil hospita(2km)</li>
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-blue-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        water
                                    </span>sindhudurga lake(2km)</li>
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-slate-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        castle
                                    </span>sindhudurga fort(30km)</li>
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-orange-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        temple_hindu
                                    </span>ravalnath template(1km)</li>
                            </ul>
                        </div>

                        <div>
                            <ul class="uppercase mt-2 md:mt-0 space-y-2 md:space-y-10 text-sm md:font-semibold">
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-green-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        school
                                    </span>school & college zone(done bosco high school 1km)</li>
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-red-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        train
                                    </span>sindhudurga station(3km)</li>
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-blue-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        surfing
                                    </span>tarkarli/devbaug beach(32km)</li>
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-red-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        assured_workload
                                    </span>goverment office area(1.5km)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <h1 class="text-2xl uppercase">amenities</h1>
                    <div class="md:flex">
                        <div>
                            <ul class="text-sm md:text-base">
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>G+3 RCC Frame Structure</li>

                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>External Brick / Block Work 150MM in Thikness</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>internal Brick / Block Work 150MM in Thikness</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>External plaster double coat sand faced</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>internal gypsum plaster</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>porcelain tiles(ceramic) of 2x2 in all rooms & kitchen</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>ceramic tiles for wall dado work of wc bath,& kitchen platform up to loft
                                    level</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>Kitchen platform of black granite with stainless steel sink</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>sandalwood door frame for all room door</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>flush door at entrance of 35MM thick with design lamination sheet</li>


                            </ul>
                        </div>
                        <div>
                            <ul class="text-sm md:text-base">
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>flush door for bed rooms of30MM thick both side oil paint</li>

                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>bakelite door for wc & bathroom</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>marble window frame for all window of wc & bathroom doors</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>concealed electrical wiring with modular switches</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>heavy duty powder coated aluminum section window frame</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>CPVC concealed plumbing with seiko fitting</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>OBD paint for all internal walls</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>100% acrylic paint for all external walls</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>kota stone in staircase trade & riser</li>



                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-10 px-5 md:py-20 md:px-20">
                <h1
                    class="underline text-2xl md:text-4xl  underline-offset-8 uppercase decoration-4 decoration-green-500">
                    Pricing</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-2 mt-5 px-auto md:px-0">
                    <div class="flex-col  border-2 border-gray-200 items-center h-auto w-60 rounded-md">
                        <div class="h-52 overflow-hidden">
                            <img src="./assets/1rk.png" alt="" class="object-cover rounded-md">
                        </div>
                        <div class="text-center py-4">
                            <p class="font-bold">1RK</p>
                            <p>Starting from</p>
                            <p class="text-xl underline-offset-1 underline">12 lakhs</p>
                            <button class="text-sm mt-3 text-white rounded bg-red-500 px-5 py-1">
                                Contact Now!
                            </button>
                        </div>
                    </div>

                    <div class="flex-col  border-2 border-gray-200 items-center h-auto w-60 rounded-md">
                        <div class="h-52 overflow-hidden">
                            <img src="./assets/1bhk.png" alt="" class="object-cover rounded-md">
                        </div>
                        <div class="text-center py-4">
                            <p class="font-bold">1BHK</p>
                            <p>Starting from</p>
                            <p class="text-xl underline-offset-1 underline">17 lakhs</p>
                            <button class="text-sm mt-3 text-white rounded bg-red-500 px-2 py-1">
                                Contact Now!
                            </button>
                        </div>
                    </div>

                    <div class="flex-col  border-2 border-gray-200 items-center h-auto w-60 rounded-md">
                        <div class="h-52 overflow-hidden">
                            <img src="./assets/wip.jpg" alt="" class="object-cover rounded-md">
                        </div>
                        <div class="text-center py-4">
                            <p class="font-bold">2BHK</p>
                            <p>Starting from</p>
                            <p class="text-xl underline-offset-1 underline">----</p>
                            <button class="text-sm mt-3 text-white rounded bg-red-500 px-2 py-1">
                                Contact Now!
                            </button>
                        </div>
                    </div>

                    <div class="flex-col  border-2 border-gray-200 items-center h-auto w-60 rounded-md">
                        <div class="h-52 overflow-hidden">
                            <img src="./assets/wip.jpg" alt="" class="object-cover rounded-md">
                        </div>
                        <div class="text-center py-4">
                            <p class="font-bold">3BHK</p>
                            <p>Starting from</p>
                            <p class="text-xl underline-offset-1 underline">----</p>
                            <button class="text-sm mt-3 text-white rounded bg-red-500 px-2 py-1">
                                Contact Now!
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <button onclick=showless2() class=" text-center  text-center w-full mt-5">
                <span class="material-symbols-outlined text-6xl">
                    keyboard_arrow_up
                </span>
            </button>
            <!-- ********************************** -->
        </div>
    </div>
    <!-- sai krupa -->
    <!-- sadguru krupa -->
    <div class="px-5 md:px-20 py-10 bg-blue-200">
        <h1 class="underline text-2xl md:text-4xl  underline-offset-8 uppercase decoration-4 decoration-blue-500">
            sadguru krupa apartment </h1>
        <div class="md:flex mt-5 md:space-x-5">
            <div class="md:w-3/5">
                <p class="text-sm md:text-base">Project named SADGURU KRUPA. We are giving decorative entrance lobby,
                    all modern
                    amenities for 1RK & 1 BHK flats.
                    This property is near by National highway mumbai - Goa NH17, located at Oras - sindhudurg,
                    All market places, Govt. offices, school, colleges near by. All sea beaches like tarkarli, vengurla,
                    shiroda, devbhag back water, bhogave
                <ul class="py-2 font-bold">
                    <li> 30 minutes by road journey, Proposed Chipi domestic airport </li>
                    <li>25 minutes by road journey, Proposed Sea World</li>
                    <li>25 minutes by road journey from project site. Goa state </li>
                    <li>40 minutes by road journey from project site.</li>
                </ul>
                This property is best for own residence and investment purpose also</p>

                <a href="./documents/Revised Rera Certificate -plot 5,6,7.pdf"
                    download="Revised Rera Certificate -plot 5,6,7">
                    <button type="button" class="flex items-center mt-10 bg-blue-500 my-2 px-3 py-1 text-white"><span
                            class="material-symbols-outlined pr-2">
                            download
                        </span>RERA CERTIFICATE</button>
                </a>
            </div>
            <div>
                <img src="./assets/sadguru.png" alt="" class="md:-mt-20 rounded-md object-cover">
            </div>
        </div>

        <button id="btn3" onclick=showmore3() class=" text-center  text-center w-full mt-5">
            <span class="material-symbols-outlined text-6xl">
                keyboard_arrow_down
            </span>
        </button>

        <div id="detail3" class="hidden">
            <!-- ********************************** -->


            <h1 class="text-2xl font-bold uppercase text-center pt-5">floor plans</h1>
            <div class="grid grid-cols-1 md:grid-cols-2">
                <img src="./assets/sadguru-plan.png" alt="">
                <img src="./assets/sadguru-plan1.png" alt="">
            </div>

            <div class="md:flex justify-between">
                <div>
                    <h1 class="text-2xl uppercase">SPECIAL features</h1>
                    <div class="md:flex md:space-x-5 md:w-1/2 mt-5">
                        <div>
                            <ul class="uppercase space-y-2 md:space-y-10 text-sm md:font-semibold">
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-red-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        local_hospital
                                    </span>civil hospita(2km)</li>
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-blue-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        water
                                    </span>sindhudurga lake(2km)</li>
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-slate-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        castle
                                    </span>sindhudurga fort(30km)</li>
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-orange-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        temple_hindu
                                    </span>ravalnath template(1km)</li>
                            </ul>
                        </div>

                        <div>
                            <ul class="uppercase mt-2 md:mt-0 space-y-2 md:space-y-10 text-sm md:font-semibold">
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-green-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        school
                                    </span>school & college zone(done bosco high school 1km)</li>
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-red-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        train
                                    </span>sindhudurga station(3km)</li>
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-blue-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        surfing
                                    </span>tarkarli/devbaug beach(32km)</li>
                                <li class="flex items-center"><span
                                        class="material-symbols-outlined bg-red-500 text-white md:text-3xl p-1 rounded-full mr-2 md:px-2 py-1">
                                        assured_workload
                                    </span>goverment office area(1.5km)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <h1 class="text-2xl uppercase">amenities</h1>
                    <div class="md:flex">
                        <div>
                            <ul class="text-sm md:text-base">
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>G+3 RCC Frame Structure</li>

                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>External Brick / Block Work 150MM in Thikness</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>internal Brick / Block Work 150MM in Thikness</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>External plaster double coat sand faced</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>internal gypsum plaster</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>porcelain tiles(ceramic) of 2x2 in all rooms & kitchen</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>ceramic tiles for wall dado work of wc bath,& kitchen platform up to loft
                                    level</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>Kitchen platform of black granite with stainless steel sink</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>sandalwood door frame for all room door</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>flush door at entrance of 35MM thick with design lamination sheet</li>


                            </ul>
                        </div>
                        <div>
                            <ul class="text-sm md:text-base">
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>flush door for bed rooms of30MM thick both side oil paint</li>

                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>bakelite door for wc & bathroom</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>marble window frame for all window of wc & bathroom doors</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>concealed electrical wiring with modular switches</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>heavy duty powder coated aluminum section window frame</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>CPVC concealed plumbing with seiko fitting</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>OBD paint for all internal walls</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>100% acrylic paint for all external walls</li>
                                <li class="flex items-center capitalize"><span
                                        class="material-symbols-outlined text-3xl text-green-500">
                                        done
                                    </span>kota stone in staircase trade & riser</li>



                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-10 px-5 md:py-20 md:px-20">
                <h1
                    class="underline text-2xl md:text-4xl  underline-offset-8 uppercase decoration-4 decoration-green-500">
                    Pricing</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-2 mt-5 px-auto md:px-0">
                    <div class="flex-col  border-2 border-gray-200 items-center h-auto w-60 rounded-md">
                        <div class="h-52 overflow-hidden">
                            <img src="./assets/1rk.png" alt="" class="object-cover rounded-md">
                        </div>
                        <div class="text-center py-4">
                            <p class="font-bold">1RK</p>
                            <p>Starting from</p>
                            <p class="text-xl underline-offset-1 underline">12 lakhs</p>
                            <button class="text-sm mt-3 text-white rounded bg-red-500 px-5 py-1">
                                Contact Now!
                            </button>
                        </div>
                    </div>

                    <div class="flex-col  border-2 border-gray-200 items-center h-auto w-60 rounded-md">
                        <div class="h-52 overflow-hidden">
                            <img src="./assets/1bhk.png" alt="" class="object-cover rounded-md">
                        </div>
                        <div class="text-center py-4">
                            <p class="font-bold">1BHK</p>
                            <p>Starting from</p>
                            <p class="text-xl underline-offset-1 underline">17 lakhs</p>
                            <button class="text-sm mt-3 text-white rounded bg-red-500 px-2 py-1">
                                Contact Now!
                            </button>
                        </div>
                    </div>

                    <div class="flex-col  border-2 border-gray-200 items-center h-auto w-60 rounded-md">
                        <div class="h-52 overflow-hidden">
                            <img src="./assets/wip.jpg" alt="" class="object-cover rounded-md">
                        </div>
                        <div class="text-center py-4">
                            <p class="font-bold">2BHK</p>
                            <p>Starting from</p>
                            <p class="text-xl underline-offset-1 underline">----</p>
                            <button class="text-sm mt-3 text-white rounded bg-red-500 px-2 py-1">
                                Contact Now!
                            </button>
                        </div>
                    </div>

                    <div class="flex-col  border-2 border-gray-200 items-center h-auto w-60 rounded-md">
                        <div class="h-52 overflow-hidden">
                            <img src="./assets/wip.jpg" alt="" class="object-cover rounded-md">
                        </div>
                        <div class="text-center py-4">
                            <p class="font-bold">3BHK</p>
                            <p>Starting from</p>
                            <p class="text-xl underline-offset-1 underline">----</p>
                            <button class="text-sm mt-3 text-white rounded bg-red-500 px-2 py-1">
                                Contact Now!
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <button onclick=showless3() class=" text-center  text-center w-full mt-5">
                <span class="material-symbols-outlined text-6xl">
                    keyboard_arrow_up
                </span>
            </button>
            <!-- ********************************** -->
        </div>


    </div>


    <!-- sadguru krupa -->
    <!-- GALLARY -->
    <div class="px-2 md:px-20 py-10 md:py-20">
        <h1 class="underline text-2xl md:text-4xl  underline-offset-8 uppercase decoration-4 decoration-indigo-500">
            GALLARY</h1>
        <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-6 gap-6 mt-5 pl-16 md:pl-0">
            <img src="./assets/gallary/IMG-20170403-WA0000.jpg" alt=""
                class="object-cover h-48 w-48 md:h-40 md:w-40 md:hover:scale-150 transition duration-300 md:hover:shadow-2xl">
            <img src="./assets/gallary/IMG-20170423-WA0005.jpg" alt=""
                class="object-cover h-48 w-48 md:h-40 md:w-40 md:hover:scale-150 transition duration-300 md:hover:shadow-2xl">
            <img src="./assets/gallary/IMG-20170423-WA0006.jpg" alt=""
                class="object-cover h-48 w-48 md:h-40 md:w-40 md:hover:scale-150 transition duration-300 md:hover:shadow-2xl">
            <img src="./assets/gallary/IMG-20180428-WA0006.jpg" alt=""
                class="object-cover h-48 w-48 md:h-40 md:w-40 md:hover:scale-150 transition duration-300 md:hover:shadow-2xl">
            <img src="./assets/gallary/IMG-20180428-WA0008.jpg" alt=""
                class="object-cover h-48 w-48 md:h-40 md:w-40 md:hover:scale-150 transition duration-300 md:hover:shadow-2xl">
            <img src="./assets/gallary/IMG-20180428-WA0011.jpg" alt=""
                class="object-cover h-48 w-48 md:h-40 md:w-40 md:hover:scale-150 transition duration-300 md:hover:shadow-2xl">
            <img src="./assets/gallary/IMG-20180428-WA0014.jpg" alt=""
                class="object-cover h-48 w-48 md:h-40 md:w-40 md:hover:scale-150 transition duration-300 md:hover:shadow-2xl">
            <img src="./assets/gallary/IMG-20180509-WA0009.jpg" alt=""
                class="object-cover h-48 w-48 md:h-40 md:w-40 md:hover:scale-150 transition duration-300 md:hover:shadow-2xl">
            <img src="./assets/gallary/IMG-20180509-WA0012.jpg" alt=""
                class="object-cover h-48 w-48 md:h-40 md:w-40 md:hover:scale-150 transition duration-300 md:hover:shadow-2xl">
            <img src="./assets/gallary/IMG-20180509-WA0014.jpg" alt=""
                class="object-cover h-48 w-48 md:h-40 md:w-40 md:hover:scale-150 transition duration-300 md:hover:shadow-2xl">
            <img src="./assets/gallary/IMG-20180509-WA0015.jpg" alt=""
                class="object-cover h-48 w-48 md:h-40 md:w-40 md:hover:scale-150 transition duration-300 md:hover:shadow-2xl">
            <img src="./assets/gallary/IMG-20180608-WA0017.jpg" alt=""
                class="object-cover h-48 w-48 md:h-40 md:w-40 md:hover:scale-150 transition duration-300 md:hover:shadow-2xl">
            <img src="./assets/gallary/IMG-20180608-WA0019.jpg" alt=""
                class="object-cover h-48 w-48 md:h-40 md:w-40 md:hover:scale-150 transition duration-300 md:hover:shadow-2xl">
            <img src="./assets/gallary/IMG-20180608-WA0024.jpg" alt=""
                class="object-cover h-48 w-48 md:h-40 md:w-40 md:hover:scale-150 transition duration-300 md:hover:shadow-2xl">
            <img src="./assets/gallary/IMG-20180803-WA0012.jpg" alt=""
                class="object-cover h-48 w-48 md:h-40 md:w-40 md:hover:scale-150 transition duration-300 md:hover:shadow-2xl">
            <img src="./assets/gallary/IMG-20180803-WA0016.jpg" alt=""
                class="object-cover h-48 w-48 md:h-40 md:w-40 md:hover:scale-150 transition duration-300 md:hover:shadow-2xl">
            <img src="./assets/gallary/IMG-20180803-WA0022.jpg" alt=""
                class="object-cover h-48 w-48 md:h-40 md:w-40 md:hover:scale-150 transition duration-300 md:hover:shadow-2xl">
            <img src="./assets/gallary/IMG-20180820-WA0030.jpg" alt=""
                class="object-cover h-48 w-48 md:h-40 md:w-40 md:hover:scale-150 transition duration-300 md:hover:shadow-2xl">
        </div>
    </div>
    <!-- GALLARY -->
    <!-- upcomming projects -->
    <div class="px-5 md:px-20 py-10 md:py-20">
        <h1 class="underline text-2xl md:text-4xl  underline-offset-8 uppercase decoration-4 decoration-indigo-500">
            projects</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-5">
            <div class="bg-red-500 px-5 py-5 rounded text-white">
                <h1 class="font-bold text-xl md:text-2xl">1.ONGOINGPROJECTS ???</h1>
                <p class="text-sm md:text-base mt-2">Sai Shubham Appartment ??? A Residentional cum comer.projects ,
                    at Oras,Sindhudurg.</p>
                <p class="text-sm md:text-base mt-2">ShubhamNagari- A Township building project,At ???Mumbai-Goa
                    highway,Oras, Sindhudurg.</p>
            </div>
            <div class="bg-blue-500 px-5 py-5 rounded text-white">
                <h1 class="font-bold text-xl md:text-2xl">2.COMPLETED PROJECTS ???</h1>
                <p class="text-sm md:text-base mt-2">KalakrutiAppartment- Aresidentional project, near Neral Railway
                    station,
                    tal-karjat,dist- Raighad. Given possession in schedule time period with
                    Quality product.</p>
                <p class="text-sm md:text-base mt-2">ShubhamAppartment- A residentional project @phalthan- Bharamati..
                </p>
            </div>
            <div class="bg-gray-500 px-5 py-5 rounded text-white">
                <h1 class="font-bold text-xl md:text-2xl">3.UP COMING PROJECTS-</h1>
                <p class="text-sm md:text-base mt-2">Shubham Heights ???Residentional project @ J. B. Nagar, Andheri-
                    East.</p>
                <p class="text-sm md:text-base mt-2">Shubhamcity- A Bunglow townships project @ Pali, Raighad District.
                </p>
                <p class="text-sm md:text-base mt-2">ShubhamNagari phase -2 ???A bunglow township projects @ Oras-
                    sindhudurg.</p>
                <p class="text-sm md:text-base mt-2">Shubham spaces- a G+5 storey residentional and commercial project
                    at
                    Kudal- sindhudurg.</p>
            </div>
        </div>
    </div>


    <!-- upcomming projects -->
    <!--footer-->
    <div class="bg-stone-900 px-5 py-5 md:px-20 md:py-10 text-white ">
        <div class="flex items-center ">
            <img src="./assets/logo.png" alt="logo" class="h-10 md:h-20">
            <p class="text-sm md:text-2xl">Shubham<br>
                Infrastructure</p>
        </div>
        <p class="mt-2 text-sm md:text-2xl text-gray-400">Let&#39;s find you together the place you deserve REPLACE
            &quot;Get the best flat at the best price! &quot;</p>
        <div class="md:flex mt-5 justify-between">
            <div class="space-y-2 text-sm md:text-base  md:w-1/2 md:space-y-10">
                <p>+91 8424-8453-44</p>
                <p>Address- Shubham Nagari, Off Mumbai- Goa Highway, Opp. Gangai Hotel, Khairewadi, Oros,
                    Taluka Kudal, District- Sindhdurg.</p>
                <a href="mailto:contact@shubhamnagari.com">Email - contact@shubhamnagari.com</a><br>
                <div class="flex space-x-8 ">
                    <a href="https://www.facebook.com/Shubham-Nagari-101997754972702">FACEBOOK</a>
                    <a href="https://www.instagram.com/chandsiduiqi2020/?igshid=tml6e6gxx0dw">INSTAGRAM</a>
                    <a href="https://twitter.com/nagari_shubham">TWITTER</a>
                </div>
            </div>
            <div class="px-5 mt-10 md:mt-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3832.753996941136!2d73.70685964822769!3d16.13002174232708!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1fd6f816b4adf9f1!2s7J8M4PH4%2BVGF!5e0!3m2!1sen!2sin!4v1651753490059!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!--footer-->




    <script>
        function openmenu() {
            document.getElementById('menu').classList.remove('hidden')
        }
       
        function closemenu() {
            document.getElementById('menu').classList.add('hidden')
        }

        function showmore1() {
            
            document.getElementById('detail1').classList.remove('hidden')
            document.getElementById('btn1').classList.add('hidden')
            document.getElementById('detail2').classList.add('hidden')
            document.getElementById('detail3').classList.add('hidden')
            document.getElementById('btn2').classList.remove('hidden')
            document.getElementById('btn3').classList.remove('hidden')

        }
        function showless1() {
            document.getElementById('detail1').classList.add('hidden')
            document.getElementById('btn1').classList.remove('hidden')
        }
        


        function showmore2() {
            document.getElementById('detail2').classList.remove('hidden')
            document.getElementById('btn2').classList.add('hidden')
            document.getElementById('detail1').classList.add('hidden')
            document.getElementById('detail3').classList.add('hidden')
            document.getElementById('btn1').classList.remove('hidden')
            document.getElementById('btn3').classList.remove('hidden')
        }
        function showless2() {
            document.getElementById('detail2').classList.add('hidden')
            document.getElementById('btn2').classList.remove('hidden')
        }




        function showmore3() {
            document.getElementById('detail3').classList.remove('hidden')
            document.getElementById('btn3').classList.add('hidden')
            document.getElementById('detail2').classList.add('hidden')
            document.getElementById('detail1').classList.add('hidden')
            document.getElementById('btn1').classList.remove('hidden')
            document.getElementById('btn2').classList.remove('hidden')
        }
        function showless3() {
            document.getElementById('detail3').classList.add('hidden')
            document.getElementById('btn3').classList.remove('hidden')
        }





    </script>
</body>

</html>