<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/steps.css">
        
    </head>
    <body class="bg-black">
        <header class="sticky top-0 z-20 bg-repeat bg-[#270F49]" style="background-image: url(assets/img/splash-bg.png); background-size: cover;  background-position: top; background-blend-mode: normal;  " >
            <div class="container max-w-screen-xl py-4 mx-auto w-[90%]   flex lg:grid lg:grid-cols-7 justify-between items-center">
            
                <div class="lg:col-span-4 flex items-start">
                    <img src="assets/img/logo-words.png" alt="" class=" w-[100px] lg:w-[300px]">
                    <!--  -->
                
                </div>
               
                <!-- <div class="hidden lg:flex ">
                    <button class="register text-white py-2 px-8 col-span-1 text-base ">Register</button>
                </div> -->
                
            </div>
            
        </header>
        
        @yield('fcontent')







        <footer class="bg-[#270F49] text-white">
            <div class="grid lg:grid-cols-3 w-[80%] mx-auto py-20 gap-10 ">
                <div class="">
                    <div class="flex pb-5">
                        <img src="assets/img/ceo-logo.png" alt="">
                        <h1 class="  text-sm  text-white font-semibold title font-inkut">POWER HOUSE</h1>
                    </div>
                    <h1 class="font-medium pb-5">Quick links</h1>
                    <ul class="space-y-3 ">
                        <li class="text-white text-opacity-70 hover:text-opacity-100 hover:translate-x-2  ease-in-out transition"><a href="#"> Our Organization </a></li>
                        <li class="text-white text-opacity-70 hover:text-opacity-100 hover:translate-x-2  ease-in-out transition"><a href="#"> Become a volunteer </a></li>
                        <li class="text-white text-opacity-70 hover:text-opacity-100 hover:translate-x-2  ease-in-out transition"><a href="#"> Projects </a></li>
                        <li class="text-white text-opacity-70 hover:text-opacity-100 hover:translate-x-2  ease-in-out transition"><a href="#"> Events </a></li>
                        <li class="text-white text-opacity-70 hover:text-opacity-100 hover:translate-x-2  ease-in-out transition"><a href="#"> Picture gallery </a></li>
                    </ul>
                </div>
                <div class="mr-auto place-self-center">
                    <img src="assets/img/map-pic.png" alt="">
                </div>
                <div class="lg:flex  justify-end">
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
                    <div class="flex gap-x-5 pt-10">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M5.8 0H14.2C17.4 0 20 2.6 20 5.8V14.2C20 15.7383 19.3889 17.2135 18.3012 18.3012C17.2135 19.3889 15.7383 20 14.2 20H5.8C2.6 20 0 17.4 0 14.2V5.8C0 4.26174 0.61107 2.78649 1.69878 1.69878C2.78649 0.61107 4.26174 0 5.8 0ZM5.6 2C4.64522 2 3.72955 2.37928 3.05442 3.05442C2.37928 3.72955 2 4.64522 2 5.6V14.4C2 16.39 3.61 18 5.6 18H14.4C15.3548 18 16.2705 17.6207 16.9456 16.9456C17.6207 16.2705 18 15.3548 18 14.4V5.6C18 3.61 16.39 2 14.4 2H5.6ZM15.25 3.5C15.5815 3.5 15.8995 3.6317 16.1339 3.86612C16.3683 4.10054 16.5 4.41848 16.5 4.75C16.5 5.08152 16.3683 5.39946 16.1339 5.63388C15.8995 5.8683 15.5815 6 15.25 6C14.9185 6 14.6005 5.8683 14.3661 5.63388C14.1317 5.39946 14 5.08152 14 4.75C14 4.41848 14.1317 4.10054 14.3661 3.86612C14.6005 3.6317 14.9185 3.5 15.25 3.5ZM10 5C11.3261 5 12.5979 5.52678 13.5355 6.46447C14.4732 7.40215 15 8.67392 15 10C15 11.3261 14.4732 12.5979 13.5355 13.5355C12.5979 14.4732 11.3261 15 10 15C8.67392 15 7.40215 14.4732 6.46447 13.5355C5.52678 12.5979 5 11.3261 5 10C5 8.67392 5.52678 7.40215 6.46447 6.46447C7.40215 5.52678 8.67392 5 10 5ZM10 7C9.20435 7 8.44129 7.31607 7.87868 7.87868C7.31607 8.44129 7 9.20435 7 10C7 10.7956 7.31607 11.5587 7.87868 12.1213C8.44129 12.6839 9.20435 13 10 13C10.7956 13 11.5587 12.6839 12.1213 12.1213C12.6839 11.5587 13 10.7956 13 10C13 9.20435 12.6839 8.44129 12.1213 7.87868C11.5587 7.31607 10.7956 7 10 7Z" fill="white"/>
                            </svg>
                        </span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                                <path d="M6.04545 0H0L7.13364 9.3619L0.388636 17H2.67727L8.19418 10.7533L12.9545 17H19L11.5658 7.2437L17.9636 0H15.675L10.5053 5.8531L6.04545 0ZM13.8182 15.3L3.45455 1.7H5.18182L15.5455 15.3H13.8182Z" fill="white"/>
                            </svg>
                        </span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" viewBox="0 0 11 20" fill="none">
                                <path d="M7 11.5H9.5L10.5 7.5H7V5.5C7 4.47 7 3.5 9 3.5H10.5V0.14C10.174 0.0970001 8.943 0 7.643 0C4.928 0 3 1.657 3 4.7V7.5H0V11.5H3V20H7V11.5Z" fill="#F8F8F8"/>
                            </svg>
                        </span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M6.93994 5C6.93968 5.53043 6.72871 6.03904 6.35345 6.41392C5.97819 6.78881 5.46937 6.99927 4.93894 6.999C4.40851 6.99874 3.89991 6.78777 3.52502 6.41251C3.15014 6.03725 2.93968 5.52843 2.93994 4.998C2.94021 4.46757 3.15117 3.95897 3.52644 3.58408C3.9017 3.20919 4.41051 2.99874 4.94094 2.999C5.47137 2.99927 5.97998 3.21023 6.35486 3.58549C6.72975 3.96075 6.94021 4.46957 6.93994 5ZM6.99994 8.48H2.99994V21H6.99994V8.48ZM13.3199 8.48H9.33994V21H13.2799V14.43C13.2799 10.77 18.0499 10.43 18.0499 14.43V21H21.9999V13.07C21.9999 6.9 14.9399 7.13 13.2799 10.16L13.3199 8.48Z" fill="#F8F8F8"/>
                            </svg>
                        </span> 
                    </div>
                    
                    </div>
                    
                </div>
                
            </div>
            <h4 class="text-center font-bold pb-5">Copyright (2024) @ <span class="text-[#E3CD00]">GOALPrime</span>  Organization Nigeria</h4>
        </footer>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/steps.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

function OTPInput() {
const inputs = document.querySelectorAll('#otp > *[id]');
for (let i = 0; i < inputs.length; i++) { inputs[i].addEventListener('keydown', function(event) { if (event.key==="Backspace" ) { inputs[i].value='' ; if (i !==0) inputs[i - 1].focus(); } else { if (i===inputs.length - 1 && inputs[i].value !=='' ) { return true; } else if (event.keyCode> 47 && event.keyCode < 58) { inputs[i].value=event.key; if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } else if (event.keyCode> 64 && event.keyCode < 91) { inputs[i].value=String.fromCharCode(event.keyCode); if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } } }); } } OTPInput(); });
        </script>




<script>
    document.addEventListener('DOMContentLoaded', function () {
      const dropZone = document.getElementById('drop-zone');
      const fileInput = document.getElementById('file-input');
      const previewContainer = document.getElementById('preview-container');

      dropZone.addEventListener('dragover', function (e) {
        e.preventDefault();
        dropZone.classList.add('border-gray-400');
      });

      dropZone.addEventListener('dragleave', function () {
        dropZone.classList.remove('border-gray-400');
      });

      dropZone.addEventListener('drop', function (e) {
        e.preventDefault();
        dropZone.classList.remove('border-gray-400');

        const files = e.dataTransfer.files;
        handleFiles(files);
      });

      fileInput.addEventListener('change', function () {
        const files = fileInput.files;
        handleFiles(files);
      });

      function handleFiles(files) {
        for (const file of files) {
          const reader = new FileReader();

          reader.onload = function (e) {
            const previewItem = createPreviewItem(e.target.result);
            previewContainer.appendChild(previewItem);
          };

          reader.readAsDataURL(file);
        }
      }

      function createPreviewItem(imageSrc) {
        const previewItem = document.createElement('div');
        previewItem.classList.add('relative', 'group');

        const removeButton = document.createElement('button');
        removeButton.innerHTML = '&times;';
        removeButton.classList.add('absolute', 'top-2', 'right-2', 'text-white', 'bg-red-500', 'border-none', 'rounded-md', 'px-2', 'py-1', 'opacity-0', 'group-hover:opacity-100', 'transition');

        const previewImage = document.createElement('img');
        previewImage.src = imageSrc;
        previewImage.classList.add('w-full', 'h-32', 'object-cover', 'rounded-md', 'mb-2');

        removeButton.addEventListener('click', function () {
          previewContainer.removeChild(previewItem);
        });

        previewItem.appendChild(previewImage);
        previewItem.appendChild(removeButton);

        return previewItem;
      }
    });
  </script>

  <script>
    $(document).ready(function() {
  $("#word_count").on('keyup', function() {
    var words = 0;

    if ((this.value.match(/\S+/g)) != null) {
      words = this.value.match(/\S+/g).length;
    }

    if (words > 200) {
      // Split the string on first 200 words and rejoin on spaces
      var trimmed = $(this).val().split(/\s+/, 200).join(" ");
      // Add a space at the end to make sure more typing creates new words
      $(this).val(trimmed + " ");
    }
    else {
      $('#display_count').text(words);
      $('#word_left').text(200-words);
    }
  });
}); 
    </script>

<script>
        $('#code').on('input', function () {
            $(this).val(function(i, val){
                if (val.length >= 6) {
                    $('.submit-form').find('button[type=submit]').html('<i class="las la-spinner fa-spin"></i>');
                    $('.submit-form').submit()
                }
                if(val.length > 6){
                    return val.substring(0, val.length - 1);
                }
                return val;
            });
            for (let index = $(this).val().length; index >= 0 ; index--) {
                $($('.boxes span')[index]).html('');
            }
        });
    </script>

    <script>
        const input = document.querySelector('[autocomplete=one-time-code');
input.addEventListener('input', () => input.style.setProperty('--_otp-digit', input.selectionStart));
        </script>
    </body>
</html>