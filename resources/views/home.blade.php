@extends('layout.frontend')
@section('title')
GOALPrime Nigeria - A Better Humanity is Possible
@endsection
@section('fcontent')
    <main class="bg-black">
        @include('includes.hero')

        <!-- startup section -->
        <section class=" mt-20 " >
            <div class="relative flex flex-col-reverse lg:grid grid-cols-12 lg:py-5 lg:pr-5 w-[80%] max-w-screen-xl  mx-auto items-start  gap-10 lg:border-t lg:rounded-tr-[40px] border-white   ">
                <div class="hidden lg:block border-white border-l right-0 absolute top-8 bottom-1/2 rounded-tr-[50px]"></div>
                <div class=" lg:col-span-5 text-white space-y-5 scroll-down-left-animation ">
                    <h1 class="hidden font-inter max-w-sm mb-8 text-3xl font-semibold md:text-4xl leading-normal tracking-tight lg:flex justify-center lg:justify-start ">
                        2.2 Billion Naira
                        Business Startup
                    </h1>
                    <p class="leading-loose md:text-lg text-justify" >
                        40 Powerhouse mates are empowered to deploy local innovations to deliver national solutions. Who will emerge the Powerhouse Colossus to access <strong>N200 million</strong>  business or Industry solution start-up capital, up to <strong>N1 Billion</strong> or more venture capital and another <strong>N1 Billion</strong> infrastructure credit?
                    </p>
                    <div class="py-20">
                        <button class="scroll-down-right-animation text-center text-lg px-20 py-3 font-medium  outline outline-white outline-1 bg-transparent hover:text-gray-900 hover:bg-gray-100">Sign Up</button>
                    </div>
                </div>
                <div class="grid justify-center lg:justify-end lg:col-span-7 scroll-down-right-animation ">
                    <h1 class="lg:hidden text-white font-inter max-w-md mb-8 text-3xl font-semibold md:text-4xl leading-normal tracking-tight flex justify-center lg:justify-start ">
                        2.2 Billion Naira 
                        Business Startup
                    </h1>
                    <img class="w-[400px] " src="assets/img/two-billion-man.png" alt="">
                </div>
            </div>
       
        </section>

        <!-- focus section -->
        @include('includes.focus')

        <!-- schedule -->
        <section style="background: linear-gradient(112deg, #02004B 7.95%, #2B0027 82.14%);">
            <div class="w-[80%] max-w-screen-xl mx-auto pt-10 lg:pt-32 pb-5 lg:pb-10">
                <div class="scroll-up">
                    <h1 class="font-inknut font-bold  text-2xl sm:text-5xl pb-5 lg:pb-20 text-center text-white">Schedule</h1>
                </div>
                <div class="flex gap-20  lg:p-20 pb-0 lg:bg-[url('/public/assets/img/bg-blue.png')] bg-cover" >
                    <div class="text-white">
                        <div class="text-center py-5 flex gap-5 justify-center  items-center" >
                            <h1 class="text-4xl sm:text-5xl xl:text-7xl font-ledger " >01</h1>
                            <p class="text-2xl md:text-3xl font-inknut">SEEP TRAIN</p>
                        </div>
                        <ul class="space-y-5 md:text-xl block font-ledger text-justify ">
                            <li>1st stage: Contestants are required to fill out the registration form on the website </li>
                            <li>2nd stage: Successful Contestants will be notified and invited to State Auditions</li>
                            <li>3rd stage: Successful Contestants will be notified and invited to State Auditions</li>
                        </ul>
                        <!-- <div class="flex justify-center md:justify-start">
                            <button class=" text-center text-lg px-10 py-2 mt-20 lg:mt-32 mb-5 font-medium  outline outline-white outline-1 bg-white text-black">Read More</button>
                        </div> -->

                    </div>
                    <img class="hidden lg:block" src="assets/img/seep-standing-man.png" alt="">
                </div>
            </div>
        </section>
        <!-- auditions -->
        <section style="background: linear-gradient(237deg, #040035 24.23%, rgba(34, 32, 54, 0.89) 79.26%);">
            <div class="grid lg:grid-cols-2 justify-between items-center w-[80%] max-w-screen-xl mx-auto py-10 gap-10">
                <div class="lg:hidden text-center py-5 text-white flex gap-2 md:gap-5 justify-center  items-center" >
                    <h1 class=" text-4xl sm:text-5xl xl:text-7xl font-ledger" >02</h1>
                    <p class="text-2xl md:text-3xl font-inknut">Auditions</p>
                </div>
                <div class="flex justify-center md:justify-start mb-4 lg:mb-0 scroll-down-left-animation">
                    <img class="w-[400px] " src="assets/img/black-official-lady.png" alt="">
                </div>
                <div class="text-white scroll-down-right-animation">
                    <div class="hidden text-center py-5 lg:flex gap-5 justify-center  items-center" >
                        <h1 class=" text-7xl font-ledger" >02</h1>
                        <p class="text-3xl font-inknut">Auditions</p>
                    </div>
                    <p class="leading-loose md:text-xl text-justify">
                        774 contestants who scaled through the SEEP Train virtual auditioning phase from the various LGA Auditions are invited for the State Level Virtual Audition where they pitch to the POWERHOUSE Audition panel of judges. Each state virtual audition produces a prospective POWERHOUSE mate who represents the state (36 states + FCT) in the POWERHOUSE. <br>
                        Also, the panel of judges select the three best runners up who joins the 37 winning pitchers, raising the number of prospective POWERHOUSE mates to 40.
                    </p>
                </div>
            </div>
        </section>
        <!-- power pitches -->
        <section class="py-20  lg:bg-[url('/public/assets/img/mansion-bg.png')] " style="background: linear-gradient(131deg, #171162 16.86%, #010007 80.15%);">
            <div class=" relative flex flex-col-reverse lg:grid grid-cols-12 lg:py-5 lg:pr-5 w-[80%] max-w-screen-xl  mx-auto items-start  gap-10 lg:border-t lg:rounded-tr-[40px] border-white ">
                <div class="hidden lg:block border-white border-l right-0 absolute top-8 bottom-1/2 rounded-tr-[50px]"></div>
                <div class="text-white md:text-xl leading-loose col-span-7 scroll-down-left-animation">
                    <div class=" hidden text-start py-5 lg:flex gap-5 justify-center lg:justify-start  items-center" >
                        <h1 class=" text-7xl font-ledger" >03</h1>
                        <p class="text-3xl font-inknut">POWER PITCHES</p>
                    </div>
                    <div id="dot">
                        <p class="text-justify ">
                            The POWERHOUSE would host 40 housemates who scaled through the virtual state-level auditions. All the housemates would access extensive capacity building from industry experts and deliver the finest pitches aimed at delivering sustainable solutions to prevailing national issues across different sectors of concern. There shall be three different stages:
                        </p>
                        <ol class="md:text-2xl pt-5 space-y-3 font-medium">
                            <li class="text-[#DBFF00]">1. The Chairman Stage</li>
                            <li class="text-[#283EFF]">2. Gubernatorial Stage</li>
                            <li class="text-[#FF3434]">3. Presidential Stage</li>
                        </ol>
                    </div>
                    
                    <div id="more" class="hidden space-y-2 ">
                        <p class="leading-loose text-justify ">
                        <p >
                        The PowerHouse would host 40 housemates who scaled through the SEEP Train audition. All the housemates would access extensive capacity building from industry experts and deliver the finest pitches aimed at delivering sustainable solutions to prevailing national issues across different sectors of concern. There shall be three different stages:
                        </p>
                        <p class="leading-loose text-justify ">
                            <span class="text-[#DBFF00]">1. The Chairman Stage: </span> Forty Participants get paired as business partners into Twenty groups. The partners deliver pitches aimed at providing solutions to prevailing issues at their respective local government areas. Partners with the Ten most outstanding pitches scale through to the Gubernatorial Stage.
                        </p>
                        <p class="leading-loose text-justify ">
                        <span class="text-[#283EFF]">2. Gubernatorial Stage:</span>  The Twenty housemates who scale through to the Gubernatorial Stage are empowered to deliver pitches aimed at providing state-level solutions to prevailing state-level issues. The housemates at this stage get the opportunity to interact with their respective State Governors who share with them prevailing issues in their states, as well as the State Government’s priorities. Housemates with the Ten most outstanding pitches scale through to the Presidential Stage.
                        </p>
                        <p class="leading-loose text-justify ">
                        <span class="text-[#FF3434]">3. Presidential Stage:</span>  The Ten housemates who made it to the Presidential Stage are challenged to deliver pitches aimed at providing federal solutions. The pitches would be aimed at innovative solutions delivery at the Ministerial level for the priority ministries for the edition. The housemates at this stage get to interact with the Ministers for the priority Ministries who share with them prevailing issues and the Ministry’s priorities upon which the innovative pitches are made. The Four most outstanding pitches make it to the Grand Finale for the battle of the UltimatePOWERHOUSE Colossus.
                        </p>
                    </div>
                    <button onclick="toggleText()" id="button" class="  text-center text-lg px-10 py-2 mt-10 font-medium  outline outline-white outline-1 bg-transparent text-white">Read More</button>
                </div>
                <div class="flex flex-col justify-center lg:justify-end col-span-5">
                    <div class="scroll-up lg:hidden text-center text-white py-5 flex gap-2 justify-center lg:justify-start  items-center" >
                        <h1 class=" text-4xl sm:text-5xl xl:text-7xl font-ledger" >03</h1>
                        <p class="text-2xl md:text-3xl font-inknut">POWER PITCHES</p>
                    </div>
                    <img  src="assets/img/two-office-men.png" alt="">
                </div>
            </div>
        </section>
        <!-- grand finale -->
        <section class="  py-20" style="background:#08033F">
            <div class="relative grid lg:grid-cols-12   w-[80%] max-w-screen-xl  mx-auto items-start  gap-10 lg:border-t lg:rounded-tl-[40px] border-white">
                <div class="hidden lg:block border-white border-l absolute top-8 bottom-1/2 rounded-tr-[50px]"></div>
                <div class="lg:p-5 lg:col-span-5">
                    <div class="lg:hidden text-center text-white py-5 flex gap-2 justify-center lg:justify-start  items-center" >
                        <h1 class=" text-4xl sm:text-5xl font-ledger" >04</h1>
                        <p class="text-2xl md:text-3xl font-inknut">GRAND FINALE</p>
                    </div>
                    <img class="w-[400px] flex justify-center lg:justify-start"  src="assets/img/goldenball-award.png" alt="">
                </div>
                <div class="text-white leading-loose lg:col-span-7 lg:flex flex-col justify-end scroll-down-right-animation">
                    <div class="hidden text-center py-5 lg:flex gap-5 justify-center  items-center" >
                        <h1 class=" text-7xl font-ledger" >04</h1>
                        <p class="text-3xl font-inknut">GRAND FINALE</p>
                    </div>
                    <p class="md:text-xl  text-justify ">
                        <span class="text-[#D19813]">The Battle of the Colossus: </span>The finalists would be empowered to deliver pitches aimed at providing sustainable solutions to the most significant national issue for the year. The finalists would receive a visit from the President of the Federal Republic of Nigeria who interacts with them, discuss prevailing issues of national priority and reflect on possible solutions. <br>
                        The finalist would also have the opportunity to interact with the Captains of Industries, Investors and Development Agencies in different dialogue sessions. The winner of the Battle of Colossus becomes the POWERHOUSE of the year who accesses support amounting to <span class="text-[#FDFE76]">N2.2 BILLION (Operational Capital, Investment Fund and Infrastructure Credit).</span>

                    </p>
                </div>
                
            </div>
        </section>
        <!-- sdg -->
        <section style="background: linear-gradient(131deg, #171162 16.86%, #07033B 80.15%);">
            <div class="w-[80%] mx-auto py-20">
                <h2 class="font-inknut text-white text-xl md:text-2xl lg:text-4xl pb-10 leading-normal text-center"> How The POWERHOUSE Contributes to the SDGs</h2>
                <div class="grid lg:grid-cols-3 py-5 md:py-10 font-inknut text-[#500000] w-[80%] mx-auto text-justify">
                    <div class="bg-white w-[90%] mb-10">
                        <img class="w-full object-cover " src="assets/img/globalgoals_icons_color_goal_1.svg" alt="">
                        <div class="p-3">
                            <p class=" text-xs leading-loose font-semibold">Deliver systems that will lift
                                millions of Nigerians out of poverty
                            </p>
                        </div>
                    </div>
                    <div class="bg-white w-[90%] mb-10">
                        <img class="w-full object-cover " src="assets/img/globalgoals_icons_color_goal_8.svg" alt="">
                        <div class="p-2">
                            <p class=" text-xs leading-loose font-semibold">
                                The systems will guarantee decent work for Nigerians and operations will enhance economic growth that launches Nigeria on the path to achieving a 1 Trillion Dollar economy by 2026
                            </p>
                        </div>
                    </div>
                    <div class="bg-white w-[90%] mb-10">
                        <img class="w-full object-cover " src="assets/img/globalgoals_icons_color_goal_9.svg" alt="">
                        <div class="p-3">
                            <p class=" text-xs leading-loose font-semibold">
                                The POWERHOUSE will empower young Nigerians to unleash innovations that yield formidable industries and  infrastructure locally and nationally. Also, the viewing audience will be inspired to unleash their creative potentials in their respective industries.
                            </p>
                        </div>
                    </div>
                    <div class="bg-white w-[90%] mb-10 md:mb-0">
                        <img class="w-full object-cover " src="assets/img/globalgoals_icons_color_goal_11.svg" alt="">
                        <div class="p-3">
                            <p class=" text-xs leading-loose font-semibold">
                                The systems established will foster sustainable cities and communities in Nigeria via improving the local economies of the host communities or cities.
                            </p>
                        </div>
                    </div>
                    <div class="bg-white w-[90%] mb-10 md:mb-0">
                        <img class="w-full object-cover " src="assets/img/globalgoals_icons_color_goal_13.svg" alt="">
                        <div class="p-3">
                            <p class=" text-xs leading-loose font-semibold">
                                POWERHOUSE provides the platform to inspire viewing communities to take action against climate change. Housemates will be a voice that amplifies the impact of climate change and mitigation advocacies 
                            </p>
                        </div>
                    </div>
                    <div class="bg-white w-[90%] mb-10 md:mb-0">
                        <img class="w-full object-cover " src="assets/img/globalgoals_icons_color_goal_17.svg" alt="">
                        <div class="p-3">
                            <p class=" text-xs leading-loose font-semibold">
                                POWERHOUSE provides the platform for private sector investors and development partners to collaborate in establishing sustainable solution systems. Interested parties can invest to be a partner in the winning solution
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- features -->
        <section class="py-20" style="background: linear-gradient(180deg, #070524 0%, #050018 100%);">
            <div >
                <h2 class="font-inknut text-white  text-4xl pb-10 leading-normal text-center">Special Features</h2>
            </div>
            <div class="overflow-y-auto w-[90%] mx-auto">
                <div class="grid grid-flow-col gap-10 overflow-y-hidden min-w-max md:min-w-full  ">
                    <div class="max-w-[400px] lg:min-w-[500px] bg-transparent border border-white p-5 text-white">
                        <img class="" src="assets/img/negotiating-gentlemen.png" alt=""  class="" />
                        <div class="space-y-5">
                            <h6 class="font-inknut font-semibold  pt-5 text-xl">Investor lobby</h6>
                            <p class=" pt-3  font-normal text-xs md:text-base leading-loose text-justify font-inter">
                                The POWERHOUSE shall have an investor lobby where local and international investors who pick interest in pitches negotiate and secure deals
                            </p>
                            <button class="  text-center text-sm px-10 py-2 mt-3 mb-5 font-medium  outline outline-white outline-1 bg-transparent text-white">Read More</button>
                        </div>
                    </div>
                    <div class=" max-w-[400px] lg:min-w-[500px]  bg-transparent border border-white p-5 text-white">
                        <img class="" src="assets/img/dark-browned-lady.png" alt=""  class="" />
                        <div class="space-y-5">
                            <h6 class="font-inknut font-semibold  pt-5 text-xl">Ambassadorial Deals</h6>
                            <p class="  pt-3  font-normal text-xs md:text-base leading-loose text-justify font-inter">
                                The POWERHOUSE mates have access to unlimited ambassadorial deals (locally and internationally) with top brands within and outside the country.
                            </p>
                            <button class="  text-center text-sm px-10 py-2 mt-3 mb-5 font-medium  outline outline-white outline-1 bg-transparent text-white">Read More</button>
                        </div>
                    </div>
                    <div class="max-w-[400px] lg:min-w-[500px]  bg-transparent border border-white p-5 text-white">
                        <img class="" src="assets/img/coin-sack.png" alt=""  class="  " />
                        <div class="space-y-5">
                            <h6 class="font-inknut font-semibold  pt-5 text-xl">Investor lobby</h6>
                            <p class="  pt-3  font-normal text-xs md:text-base leading-loose text-justify font-inter">
                                Participants in the POWERHOUSE are entitled to solidarity funding from their supporters. The solidarity wallet ensures Housemates are all winners.
                            </p>
                            <button class="  text-center text-sm px-10 py-2 mt-3 mb-5 font-medium  outline outline-white outline-1 bg-transparent text-white">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('includes.gallery')
        <!-- sponsors section -->
        <section class="bg-[#080246]">
            <div class="">
                <div class="py-10 ">
                    <h1 class="font-inknut text-center text-4xl pb-5 text-white scroll-down-right-animation">Our Esteemed Partners</h1>
                </div>
            </div> 
            <!-- list sponsors -->
            
            <div class="bg-white mb-5">
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
                        <img src="assets/img/rano.png" alt="">
                    </div>
                </div>
            </div>
            <!-- newsletters -->
            <div class="pb-5">
                <div class="py-20 " style="background-image: url(assets/img/skyscrapper.png)">
                    <div class="bg-fixed lg:flex gap-10 items-center w-[90%] lg:w-[70%] mx-auto">
                        <div class="">
                            <h1 class="font-inknut text-xl md:text-2xl  text-white">Sign up for our newsletter</h1>
                            <p class="text-white ">Be the first to know about releases and industry news and insights.</p>
                        </div>
                        <div>
                            <form class=" md:flex items-center mt-5 lg:mt-0" action="">
                                <input class="w-72 lg:w-96 rounded-md  p-3 focus:outline-none placeholder:text-[#000000B2] " type="text" name="" id="" placeholder="Your Email Here">
                                <button class="scroll-down-right-animation mt-5 md:mt-0 md:ml-5  bg-transparent text-white px-10 py-2 text-sm border outline outline-white outline-1">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
    <script>
        function toggleText() {
            var dots = document.getElementById("dot");
            var moreText = document.getElementById("more");
            var button = document.getElementById("button");

            if (moreText.classList.contains("hidden")) {
                dots.classList.add("hidden")
                // show the more text
                moreText.classList.remove("hidden");

                // change text of the button
                button.innerHTML = "Read less";
            } else {
                dots.classList.remove("hidden")
                // hide the more text
                moreText.classList.add("hidden");

                // change text of the button
                button.innerHTML = "Read more";
            }
        }
    </script>
    <script src="/assets/js/flowbite.min.js"></script>
@endsection
