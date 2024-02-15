<!-- gallery section -->
    <section class="py-10 bg-[#040035]" style="">
        <div class="py-10">
            <h1 class="font-inknut text-center text-4xl py-5 text-white scroll-down-right-animation"> Industry Mentors </h1>
            <div class="">
           

                    <div class="grid grid-cols-4 lg:grid-cols-5  relative h-full w-[80%] m-auto py-10 gap-2 gallery" style="">
                    @foreach ($galleries as $item)
                    <button class="  " data-modal-target="pic-{{$item->id}}" data-modal-toggle="pic-{{$item->id}}" type="button">
                        <img class="  h-full w-full object-cover" src="{{asset($item->picture)}}" alt="picture">
                    </button>
                    @endforeach  
                </div>
              
            </div>
            
        </div>       
    </section>

<!-- modal -->
<!-- first pic modal -->
@foreach ($galleries as $item)
<div id="pic-{{$item->id}}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-lg max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-4">
            <!-- Modal header -->
            <div class=" rounded-t dark:border-gray-600">
                
                <button type="button" class="text-white bg-red-400  hover:bg-gray-200 hover:text-gray-900 rounded-full text-sm w-8 h-8 ms-auto inline-flex justify-center items-center float-right dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="pic-{{$item->id}}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class=" grid justify-center  text-[#070422] text-center">
                    <div class="grid justify-center">
                        <img src="{{asset($item->picture)}}" alt="" class="h-32 w-32" >
                    </div>
                    <h3 class="text-xl md:text-3xl font-semibold ">
                        Aliko Dangote (GCON)
                    </h3>
                    <p class="text-lg md:text-xl ">
                       BUSINESSMAN AND INDUSTRIALIST
                    </p>
                </div>
                
            </div>
            <!-- Modal body -->
            <div class=" pt-5">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                Anthony Onyemaechi Elumelu CFR is a Nigerian economist, and philanthropist. He chairs Heirs Holdings, Transcorp, United Bank for Africa and is the founder of The Tony Elumelu Foundation. In 2020, Elumelu was named on Time's list of the 100 most influential people in the world.
                </p>
                <!-- <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                </p> -->
            </div>           
        </div>
    </div>
</div>
@endforeach  
<!-- second pic modal -->

