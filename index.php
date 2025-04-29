<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Palcare</title>
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="stylesheet" href="styles/style.css">
</head>
<body class="scroll-smooth">
  <!-- navbar -->
  <?php include "includes/navbar.php"; ?>
  <!-- main -->
  <section class="mt-[68px] h-100 flex justify-center items-center" id="home">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
      <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl text-gray-900" id="hero-title">Palcare, a part of your blood</h1>
      <p class="mb-8 text-lg font-normallg:text-xl sm:px-16 lg:px-48 text-gray-700">Your emergency partner, Get free Blood donors</p>
      <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
        <a href="donor_receiver/donors.php" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          See Donors
          <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"></path>
          </svg>
        </a>
      </div>
    </div>
  </section>
  <div class="absolute w-full h-40 mt-[-25%] z-[-1] flex justify-evenly gap-150 overflow-hidden">
    <i class="fa-solid fa-heart text-red-400 text-9xl rotate-350 opacity-[1] mt-[-15]" id="heart"></i>
    <i class="fa-solid fa-heart text-red-400 text-6xl rotate-30 opacity-[0.9] mt-25" id="heart"></i>
  </div>

  <!-- About -->
  <section class="bg-white mt-43" id="about">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-2xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl xl:text-5xl">
                Life Saver for a Lot of People
            </h1>
            <p class="max-w-2xl mb-6 font-light text-gray-900 lg:mb-8 md:text-lg lg:text-xl font-semibold">
              From organizing local blood drives to connecting donors and recipients nationwide, we make blood donation easy and accessible across Nepal. Join us in saving lives, one drop at a time.
          </p>
          
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex items-center justify-center">
            <img src="assets/bdimg.png" alt="mockup" class="rounded-[100%]" height="150" width="400">
        </div>
    </div>
</section>
<!-- speed dial -->
<div data-dial-init class="fixed end-6 bottom-6 group">
  <div id="speed-dial-menu-default" class="flex flex-col items-center hidden mb-4 space-y-2">
      <a href="whatsapp:contact=9807974130@s.whatsapp.com&message=I want to know how can i donate or receive blood" type="button" data-tooltip-target="tooltip-print" data-tooltip-placement="left" class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 dark:border-gray-600 shadow-xs dark:hover:text-white dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
        <i class="fa-brands fa-whatsapp"></i>
          <span class="sr-only">Whatsapp</span>
      </a>
      <div id="tooltip-print" role="tooltip" class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
          Whatsapp
          <div class="tooltip-arrow" data-popper-arrow></div>
      </div>
      <a type="button" href="https://www.facebook.com/bilarohh69" data-tooltip-target="tooltip-download" data-tooltip-placement="left" class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 dark:border-gray-600 shadow-xs dark:hover:text-white dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
        <i class="fa-brands fa-facebook"></i>
          <span class="sr-only">Facebook</span>
      </a>
      <div id="tooltip-download" role="tooltip" class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
          Facebook
          <div class="tooltip-arrow" data-popper-arrow></div>
      </div>
  </div>
  <button type="button" data-dial-toggle="speed-dial-menu-default" aria-controls="speed-dial-menu-default" aria-expanded="false" class="flex items-center justify-center text-white bg-blue-700 rounded-full w-14 h-14 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
      <svg class="w-5 h-5 transition-transform group-hover:rotate-45" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
      </svg>
      <span class="sr-only">Open actions menu</span>
  </button>
</div>
<!-- Footer -->
<?php include "includes/footer.php"; ?>


  <script src="script.js"></script>
</body>
</html>
