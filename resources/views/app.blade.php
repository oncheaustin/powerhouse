<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Ceo crib</title>
        <link rel="stylesheet" href="/assets/css/style.css">
        
    </head>
    <body class="" >
    <header class="sticky top-0 z-20 " style="background-image: url(assets/img/splash-bg.png) ; background-size: cover;  background-position: top; background-blend-mode: hard-light;  " >
        <div class="container   mx-auto py-4 w-[90%]   flex lg:grid lg:grid-cols-7 justify-between items-center">
         
            <div class="lg:col-span-4 lg:ml-20 flex items-center">
                <img src="assets/img/ceo-logo.png" alt="">
                <h1 class=" text-sm  text-white title font-inkut">POWER HOUSE</h1>
            
            </div>
            <ul class="lg:col-span-3 hidden lg:flex gap-10 xl:gap-20 text-white text-sm">
                <li>
                    <a href="">HOME</a>    
                </li>
                <li>
                    <a href="">ABOUT</a>    
                </li>
                <li>
                    <a href="">WHAT WE DO</a>    
                </li>
                <li>
                    <a href="">FAQs</a>    
                </li>
            </ul>
            <!-- <div class="hidden lg:flex ">
                <button class="register text-white py-2 px-8 col-span-1 text-base ">Register</button>
            </div> -->
            <div class="lg:hidden cursor-pointer">
                <img src="images/open-nav.png" alt="">
                <h2></h2>
            </div>
        </div>
        
    </header>
    <!-- hero section -->
    <div class="flex  justify-center h-[450px] bg-no-repeat"  style="background-image: url(assets/img/hero-backg.png); background-size:cover;   object-fit: cover;  ">
        <div>
        <div class="">
            <h1 class="font-inter font-semibold text-4xl text-white pt-32">BRING INNOVATION TO YOUR AREA</h1>
            <p class="font-inknut text-white text-xl pt-5">The Biggest Entrepreneurial Reality TV Show in Africa</p>
            <button class=" scroll-down-right-animation button text-left text-sm px-5 py-1 mt-5 outline outline-white outline-1">Learn More</button>
        </div>
        </div>
        

    </div>
    <!-- middle section -->
    <div class=" " style="background-image: url(assets/img/splash-bg.png) ; background-size: cover;  " >
        <div class="flex flex-col-reverse lg:grid grid-cols-2 py-10 w-[80%] mx-auto   items-center gap-20">
            <div class="text-white space-y-5 scroll-down-left-animation ">
                <h1 class="font-inknut  text-4xl pb-5">Season One</h1>
                <P>Are you a game-changing Entrepreneur? </P>
                <p >
                    Do you have what it takes to be on CEO’s CRIB Season 1, The Game -Changer? It does not matter what your business idea is all about or its focus, but if you are a game-changer, then the Season 9 is for you; loaded with an attractive Grand Prize
                </p>
                <div class="py-20">
                    <button class="scroll-down-right-animation button px-6 py-1 outline outline-white outline-1">Read More</button>
                </div>
            </div>
            <div class="scroll-down-right-animation">
                <img class="w-[400px]" src="assets/img/man-about.png" alt="">
            </div>
        </div>
        <div class="mt-10 ">
            <div class="py-10 bg-fixed" style="background-image: url(assets/img/skyscrapper.png)">
                <h1 class="font-inknut text-center text-3xl pb-5 text-white scroll-down-right-animation">Works and features</h1>
            </div>
        </div> 
    </div>
    <div class="mix-blend-multiply" style="background-image: url(assets/img/splash-bg.png) ; background-size: cover; background-position: center center  ">
        <!-- from your host -->
        <div class="pt-10">
            <h1 class="font-inknut text-center text-2xl pb-5 text-white">From your Host</h1>
        </div>
        <figure class=" relative w-[80%] mx-auto xl:w-[50%] ">
         <!-- HTML 5 Video -->
            <div class=" rounded-2xl  h-full w-full">
                <img src="assets/img/cd-welcome.png" alt="" class=" object-cover">

            </div>
            <figcaption class="absolute flex flex-col h-full w-full m-auto top-0 left-0">
                <div class="  m-auto ">
                    <img src="assets/img/blue-play.png" alt="" class=" mx-auto w-10">
                    <p class="mx-auto h-full w-full text-white font-semibold text-sm md:text-xl  text-center hidden md:block">
                        “Shifting powers to local actors via institutional capacity strengthening” 
                        <span class="text-center  font-normal text-base block" style="color:#FFFFFFCC; margin-top:10px">Christopher CHINEDUMUIJE, PhD, FBU.</span>
                    </p>
                </div>
                
            </figcaption>
            <!-- <video id="player2" playsinline controls data-poster="{{ asset('assets/img/cd-welcome.png') }}" controlsList="nodownload">
                <source src="{{ asset('/video/preview/1.mp4') }}" type="video/mp4" >
                        
                
            </video> -->
        </figure>
        <!-- the process -->
        <div class="my-10 py-10" style="background: rgba(0, 0, 0, 0.22);">
            <h1 class="font-inknut text-center text-2xl pb-5 text-white">The Process</h1>
            <ul class="text-white space-y-5  flex flex-col justify-center">
                <li class=" flex flex-col justify-center items-center scroll-down-left-animation">
                    <div class="h-[1px] line-grad w-1/5 mx-auto "></div>
                    <div class="text-center py-5 flex gap-5 justify-center  items-center" >
                        <h1 class=" text-5xl font-ledger" >01</h1>
                        <p class="text-xl font-inknut">SEEP TRAIN</p>
                    </div>
                    <div class="h-[1px] line-grad w-1/5 mx-auto  "></div>
                </li>
                <li class=" flex flex-col justify-center items-center scroll-down-left-animation del">
                    <!-- <div class="h-[1px] line-grad w-1/5 mx-auto "></div> -->
                    <div class="text-center py-5 flex gap-5 justify-center " >
                        <h1 class=" text-5xl font-ledger" >02</h1>
                        <p class="text-xl font-inknut">SEEP TRAIN</p>
                    </div>
                    <div class="h-[1px] line-grad w-1/5 mx-auto  "></div>
                </li>
                <li class=" flex flex-col justify-center items-center scroll-down-left-animation del">
                    <!-- <div class="h-[1px] line-grad w-1/5 mx-auto "></div> -->
                    <div class="text-center py-5 flex gap-5 justify-center " >
                        <h1 class=" text-5xl font-ledger" >03</h1>
                        <p class="text-xl font-inknut">SEEP TRAIN</p>
                    </div>
                    <div class="h-[1px] line-grad w-1/5 mx-auto  "></div>
                </li>
                <li class=" flex flex-col justify-center items-center scroll-down-left-animation del">
                    <!-- <div class="h-[1px] line-grad w-1/5 mx-auto "></div> -->
                    <div class="text-center py-5 flex gap-5 justify-center " >
                        <h1 class=" text-5xl font-ledger" >04</h1>
                        <p class="text-xl font-inknut">SEEP TRAIN</p>
                    </div>
                    <div class="h-[1px] line-grad w-1/5 mx-auto  "></div>
                </li>
                
                
            </ul>
        </div>
        <!-- judges -->
        <div class="pb-20" style="background: rgba(9, 0, 64, 0.39);">
            <h1 class="font-inknut text-center text-2xl py-10 text-white scroll-down-right-animation">Meet Our Judges</h1>
            <div class="flex justify-center p-5 gap-x-2 p ">
                <div class="scroll-down-left-animation del">
                    <img class="w-32 h-32 rounded-lg  " src="assets/img/judge-1.png" alt="">
                </div>
                <div class="scroll-down-left-animation del">
                    <img class="w-32 h-32 rounded-lg " src="assets/img/judge-2.png" alt="">
                </div>
                <div class="scroll-down-left-animation del">
                    <img class="w-32 h-32 rounded-lg " src="assets/img/judge-3.png" alt="">
                </div>
                <div class="scroll-down-left-animation del">
                    <img class="w-32 h-32 rounded-lg " src="assets/img/judge-4.png" alt="">
                </div>
                <div class="scroll-down-left-animation del">
                    <img class="w-32 h-32 rounded-lg " src="assets/img/judge-5.png" alt="">
                </div>
            </div>
            <div class="flex justify-center gap-x-3 mb-2">
                <h1 class=" text-lg font-inknut text-white" >Success managers</h1>

                <svg class="animate-pulse" xmlns="http://www.w3.org/2000/svg" width="24" height="23" viewBox="0 0 34 33" fill="none">
                    <path d="M17 1.5L17.78 9.01397C18.1475 12.5542 20.9458 15.3525 24.486 15.72L32 16.5L24.486 17.28C20.9458 17.6475 18.1475 20.4458 17.78 23.986L17 31.5L16.22 23.986C15.8525 20.4458 13.0542 17.6475 9.51397 17.28L2 16.5L9.51397 15.72C13.0542 15.3525 15.8525 12.5542 16.22 9.01397L17 1.5Z" fill="#4BE1F4"/>
                    <path d="M17 1.5L17.78 9.01397C18.1475 12.5542 20.9458 15.3525 24.486 15.72L32 16.5L24.486 17.28C20.9458 17.6475 18.1475 20.4458 17.78 23.986L17 31.5L16.22 23.986C15.8525 20.4458 13.0542 17.6475 9.51397 17.28L2 16.5L9.51397 15.72C13.0542 15.3525 15.8525 12.5542 16.22 9.01397L17 1.5Z" stroke="#4BE1F4" stroke-width="2.3097" stroke-linejoin="round"/>
                </svg>
                <h1 class=" text-lg font-inknut text-white" >Knowledge base</h1>
                
            </div>
            <div class="flex justify-center gap-x-3 mb-2">
                <h1 class=" text-lg font-inknut text-white" >Education</h1>

                <svg class="animate-pulse" xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 34 33" fill="none">
                    <path d="M17 1.5L17.78 9.01397C18.1475 12.5542 20.9458 15.3525 24.486 15.72L32 16.5L24.486 17.28C20.9458 17.6475 18.1475 20.4458 17.78 23.986L17 31.5L16.22 23.986C15.8525 20.4458 13.0542 17.6475 9.51397 17.28L2 16.5L9.51397 15.72C13.0542 15.3525 15.8525 12.5542 16.22 9.01397L17 1.5Z" fill="#FFFBA8"/>
                    <path d="M17 1.5L17.78 9.01397C18.1475 12.5542 20.9458 15.3525 24.486 15.72L32 16.5L24.486 17.28C20.9458 17.6475 18.1475 20.4458 17.78 23.986L17 31.5L16.22 23.986C15.8525 20.4458 13.0542 17.6475 9.51397 17.28L2 16.5L9.51397 15.72C13.0542 15.3525 15.8525 12.5542 16.22 9.01397L17 1.5Z" stroke="#FFFBA8" stroke-width="2.3097" stroke-linejoin="round"/>
                </svg>
                <svg class="animate-pulse" xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 34 33" fill="none">
                    <path d="M17 1.5L17.78 9.01397C18.1475 12.5542 20.9458 15.3525 24.486 15.72L32 16.5L24.486 17.28C20.9458 17.6475 18.1475 20.4458 17.78 23.986L17 31.5L16.22 23.986C15.8525 20.4458 13.0542 17.6475 9.51397 17.28L2 16.5L9.51397 15.72C13.0542 15.3525 15.8525 12.5542 16.22 9.01397L17 1.5Z" fill="#A36FFE"/>
                    <path d="M17 1.5L17.78 9.01397C18.1475 12.5542 20.9458 15.3525 24.486 15.72L32 16.5L24.486 17.28C20.9458 17.6475 18.1475 20.4458 17.78 23.986L17 31.5L16.22 23.986C15.8525 20.4458 13.0542 17.6475 9.51397 17.28L2 16.5L9.51397 15.72C13.0542 15.3525 15.8525 12.5542 16.22 9.01397L17 1.5Z" stroke="#A36FFE" stroke-width="2.3097" stroke-linejoin="round"/>
                </svg>
                <h1 class=" text-lg font-inknut text-white" >Tutorials</h1>
                <svg class="animate-pulse" xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 34 33" fill="none">
                    <path d="M17 1.5L17.78 9.01397C18.1475 12.5542 20.9458 15.3525 24.486 15.72L32 16.5L24.486 17.28C20.9458 17.6475 18.1475 20.4458 17.78 23.986L17 31.5L16.22 23.986C15.8525 20.4458 13.0542 17.6475 9.51397 17.28L2 16.5L9.51397 15.72C13.0542 15.3525 15.8525 12.5542 16.22 9.01397L17 1.5Z" fill="#FFFBA8"/>
                    <path d="M17 1.5L17.78 9.01397C18.1475 12.5542 20.9458 15.3525 24.486 15.72L32 16.5L24.486 17.28C20.9458 17.6475 18.1475 20.4458 17.78 23.986L17 31.5L16.22 23.986C15.8525 20.4458 13.0542 17.6475 9.51397 17.28L2 16.5L9.51397 15.72C13.0542 15.3525 15.8525 12.5542 16.22 9.01397L17 1.5Z" stroke="#FFFBA8" stroke-width="2.3097" stroke-linejoin="round"/>
                </svg>
                <h1 class=" text-lg font-inknut text-white" >Events</h1>
            </div>
            <div class="flex justify-center gap-x-3 mb-2">
                <h1 class=" text-lg font-inknut text-white" >Smart Contract development</h1>

                <svg class="animate-pulse" xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 34 33" fill="none">
                    <path d="M17 1.5L17.78 9.01397C18.1475 12.5542 20.9458 15.3525 24.486 15.72L32 16.5L24.486 17.28C20.9458 17.6475 18.1475 20.4458 17.78 23.986L17 31.5L16.22 23.986C15.8525 20.4458 13.0542 17.6475 9.51397 17.28L2 16.5L9.51397 15.72C13.0542 15.3525 15.8525 12.5542 16.22 9.01397L17 1.5Z" fill="#FF8135"/>
                    <path d="M17 1.5L17.78 9.01397C18.1475 12.5542 20.9458 15.3525 24.486 15.72L32 16.5L24.486 17.28C20.9458 17.6475 18.1475 20.4458 17.78 23.986L17 31.5L16.22 23.986C15.8525 20.4458 13.0542 17.6475 9.51397 17.28L2 16.5L9.51397 15.72C13.0542 15.3525 15.8525 12.5542 16.22 9.01397L17 1.5Z" stroke="#FF8135" stroke-width="2.3097" stroke-linejoin="round"/>
                </svg>
                <h1 class=" text-lg font-inknut text-white" > Guides</h1>
                
            </div>
        </div>
        <!-- sponsors -->
        <div class="">
            <div class="py-5 bg-fixed" style="background-image: url(assets/img/skyscrapper.png)">
                <h1 class="font-inknut text-center text-2xl pb-5 text-white scroll-down-right-animation">Esteemed Sponsors</h1>
            </div>
        </div> 
        <!-- list sponsors -->
        
        <div class="bg-white">
            <div class=" scroller">
                <div class="scroller-inner">
                    <img src="assets/img/industry-bank.png" alt="">
                    <img src="assets/img/zenith-bank.png" alt="">
                    <img src="assets/img/glo.png" alt="">
                    <img src="assets/img/ivm.png" alt="">
                    <img src="assets/img/multichoice.png" alt="">
                    <img src="assets/img/air-peace.png" alt="">
                    <img src="assets/img/fede-trade.png" alt="">
                    <img src="assets/img/fed-finance.png" alt="">
                </div>
            </div>
        </div>
        <!-- gallery -->
        
        
    </div>
    <div class="pb-10" style="background-image: url(assets/img/splash-bg.png) ; background-size: cover; background-position:center  bottom  ">
        <div class="py-10">
            <h1 class="font-inknut text-center text-2xl py-5 text-white scroll-down-right-animation">Visit our Gallery </h1>
            <div class="h-[900px]">
                <div class="grid grid-cols-4 grid-flow-dense  relative h-full w-[60%] m-auto py-10 gap-2 gallery" style="">
                    <div class="  pl-20  relative h-auto w-full overflow-hidden ">
                        <img class=" pt-10 h-full w-full object-cover" src="assets/img/pic-1.png" alt="">
                    </div>
                    <div class=" relative h-auto w-full overflow-hidden">
                        <img class=" h-full w-full object-cover" src="assets/img/pic-4.png" alt="yellow-girl">
                    </div>
                    <div class="relative h-auto w-full overflow-hidden">
                        <img class="mt-20 h-full w-full object-cover" src="assets/img/pic-5.png" alt="standing-laptop girl">
                    </div>
                    <div class=" relative h-auto w-full overflow-hidden">
                        <img class="mt-24 h-full w-full object-cover" src="assets/img/pic-6.png" alt="blue suit lady">
                    </div>
                    <div class=" row-span-2 mb-56 relative h-auto w-full overflow-hidden">
                        <img class="h-full w-full object-cover" src="assets/img/pic-8.png" alt="two men">
                    </div>
                    <div class=" relative h-auto w-full overflow-hidden">
                        <img class="h-full w-full object-cover" src="assets/img/pic-2.png" alt="black sitting woman">
                    </div>
                    <div class="row-span-2 mb-20 relative h-auto w-full overflow-hidden">
                        <img class="h-full w-full object-cover" src="assets/img/pic-3.png" alt="writing man">
                    </div>
                    <div class=" pr-12 relative h-auto w-full overflow-hidden">
                        <img class="h-full w-full object-cover" src="assets/img/pic-9.png" alt="suit man">
                    </div>
                    <!-- <div></div> -->
                    <div class="  relative h-auto w-full overflow-hidden">
                        <img class="h-full w-full object-cover " src="assets/img/pic-7.png" alt="laptop-girl">
                    </div>
                </div>
            </div>
            
        </div>
        <div class="pb-5">
            <div class="py-20 " style="background-image: url(assets/img/skyscrapper.png)">
            <div class="bg-fixed lg:flex gap-10 items-center w-[90%] lg:w-[70%] mx-auto">
                <div class="">
                    <h1 class="font-inknut  text-2xl  text-white">Sign up for our newsletter</h1>
                    <p class="text-white ">Be the first to know about releases and industry news and insights.</p>
                </div>
                <div>
                    <form class="md:flex items-center " action="">
                        <input class="w-72 lg:w-96 rounded-md  p-3 focus:outline-none placeholder:text-[#000000B2] " type="text" name="" id="" placeholder="Your Email Here">
                        <button class="scroll-down-right-animation ml-5 button px-10 py-3 text-sm border outline outline-white outline-1">Subscribe</button>
                    </form>
                </div>
            </div>
                
            </div>
        </div> 
    </div>
    <footer class="bg-[#270F49] text-white">
        <div class="grid lg:grid-cols-2 w-[70%] mx-auto py-20 ">
            <div>
                <div class="flex pb-5">
                    <img src="assets/img/ceo-logo.png" alt="">
                    <h1 class="  text-sm  text-white font-semibold title font-inkut">POWER HOUSE</h1>
                </div>
                <h1 class="font-medium pb-5">Quick links</h1>
                <ul class="space-y-3 text-white text-opacity-70">
                    <li>Our Organization</li>
                    <li>Become a volunteer</li>
                    <li>Projects</li>
                    <li>Events</li>
                    <li>Picture gallery</li>
                </ul>
            </div>
            <div class="flex  justify-end">
                <div class="space-y-3 text-white ">
                    <h1 class="   text-bold text-lg  text-white font-bold title font-inkut">Contact</h1>
                    <p>No 2, Barcelona Street, Suncity Estate Abuja</p>
                    <p>+234 8037 509 822</p>
                    <p>HELLO@Goalprimeedu@gmail.com</p>
                    <div class="grid grid-cols-4 gap-2">
                    <img src="" alt="">
                </div>
                <p class="text-white text-base inline-flex">Privacy Policy</p>
                <p class="text-white text-base pl-10 inline-flex">Help/FAQ</p>
                
                </div>
                
            </div>
            
        </div>
        <h4 class="text-center font-bold pb-5">Copyright (2023) @ <span class="text-[#E3CD00]">GOALPrime</span>  Organization Nigeria</h4>
    </footer>
        <script src="/assets/js/main.js"></script>
    </body>
</html>
