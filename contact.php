<!doctype html>
<html>

<head>
  <style>
    * {
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
  <nav class="w-screen fixed h-auto bg-stone-900 flex items-center justify-between px-2 py-2  md:px-16 md:py-1 z-20">
    <div class="flex items-center">
      <a href="index.php" class="flex items-center">
        <img src="./assets/logo.png" alt="logo" class="h-10">
        <p class=" md:text-xl pl-2 text-white leading-4">Shubham<br>Nagari</p>
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

  <!-- navbar -->

  <div class="max-w-screen-lg pt-20 mx-auto p-5">
    <div class="grid grid-cols-1 md:grid-cols-12 border">
      <div class="bg-indigo-500 md:col-span-4 p-10 text-white">
        <p class="mt-4 text-sm leading-7 font-regular uppercase">
          Contact
        </p>
        <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight">
          Get In <span class="text-indigo-900">Touch</span>
        </h3>
        <p class="mt-4 leading-5 text-gray-200">
          Let&#39;s find you together the place you deserve REPLACE &quot;Get the best flat at the best price! &quot;
        </p>

        <div class="flex items-center mt-5">
          <span class="material-symbols-outlined">
            pin_drop
          </span>
          <span class="text-sm">Shubham Nagari, Off Mumbai- Goa Highway, Opp. Gangai Hotel, Khairewadi, Oros,
            Taluka Kudal, District- Sindhdurg.</span>
        </div>
        <div class="flex items-center mt-5">
          <span class="material-symbols-outlined">
            pin_drop
          </span>
          <span class="text-sm">Office address :-<br>
            Shop no .8,9,10 , Sai shubham apt., close to Gangai Resort, khairyewadi, Mumbai-Goa highway , Oras , Sindhudurg.
            Maharashtra state.</span>
        </div>



        <div class="flex items-center mt-5">
          <span class="material-symbols-outlined">
            call
          </span>
          <span class="text-sm">+91-842-484-5344</span>
        </div>
        <div class="flex items-center mt-5">
          <span class="material-symbols-outlined">
            schedule
          </span>
          <span class="text-sm">24/7</span>
        </div>

      </div>
      <form class="md:col-span-8 p-10" action="" method="POST">
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
              First Name
            </label>
            <input class="appearance-none bg-transparent border-b border-red-500 w-full text-gray-700 mr-3 p-4 leading-tight focus:outline-none focus:bg-gray-200" type="text" placeholder="Name" name="first_name" required>
            <p class="text-red-500 text-xs italic mt-1">Please fill out this field.</p>
          </div>
          <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
              Last Name
            </label>
            <input class="appearance-none bg-transparent border-b border-indigo-500 w-full text-gray-700 mr-3 p-4 leading-tight focus:outline-none focus:bg-gray-200" type="text" placeholder="Sirname" name="last_name" required>
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              Email Address
            </label>
            <input class="appearance-none bg-transparent border-b border-indigo-500 w-full text-gray-700 mr-3 p-4 leading-tight focus:outline-none focus:bg-gray-200" type="email" placeholder="Email" name="email" required>
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-number">
              Phone number
            </label>
            <input class="appearance-none bg-transparent border-b border-indigo-500 w-full text-gray-700 mr-3 p-4 leading-tight focus:outline-none focus:bg-gray-200" type="tel" name="mobile" required placeholder="Phone number">
          </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
              Your Message
            </label>
            <textarea rows="5" class="appearance-none bg-transparent border-b border-indigo-500 w-full text-gray-700 mr-3 p-4 leading-tight focus:outline-none focus:bg-gray-200" type="text" placeholder="message" name="message" required>

        </textarea>
          </div>
          <div class=" items-center flex justify-center w-full px-3">
            <input class="shadow bg-indigo-600 hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded" type="submit" name="submit" value="Send Message">
          </div>

        </div>

      </form>

    </div>
  </div>
  <?php

  if (isset($_POST['submit'])) {
    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];
    $to = "junedwebsole@gmail.com";

    $body = "Name : ${first} ${last} <br> Mail : ${email} <br> Contact No. ${mobile} <br>Message : ${message}";

    $subject =  "Mail From www.shubhamnagari.in";

    $headers = "From: " . $email;

    if(mail($to, $subject, $message, $headers)){
        ?>
        <h1 style="color:green;font-weight: 900;">we will back to you soon</h1>
        <?php
    }else{
      ?>
      <h1 style="color:red;font-weight: 900;">Some thing Wents Wrong Please Contact us On office contact Number</h1>
      <?php
    }
  }
  ?>

  <script>
    function openmenu() {
      document.getElementById('menu').classList.remove('hidden')
    }

    function closemenu() {
      document.getElementById('menu').classList.add('hidden')
    }
  </script>

</body>

</html>