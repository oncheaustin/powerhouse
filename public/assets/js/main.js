

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting){
            entry.target.classList.add('slide');   
        }else{
            entry.target.classList.remove('slide')
        }
        

    });
});
    const scrollDownLeft = document.querySelectorAll(".scroll-down-left-animation")
    const scrollDownRight = document.querySelectorAll(".scroll-down-right-animation")
    const scrollUp = document.querySelectorAll(".scroll-up")
    scrollDownLeft.forEach((el) => observer.observe(el))
    scrollDownRight.forEach((el) => observer.observe(el))
    scrollUp.forEach((el) => observer.observe(el))

    const scrollers = document.querySelectorAll(".scroller")

    if(!window.matchMedia("(prefers-reduced-motion:reduce)").matches){
        addAnimation();
    }

    function addAnimation(){

    scrollers.forEach((scroller) => {
        scroller.setAttribute("data-animated", true);

        const scrollerInner = scroller.querySelector(".scroller-inner");
        const scrollerContent = Array.from(scrollerInner.children);
        
        scrollerContent.forEach((item) => {
            const duplicatedItem = item.cloneNode(true);
            duplicatedItem.setAttribute("aria-hidden", true);
            scrollerInner.appendChild(duplicatedItem)
        })
    })
    };

    (function ($) {
        // "use strict";
        $(".open-nav").on("click", function () {
            // e.preventDefault();
            alert("ho")
            $(".nav-bar").toggleClass("show");
            $("body").addClass("on-side");
            // $('.body-overlay').addClass('active');
            // $(this).addClass('active');
        });
    })
    const navLinks = document.querySelector(".nav-bar")

    function openNav(){
        // console.log('yes')
        if(navLinks.style.right==="-300px" ){
            navLinks.style.right = "0";
          }else{
            navLinks.style.right ="-300px"
        }
    }
