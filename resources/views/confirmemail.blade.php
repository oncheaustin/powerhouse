@extends('layout.frontend')
@section('title')
GOALPrime Nigeria - A Better Humanity is Possible
@endsection
@section('fcontent')
    <main class="bg-black">
      

        <!-- startup section -->
        <section class=" mt-20 " >
            <div class="relative h-screen flex items-center justify-center flex-col-reverse lg:grid grid-cols-4 lg:py-3 lg:pr-5 w-[80%] max-w-screen-xl  mx-auto items-start  gap-10 lg:border-t lg:rounded-tr-[40px] border-white   ">
                <div class="hidden lg:block border-white border-l right-0 absolute top-8 bottom-1/2 rounded-tr-[50px]"></div>
                <div class=" lg:col-span-5 text-white space-y-5 scroll-down-right-animation ">
                
                <div class="py-3 ">
                    <h1 class="font-inknut text-center text-4xl pb-5 text-white scroll-down-right-animation">REGISTRATION</h1>
                    <p class="stepIndicator text-center flex-1 pb-8 relative">(Step 1)</p>
                </div>
            
    <form id="signUpForm" class="p-12 py-3  shadow-md rounded-2xl bg-black mx-auto border-solid border-2 border-gray-100 mb-8"  action="{{ route('confirmemailsave2') }}" method="POST">
        <!-- start step indicators -->
         @csrf
        <div class="form-header flex gap-3 mb-4 text-xs text-center">
            <span class="stepIndicator flex-1 pb-8 relative"> </span>
            <span class="stepIndicator flex-1 pb-8 relative"> </span>
            <span class="stepIndicator flex-1 pb-8 relative"> </span>
        </div>
        <!-- end step indicators -->
    
        <!-- step one -->
        <div class="items-center md:hidden hidden md:block">
            <p class="stepIndicator flex-1 pb-8 relative">Confirm your Email Address</p>
            <div class="mb-6">
                  <input type="email" placeholder="Email Address" name="email" 
						 class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" />
            </div>
            
                      
        </div>
        
    
        <!-- start previous / next buttons -->
        <div class="form-footer flex gap-3">
        <button type="submit" class="flex-1 focus:outline-none border border-gray-300 py-2 px-5 rounded-lg shadow-sm text-center text-gray-700 bg-white hover:bg-gray-100 text-lg">Submit</button>
          <!--  <button type="button" id="prevBtn" class="flex-1 focus:outline-none border border-gray-300 py-2 px-5 rounded-lg shadow-sm text-center text-gray-700 bg-white hover:bg-gray-100 text-lg" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" class="flex-1 border border-transparent focus:outline-none p-3 rounded-md text-center text-white bg-indigo-600 hover:bg-indigo-700 text-lg" onclick="nextPrev(1)">Next</button>-->
        </div>
        <!-- end previous / next buttons -->
    </form>

                </div>
             
            </div>
       
        </section>

    

     
      
   

    </main>
@endsection
