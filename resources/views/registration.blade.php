@extends('layout.frontend')
@section('title')
GOALPrime Nigeria - A Better Humanity is Possible
@endsection
@section('fcontent')
    <main class="bg-black">

        <!-- startup section -->
        <section class=" mt-20 " >
            <div class=" ">
                <div class="hidden lg:block border-white border-l right-0 absolute top-8 bottom-1/2 rounded-tr-[50px]"></div>
                <div class=" lg:col-span-5 text-white space-y-5 scroll-down-right-animation ">
                
                <div class="py-3 ">
                    <h1 class="font-inknut text-center text-4xl pb-5 text-white scroll-down-right-animation">REGISTRATION</h1>
                    <p class="stepIndicator text-center flex-1 pb-8 relative">(Step 2)</p>
                </div>
            
    <form id="signUpForm" class="p-12 py-3  shadow-md rounded-2xl bg-black mx-auto border-solid border-2 border-gray-100 mb-8" action="/thankyou">
        <!-- start step indicators -->
        <div class="form-header flex gap-3 mb-4 text-xs text-center">
            <span class="stepIndicator flex-1 pb-8 relative">Profile </span>
            <span class="stepIndicator flex-1 pb-8 relative">Video </span>
            <span class="stepIndicator flex-1 pb-8 relative"> Submit</span>
        </div>
        <!-- end step indicators -->
    
        <!-- step one -->
        <div class="step">
            <p class="text-md text-gray-700 leading-tight text-center mt-8 mb-5"><span style="color:red">Please fill all the mandatory filed (marked by *)</span></p>
            <div class="mb-6"> <label> Last Name: <span style="color:red">*</span></label>
                  <input type="text" placeholder="Last Name" name="lname" 
						 class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
            </div>
            <div class="mb-6"> <label> First Name: <span style="color:red">*</span></label>
                  <input type="text" placeholder="First Name" name="fname" 
						 class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
            </div>
            <div class="mb-6"> <label> Other Name: <span style="color:red">*</span></label>
                  <input type="text" placeholder="Other Name" name="othername" 
						 class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
            </div>
            <div class="mb-6"> <label>Gender: <span style="color:red">*</span></label>
                <select name="gender"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others">Others</option>
                </select>
                
                </div>
            <div class="mb-6"> <label> Preferred POWERHOUSE Nickname: <span style="color:red">*</span></label>
                  <input type="text" placeholder="Preferred POWERHOUSE Nickname" name="nickname" 
						 class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
            </div>
            <div class="mb-6"> <label> Email: <span style="color:red">*</span></label>
                  <input type="text" placeholder="Email" name="email" value="{{ session()->get('email') }}"
						 class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" readonly/>
            </div>
            <div class="mb-6"> <label>Phone Number: <span style="color:red">*</span></label>
                  <input type="number" placeholder="Phone number to contact you" name="phone" 
						 class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
            </div>

            <div class="mb-6"> <label>Country: <span style="color:red">*</span></label>
                <select name="country"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200">
                    <option value="nigeria">Nigeria</option>
                    <option value="buchares">Bucharest</option>
                    <option value="london">London</option>
                    <option value="washington">Washington</option>
                </select>
                
                </div>
                <div class="mb-6"> <label>State of Origin: <span style="color:red">*</span></label>
                <select name="state"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200">
                    <option value="brazil">Niger</option>
                    <option value="bucharest">Enugu</option>
                    <option value="london">Lagos</option>
                    <option value="washington">Kano</option>
                    <option value="washington">Maiduguri</option>
                </select>
                
                </div>
                <div class="mb-6"> <label>Local Government: <span style="color:red">*</span></label>
                <select name="lga"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200">
                    <option value="brazil">Bida</option>
                    <option value="bucharest">Ikeja</option>
                    <option value="london">Orlu</option>
                    <option value="washington">Biu</option>
                </select>
                
                </div>
            <div class="mb-6"> <label>Occupation: <span style="color:red">*</span></label>
                  <input type="text" placeholder="Occupation" name="occupation" 
						 class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
            </div>
            <div class="mb-6"> <label>Date of Birth: <span style="color:red">*</span></label>
                  <input type="date" placeholder="Date of Birth" name="dobirth" 
						 class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
            </div>
            <div class="mb-6"> <label>Relationship: <span style="color:red">*</span></label>
                <select name="relationship"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200">
                    <option value="married">Married</option>
                    <option value="single">Single</option>
                </select>
                
                </div>
            <div class="mb-6"> <label>Next of Kin: <span style="color:red">*</span></label>
                  <input type="text" placeholder="Next of Kin" name="noking" 
						 class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
            </div>
        
            <div class="mb-6"> <label>Phone Number of Next of Kin: <span style="color:red">*</span></label>
                  <input type="number" placeholder="Phone Number" name="nokphone" 
						 class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
            </div>
            <label>Brief Bio: <span style="color:red">*</span>
            <textarea name="bio" id="word_count" class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200"> Brief Bio about yourself
            </textarea>
            <br>
            Total word count: <span style="color:red" id="display_count">0</span> words. Words left: <span id="word_left">200.</span>
            </label>
            <br>
        <div class="mb-6"> <label>Means of Identification: <span style="color:red">*</span></label>
                  <input type="text" placeholder="Means of Identification" name="identification" 
						 class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
        </div>
          

    <div class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200">
        <label id="drop-zone" class="flex flex-col items-center w-full h-40 p-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer hover:border-gray-400 transition">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-gray-400 mb-2" fill="none" viewBox="0 0 24 24"
        stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
      </svg>
      <span style="color:red">
        Drop ID file here or
        <span class="text-blue-600 underline">browse</span>
      </span>
      <input type="file" name="id_upload" class="hidden" id="file-input" multiple>
         </label>
        <div id="preview-container" class="mt-4 grid grid-cols-2 gap-4"></div>
    </div>
    </div>
    
        <!-- step two -->
        <div class="step">
        <p class="text-md text-gray-700 leading-tight text-center mt-8 mb-5"><span style="color:red">This is your casting video and must strictly adhere to the following guidelines: POWER HOUSE producers are looking for a dynamic group of individuals who are articulate, interesting and exhibit enthusiasm for the project as well as a willingness to share their most private thoughts in an open forum of strangers. This group of individuals, while meeting the technical requirements of the program, must also have sufficient physical, psychological, and mental capacity to endure approximately 90 days in a monitored house under extraordinary conditions. This video must state a particular problem your want to solve in your local government. Video must be maximum 2 minutes in length. The maximum 2-minute video should end with you completing the sentence “I would make a perfect housemate because…” Video must contain your Name, E–mail and Phone Number clearly stated. Avoid all forms of filters, special video effects, copyrighted music and background music.</span></p>
            
           
        <div class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200">
        <label id="drop-zone" class="flex flex-col items-center w-full h-40 p-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer hover:border-gray-400 transition">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-gray-400 mb-2" fill="none" viewBox="0 0 24 24"
        stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
      </svg>
      <span style="color:red">
        Drop your Video file here or
        <span class="text-blue-600 underline">browse</span>
      </span>
      <input type="file" name="video_upload" class="hidden" id="file-input" multiple>
         </label>
        <div id="preview-container" class="mt-4 grid grid-cols-2 gap-4"></div>
        </div>
        </div>
    
        <!-- step three -->
        <div class="step">
        <p class="text-md text-gray-700 leading-tight text-center mt-8 mb-5"><span style="color:red">Please fill all the mandatory filed (marked by *)</span></p>
        <div class="mb-6"> 
                  <input type="checkbox" placeholder="Means of Identification" name="identification" 
						 class=" " oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
                         <span style="color:red"><a href="#" >Please accept the Terms & Conditions</a></span>
                        </div>
 
        </div>
    
        <!-- start previous / next buttons -->
        <div class="form-footer flex gap-3">
            <button type="button" id="prevBtn" class="flex-1 focus:outline-none border border-gray-300 py-2 px-5 rounded-lg shadow-sm text-center text-gray-700 bg-white hover:bg-gray-100 text-lg" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" class="flex-1 border border-transparent focus:outline-none p-3 rounded-md text-center text-white bg-indigo-600 hover:bg-indigo-700 text-lg" onclick="nextPrev(1)">Next</button>
        </div>
        <!-- end previous / next buttons -->
</form>

    </div>
             
    </div>
</section>
   
</main>
@endsection
