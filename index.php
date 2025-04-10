<?php
session_start();
?>




<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./style/reset.css"> -->
    <link rel="stylesheet" href="./style/vazir-font-face.css">
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/src/output.css">
    <link rel="shortcut icon" href="/afifabadpool/img/favicon-32x32.png" type="image/x-icon">
    <title>استخر عفیف آباد</title>
    

   

</head>

<body class="bg-[#b5e3ff]">
    <!-- header -->
    <!-- sidebar for mobile -->
    <div id="sidebar" class="hidden">
        <div id="overlay" class=" z-9 w-full h-full fixed bg-gray-100  opacity-80  flex justify-end items-start">
            <!-- close ico -->
            <button id="sidebar-close-icon" class=" text-white p-2 dark:text-black ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-9">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                  </svg>
            </button>         
        </div>
        <!-- sidebar -->
        <div class="h-full w-70 lg:hidden bg-[#084ac5] pt-8 z-10 fixed text-white p-6 ">
            <ul class="flex flex-col items-start gap-4 ">
                <li><a class="flex justify-center items-center gap-2 hover:bg-[#48b9ff] p-2 rounded-xl duration-200 group" href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>صفحه اصلی</a></li>
                <li><a class="flex justify-center items-center gap-2 hover:bg-[#48b9ff] p-2 rounded-xl duration-200 group" href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>خدمات مجموعه</a></li>
                <li><a class="flex justify-center items-center gap-2 hover:bg-[#48b9ff] p-2 rounded-xl duration-200 group" href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.712 4.33a9.027 9.027 0 0 1 1.652 1.306c.51.51.944 1.064 1.306 1.652M16.712 4.33l-3.448 4.138m3.448-4.138a9.014 9.014 0 0 0-9.424 0M19.67 7.288l-4.138 3.448m4.138-3.448a9.014 9.014 0 0 1 0 9.424m-4.138-5.976a3.736 3.736 0 0 0-.88-1.388 3.737 3.737 0 0 0-1.388-.88m2.268 2.268a3.765 3.765 0 0 1 0 2.528m-2.268-4.796a3.765 3.765 0 0 0-2.528 0m4.796 4.796c-.181.506-.475.982-.88 1.388a3.736 3.736 0 0 1-1.388.88m2.268-2.268 4.138 3.448m0 0a9.027 9.027 0 0 1-1.306 1.652c-.51.51-1.064.944-1.652 1.306m0 0-3.448-4.138m3.448 4.138a9.014 9.014 0 0 1-9.424 0m5.976-4.138a3.765 3.765 0 0 1-2.528 0m0 0a3.736 3.736 0 0 1-1.388-.88 3.737 3.737 0 0 1-.88-1.388m2.268 2.268L7.288 19.67m0 0a9.024 9.024 0 0 1-1.652-1.306 9.027 9.027 0 0 1-1.306-1.652m0 0 4.138-3.448M4.33 16.712a9.014 9.014 0 0 1 0-9.424m4.138 5.976a3.765 3.765 0 0 1 0-2.528m0 0c.181-.506.475-.982.88-1.388a3.736 3.736 0 0 1 1.388-.88m-2.268 2.268L4.33 7.288m6.406 1.18L7.288 4.33m0 0a9.024 9.024 0 0 0-1.652 1.306A9.025 9.025 0 0 0 4.33 7.288" />
                </svg>آموزش شنا</a></li>
                <li><a class="flex justify-center items-center gap-2 hover:bg-[#48b9ff] p-2 rounded-xl duration-200 group" href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>گالری تصاویر</a></li>
                <li><a class="flex justify-center items-center gap-2 hover:bg-[#48b9ff] p-2 rounded-xl duration-200 group" href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12" />
                </svg>وبلاگ</a></li>
                <li><a class="flex justify-center items-center gap-2 hover:bg-[#48b9ff] p-2 rounded-xl duration-200 group" href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>راه های ارتباطی</a></li>
            </ul>
            <button class="login flex mt-6 w-full gap-1 justify-center items-center bg-[#0675ff] text-white p-3 rounded-xl hover:bg-[#48b9ff] duration-200"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
              </svg>ورود به سامانه</button>
        </div>
    </div>
<!-- descktop menu -->
    <div> 
        <!-- burger menu -->
        <div id="navbar" class="flex justify-between   lg:justify-center items-center bg-white p-4 shadow-xl">
            <button id="sidebar-open-icon" class="block lg:hidden px-6 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-9 hover:text-[#48b9ff] duration-200">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                  </svg>    
            </button>
            <!-- LOGO -->
            <div class="pr-20 lg:p-0   flex justify-center">
                <a href=""><img src="/afifabadpool/img/logo.png" width="100rem" alt="logo"></a>
            </div>
            <div>
                <ul class="hidden lg:flex px-6 gap-4 ">
                    <li><a class="flex flex-col justify-center items-center hover:text-[#084ac5]  hover:decoration-[#084ac5] group" href="">صفحه اصلی<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 opacity-0 -translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg></a></li>
                    <li><a class="flex flex-col justify-center items-center hover:text-[#084ac5]  hover:decoration-[#084ac5] group" href="">خدمات مجموعه<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 opacity-0 -translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg></a></li>
                    <li><a class="flex flex-col justify-center items-center hover:text-[#084ac5]  hover:decoration-[#084ac5] group" href="">آموزش شنا<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 opacity-0 -translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.712 4.33a9.027 9.027 0 0 1 1.652 1.306c.51.51.944 1.064 1.306 1.652M16.712 4.33l-3.448 4.138m3.448-4.138a9.014 9.014 0 0 0-9.424 0M19.67 7.288l-4.138 3.448m4.138-3.448a9.014 9.014 0 0 1 0 9.424m-4.138-5.976a3.736 3.736 0 0 0-.88-1.388 3.737 3.737 0 0 0-1.388-.88m2.268 2.268a3.765 3.765 0 0 1 0 2.528m-2.268-4.796a3.765 3.765 0 0 0-2.528 0m4.796 4.796c-.181.506-.475.982-.88 1.388a3.736 3.736 0 0 1-1.388.88m2.268-2.268 4.138 3.448m0 0a9.027 9.027 0 0 1-1.306 1.652c-.51.51-1.064.944-1.652 1.306m0 0-3.448-4.138m3.448 4.138a9.014 9.014 0 0 1-9.424 0m5.976-4.138a3.765 3.765 0 0 1-2.528 0m0 0a3.736 3.736 0 0 1-1.388-.88 3.737 3.737 0 0 1-.88-1.388m2.268 2.268L7.288 19.67m0 0a9.024 9.024 0 0 1-1.652-1.306 9.027 9.027 0 0 1-1.306-1.652m0 0 4.138-3.448M4.33 16.712a9.014 9.014 0 0 1 0-9.424m4.138 5.976a3.765 3.765 0 0 1 0-2.528m0 0c.181-.506.475-.982.88-1.388a3.736 3.736 0 0 1 1.388-.88m-2.268 2.268L4.33 7.288m6.406 1.18L7.288 4.33m0 0a9.024 9.024 0 0 0-1.652 1.306A9.025 9.025 0 0 0 4.33 7.288" />
                    </svg></a></li>
                    <li><a class="flex flex-col justify-center items-center hover:text-[#084ac5]  hover:decoration-[#084ac5] group" href="">گالری تصاویر<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 opacity-0 -translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg></a></li>
                    <li><a class="flex flex-col justify-center items-center hover:text-[#084ac5]  hover:decoration-[#084ac5] group" href="">وبلاگ<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 opacity-0 -translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12" />
                    </svg></a></li>
                    <li><a class="flex flex-col justify-center items-center hover:text-[#084ac5]  hover:decoration-[#084ac5] group" href="">راه های ارتباطی<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 opacity-0 -translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg></a></li>
                </ul>
            </div>
            <div class="  ">
                <button class="login hover:bg-[#48b9ff] duration-200 flex gap-1 justify-center items-center bg-[#0675ff] text-white p-3 rounded-xl"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  </svg>ورود به سامانه</button>
            </div>
        </div>    
    </div>
    <!-- main -->
    <div class="flex"> 
        <div class="flex bg-[#1e96ff] flex-col w-full items-center md:w-1/2 gap-6 justify-center py-6  px-2 ">
            <h1 class="text-wave inline-block bg-gradient-to-l from-[#0675ff] to-[#0e295d] bg-clip-text text-transparent font-bold text-2xl lg:text-3xl">مجموعه تفریحی ورزشی عفیف آباد</h1>
            <span class="leading-7 mx-2 text-gray-700">استخر عفیف‌آباد یک مجموعه‌ی آبی نوساز، تمیز و بسیار مجهز واقع در باغ عفیف‌آباد است. این مجموعه شامل استخر، سونا، جکوزی، حمام نمک، ماساژ و حمام ترکی می‌باشد. فضایی آرام و بهداشتی برای یک تجربه‌ی کامل از آرامش و سلامت فراهم شده است.</span>
            <div>
              <!-- <form id="newsletter-form">
                <input id="phone-number" name="number" class="placeholder:text-gray-300 caret-white focus:outline-none text-gray-700 text-lg font-thin placeholder:font-thin placeholder:text-lg border-b border-white" type="text" placeholder="09XXXXX6789">
                <button type="submit" class="hover:bg-[#48b9ff] duration-200 justify-center items-center bg-white text-gray-600 p-3 w-25 rounded-xl">عضویت</button>
                <div id="result"></div>
              </form> -->
              <form action="./php/subscribe.php" method="POST">
                <input id="phone-number" name="number" class="placeholder:text-gray-300 caret-white focus:outline-none text-gray-700 text-lg font-thin placeholder:font-thin placeholder:text-lg border-b border-white" type="text" placeholder="09XXXXX6789">
                <button type="submit" class="hover:bg-[#48b9ff] duration-200 justify-center items-center bg-white text-gray-600 p-3 w-25 rounded-xl">عضویت</button>
                <?php 
    // نمایش پیام توتیف اگه توی سشن باشه
    if (isset($_SESSION['message'])) {
        echo "<div id='toast' >" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']); // حذف پیام از سشن
    }
    ?>

              </form>
        


            </div>    
                <button class="flex  w-70 gap-1 justify-center items-center bg-[#0675ff] text-white p-3 rounded-xl hover:bg-[#48b9ff] duration-200"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
                </svg>خرید بلیت</button>
        </div>
 
        <div class="w-1/2 hidden md:block">
            <img class="w-full" src="/afifabadpool/img/ChatGPT Image Apr 6, 2025 at 08_38_49 PM.png" alt="" >
        </div>
    </div>
<!-- services -->
<div class="flex flex-col items-center">
    <h2 class="font-bold text-2xl text-gray-700 p-4">امکانات مجموعه</h2>
    <div class="grid grid-cols-3 md:grid-cols-3 gap-6 p-6 lg:px-20 xl:px-40  ">

        <!-- اتاق ماساژ -->
        <div class="md:bg-white md:shadow-lg p-4 md:rounded-xl transition-transform duration-300 md:hover:scale-105">
          <img class="block mx-auto w-25 " src="/afifabadpool/img/massage.png" alt="">
          <h3 class="text-lg md:font-semibold mt-4 text-center">اتاق ماساژ</h3>
          <p class="hidden md:block mt-2 text-gray-700 text-justify">ماساژ در محیطی آرام با روغن‌های مخصوص و پرسنل مجرب انجام می‌شود و باعث کاهش استرس و خستگی بدن می‌گردد.</p>
        </div>
      
        <!-- اتاق نمک -->
        <div class="md:bg-white md:shadow-lg p-4 md:rounded-xl transition-transform duration-300 md:hover:scale-105">
          <img class="block mx-auto w-25 " src="/afifabadpool/img/saltroom.png" alt="">
          <h3 class="text-lg md:font-semibold mt-4 text-center">اتاق نمک</h3>
          <p class="hidden md:block mt-2 text-gray-700 text-justify">اتاق نمک با طراحی خاص و خواص درمانی به بهبود تنفس و آرامش ذهن کمک می‌کند.</p>
        </div>
      
        <!-- استخر کودک -->
        <div class="md:bg-white md:shadow-lg p-4 md:rounded-xl transition-transform duration-300 md:hover:scale-105">
          <img class="block mx-auto w-25 " src="/afifabadpool/img/kidspool.png" alt="">
          <h3 class="text-lg md:font-semibold mt-4 text-center">استخر کودک</h3>
          <p class="hidden md:block mt-2 text-gray-700 text-justify">استخر کودک با عمق مناسب و نظارت کامل، محیطی امن و سرگرم‌کننده برای کودکان فراهم کرده است.</p>
        </div>
      
        <!-- حمام ترکی -->
        <div class="md:bg-white md:shadow-lg p-4 md:rounded-xl transition-transform duration-300 md:hover:scale-105">
          <img class="block mx-auto w-25 " src="/afifabadpool/img/bath.png" alt="">
          <h3 class="text-lg md:font-semibold mt-4 text-center">حمام ترکی</h3>
          <p class="hidden md:block mt-2 text-gray-700 text-justify">حمام ترکی با فضای گرم و سنتی خود، برای پاک‌سازی بدن و ایجاد آرامش کامل مناسب است.</p>
        </div>
      
        <!-- فروشگاه -->
        <div class="md:bg-white md:shadow-lg p-4 md:rounded-xl transition-transform duration-300 md:hover:scale-105">
          <img class="block mx-auto md w-25 " src="/afifabadpool/img/shop.png" alt="">
          <h3 class="text-lg md:font-semibold mt-4 text-center">فروشگاه</h3>
          <p class="hidden md:block mt-2 text-gray-700 text-justify">فروشگاه مجموعه انواع محصولات بهداشتی، ورزشی و خوراکی را با کیفیت عالی عرضه می‌کند.</p>
        </div>
      
        <!-- کافی‌شاپ -->
        <div class="md:bg-white md:shadow-lg p-4 md:rounded-xl transition-transform duration-300 md:hover:scale-105">
          <img class="block mx-auto w-25 " src="/afifabadpool/img/coffeshop.png" alt="">
          <h3 class="text-lg md:font-semibold mt-4 text-center">کافی‌شاپ</h3>
          <p class="hidden md:block mt-2 text-gray-700 text-justify">کافی‌شاپ مجموعه با دمنوش‌های سنتی و نوشیدنی‌های گرم، فضایی دل‌نشین برای استراحت فراهم کرده است.</p>
        </div>
      
      </div>
      
      
</div>
<!-- teaser -->
<div class="flex flex-col items-center gap-4 p-6">
    <h2 class="font-bold text-3xl text-gray-700">استخر عفیف‌آباد</h2>
    <span class="text-gray-700">مجموعه عفیف‌آباد، تلفیقی از آرامش، سلامت و خدمات حرفه‌ای در محیطی مدرن و دل‌نشین است.</span>
    <button id="sessionsbutton" class=" hover:bg-[#48b9ff] duration-200 flex gap-1 justify-center items-center bg-[#0675ff] text-white p-3 rounded-xl">مشاهده سانس ها</button>
    <video class="w-full" src="" controls ></video>
</div>

<!--  -->

<div id="sessionsform" class="fixed inset-0 items-center justify-center z-50 hidden">
  <div class="bg-amber-400  p-6 rounded-lg w-full max-w-md relative flex flex-col gap-2 items-center">
    <button id="closesessions" class="absolute top-2 right-2 text-gray-800 hover:text-black">
      ✖
    </button>
    <h1>گزینه مورد نظر را انتخاب کنید</h1>
    <button class=" hover:bg-[#48b9ff] duration-200 flex gap-1 justify-center items-center bg-[#0675ff] text-white p-3 rounded-xl">سانس های آموزشی</button>
  
    <button class=" hover:bg-[#48b9ff] duration-200 flex gap-1 justify-center items-center bg-[#0675ff] text-white p-3 rounded-xl">سانس های عمومی</button>
  </div>
</div>  

<!-- login form -->
  
  <!-- بک‌گراند تیره و فرم -->
  <!-- <div id="loginform" class="fixed inset-0 items-center justify-center z-50 hidden ">
    <div class="shadow-2xl bg-[#b5e3ff]/40  backdrop-blur-md   p-6 rounded-lg w-full max-w-md relative">
       -->
      <!-- دکمه بستن -->
      <!-- <button id="closelogin" class="absolute top-2 right-2 text-gray-800 hover:text-black">
        ✖
      </button>
   -->
      <!-- فرم
      <h2 class="text-2xl font-semibold mb-4 text-center text-gray-800">ورود به حساب</h2>
      <form>
        <input type="text" placeholder="شماره موبایل" class="caret-text-gray-600 focus:outline-none border-0 bg-white/40 placeholder:text-gray-600  w-full  p-2 rounded mb-3" />
        <input type="password" placeholder="رمز عبور" class="caret-text-gray-600 focus:outline-none border-0 bg-white/40 placeholder:text-gray-600 w-full p-2 rounded mb-3" />
        <button type="submit" class="hover:bg-[#48b9ff] duration-200  bg-[#0675ff] text-white w-full p-2 rounded">ورود</button>
      </form>
      <br><hr class="text-white"><br> 
      <button type="button" class="w-full flex items-center justify-center gap-2 border border-gray-300 hover:bg-white bg-white/60 text-gray-700 font-semibold py-2 px-4 rounded mb-4">
        <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="Google" class="w-5 h-5" />
        ورود با حساب گوگل
      </button>
      
    </div>
  </div> -->
  <!--sign up form -->

  <!-- بک‌گراند تیره و فرم ورود -->
<div id="loginform" class="fixed inset-0 items-center justify-center z-50 hidden">
  <div class="shadow-2xl bg-[#b5e3ff]/40 backdrop-blur-md p-6 rounded-lg w-full max-w-md relative">
    
    <button id="closelogin" class="absolute top-2 right-2 text-gray-800 hover:text-black">
      ✖
    </button>

    <h2 class="text-2xl font-semibold mb-4 text-center text-gray-800">ورود به حساب</h2>
    <form id="login-form" action="./php/login.php" method="POST">
      <input id="phone-email" name="email_or_phone" type="text" placeholder="ایمیل یا شماره موبایل" class="caret-text-gray-600 focus:outline-none border-0 bg-white/40 placeholder:text-gray-600  w-full  p-2 rounded mb-3" />
      <input id="password" name="password" type="password" placeholder="رمز عبور" class="caret-text-gray-600 focus:outline-none border-0 bg-white/40 placeholder:text-gray-600  w-full  p-2 rounded mb-3" />
      <button type="submit" class="bg-[#0675ff] text-white w-full p-2 rounded">ورود</button>
    </form> 
    <br><hr class="text-white"><br>
    <button type="button" class="w-full flex items-center justify-center gap-2 border border-gray-300 hover:bg-white bg-white/60 text-gray-700 font-semibold py-2 px-4 rounded mb-4 ">
      <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="Google" class="w-5 h-5" />
      ورود با حساب گوگل
    </button>
    
    <button id="signup-btn" class="w-full bg-green-500 text-white p-2 rounded mt-3">عضویت</button>
  </div>
</div>

<!-- فرم ثبت‌نام پاپ‌آپ -->
<div id="signupform" class="fixed inset-0 items-center justify-center z-50 hidden">
  <div class="shadow-2xl bg-[#b5e3ff]/40 backdrop-blur-md p-6 rounded-lg w-full max-w-md relative">
    
    <button id="closeregister" class="absolute top-2 right-2 text-gray-800 hover:text-black">
      ✖
    </button>

    <h2 class="text-2xl font-semibold mb-4 text-center text-gray-800">ثبت‌نام</h2>
    <form id="signup-form" action="./php/user.php" method="POST">
      <input id="register-phone-email" name="email_or_phone" type="text" placeholder="ایمیل یا شماره موبایل" class="caret-text-gray-600 focus:outline-none border-0 bg-white/40 placeholder:text-gray-600  w-full  p-2 rounded mb-3" />
      <input id="register-password" name="password" type="password" placeholder="رمز عبور" class="caret-text-gray-600 focus:outline-none border-0 bg-white/40 placeholder:text-gray-600  w-full  p-2 rounded mb-3" />
      <button type="submit" class="bg-[#0675ff] text-white w-full p-2 rounded">ثبت‌نام</button>
    </form>
  </div>
</div>

<!-- footer -->
<footer class="flex flex-col items-center bg-[#084ac5] text-white">
    <div>
        <ul class="flex items-center p-6 gap-3 text-sm font-light md:text-lg md:font-normal md:gap-6  "> 
            <li><a class="flex flex-col justify-center items-center hover:text-[#b5e3ff] " href="">صفحه اصلی</a></li>
            <li><a class="flex flex-col justify-center items-center hover:text-[#b5e3ff] " href="">خدمات مجموعه</a></li>
            <li><a class="flex flex-col justify-center items-center hover:text-[#b5e3ff] " href="">آموزش شنا</a></li>
            <li><a class="flex flex-col justify-center items-center hover:text-[#b5e3ff] " href="">گالری تصاویر</a></li>
            <li><a class="flex flex-col justify-center items-center hover:text-[#b5e3ff] " href="">وبلاگ</a></li>
            <li><a class="flex flex-col justify-center items-center hover:text-[#b5e3ff] " href="">راه های ارتباطی</a></li>
        </ul>  
    </div>
    <div class="flex  p-4">
        <a href="" class="px-2 group flex flex-col items-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 hover:text-[#b5e3ff]">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
          </svg><span class="p-2 text-sm rounded-lg  bg-[#b5e3ff] text-gray-900 opacity-0 group-hover:opacity-100 transition duration-300">
            ایمیل
          </span></a>
        <a href="" class="px-2 group flex flex-col items-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 hover:text-[#b5e3ff]">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
          </svg><span class="p-2 text-sm rounded-lg  bg-[#b5e3ff] text-gray-900 opacity-0 group-hover:opacity-100 transition duration-300">
            ارسال پیام
          </span></a>
        <a href="" class="px-2 group flex flex-col items-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 hover:text-[#b5e3ff]">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
          </svg><span class="p-2 text-sm rounded-lg  bg-[#b5e3ff] text-gray-900 opacity-0 group-hover:opacity-100 transition duration-300">
            آدرس
          </span></a>
        <a href="" class="px-3 group flex flex-col items-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 hover:text-[#b5e3ff]">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
          </svg>
          <span class="p-2 text-sm rounded-lg  bg-[#b5e3ff] text-gray-900 opacity-0 group-hover:opacity-100 transition duration-300">
            تماس
          </span></a>

    </div>
    <div class="flex gap-4 bg-amber-50 p-4 rounded-2xl">
        <img src="/afifabadpool/img/namad.png" alt="">
        <img src="/afifabadpool/img/namad.png" alt="">
        <img src="/afifabadpool/img/namad.png" alt="">
    </div>
    <div >
        <br>
        <hr class="w-full">
        <p class="p-2 font-thin text-lg  ">طراحی توسط x کلیه حقوق محفوط است</p>
    </div>
</footer>
 
    <!-- JS -->
    <script src="./script/js.js" ></script>
    
  

    
</body>
</html>