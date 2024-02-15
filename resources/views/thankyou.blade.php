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
                    <div class="flex items-center justify-center">
                <img src="assets/img/logo-words.png" alt="" class=" w-[100px] lg:w-[300px]">
                    </div>
                    <h1 class="font-inknut text-center text-4xl pb-5 text-white scroll-down-right-animation">SUBMITTED SUCCESSFULLY</h1>
                    
                </div>
            
    <form id="signUpForm" method=" " class="submit-form p-12 py-3  shadow-md rounded-2xl bg-black mx-auto border-solid border-2 border-gray-100 mb-8" action="/">
        <!-- start step indicators -->
     
        <!-- end step indicators -->
    
        <!-- step one -->
       
        <div class="py-6 ">
                    <h1 class="   text-bold text-lg text-center text-white font-bold title font-inkut">
                        Thank you for <br>
                        your regisgration for <br>
                        POWERHOUSE SEASON 1.
                    </h1>
                </div>         
                
                <p class="leading-loose md:text-lg text-justify" >Only successful candidate will be contact for the next stage.</p>
                <br>

                   
    
        <!-- start previous / next buttons -->
        <div class="form-footer flex gap-3">
        <button type="submit" class="flex-1 focus:outline-none border border-gray-300 py-2 px-5 rounded-lg shadow-sm text-center text-gray-700 bg-white hover:bg-gray-100 text-lg">Home Page</button>
           
        </div>
        <!-- end previous / next buttons -->
    </form>

                </div>
             
            </div>
       
        </section>

    

     
      
   

    </main>
@endsection
