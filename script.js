//Menu Toggle


/*** LANDING PAGE SLIDESHOW BEGINS **/

var imageSlides = document.getElementsByClassName('imageSlides');
var circles = document.getElementsByClassName('circle');
var leftArrow = document.getElementById('leftArrow');
var rightArrow = document.getElementById('rightArrow');
var counter = 0;

// HIDE ALL IMAGES FUNCTION
function hideImages() {
  for (var i = 0; i < imageSlides.length; i++) {
    imageSlides[i].classList.remove('visible');
  }
}

// REMOVE ALL DOTS FUNCTION
function removeDots() {
  for (var i = 0; i < imageSlides.length; i++) {
    circles[i].classList.remove('dot');
  }
}

// SINGLE IMAGE LOOP/CIRCLES FUNCTION
function imageLoop() {
  var currentImage = imageSlides[counter];
  var currentDot = circles[counter];
  currentImage.classList.add('visible');
  removeDots();
  currentDot.classList.add('dot');
  counter++;
}

// LEFT & RIGHT ARROW FUNCTION & CLICK EVENT LISTENERS
function arrowClick(e) {
  var target = e.target;
  if (target == leftArrow) {
    clearInterval(imageSlideshowInterval);
    hideImages();
    removeDots();
    if (counter == 1) {
      counter = (imageSlides.length - 1);
      imageLoop();
      imageSlideshowInterval = setInterval(slideshow, 10000);
    } else {
      counter--;
      counter--;
      imageLoop();
      imageSlideshowInterval = setInterval(slideshow, 10000);
    }
  } 
  else if (target == rightArrow) {
    clearInterval(imageSlideshowInterval);
    hideImages();
    removeDots();
    if (counter == imageSlides.length) {
      counter = 0;
      imageLoop();
      imageSlideshowInterval = setInterval(slideshow, 10000);
    } else {
      imageLoop();
      imageSlideshowInterval = setInterval(slideshow, 10000);
    }
  }
}

leftArrow.addEventListener('click', arrowClick);
rightArrow.addEventListener('click', arrowClick);



// IMAGE SLIDE FUNCTION
function slideshow() {
  if (counter < imageSlides.length) {
    imageLoop();
  } else {
    counter = 0;
    hideImages();
    imageLoop();
  }
}

// SHOW FIRST IMAGE, & THEN SET & CALL SLIDE INTERVAL
setTimeout(slideshow, 1000);
var imageSlideshowInterval = setInterval(slideshow, 10000);

/**LANDING PAGE SLIDESHOW ENDS**/

//HOME TESTIMONIAL SLIDESHOW BEGINS
const slides = document.querySelector(".testimonial-slider").children;
const indicatorImages = document.querySelector(".testimonial-indicator").children;

for (let i=0; i< indicatorImages.length; i++){
  indicatorImages[i].addEventListener("click",function(){

  for (let j=0; j<indicatorImages.length; j++) {
      indicatorImages[j].classList.remove("active");     
    }

    this.classList.add("active");
    const id=this.getAttribute("data-id");
    for (let j = 0; j < slides.length; j++) {
      slides[j].classList.remove("active");
      
    }
    slides[id].classList.add("active");
  })
  
}




//HOME TESTIMONIAL SLIDESHOW ENDS

//Newsletter Subscribe

function subscribe() {
  let email = document.getElementById("email").value;
  let error_message = document.getElementById("error-message");
  let text;

  error_message.style.padding = "12px";

  if(email.indexOf("@") == -1 || email.length < 6){
    text = "Please Enter Valid Email";
    error_message.innerHTML = text;
    return false;
  }

  alert("Thank You for Subscribing to our newsletter")
  return true;
}

//Contact Get in touch Form

function validation() {
          let name = document.getElementById("name").value;
          let email = document.getElementById("email").value;
          let message = document.getElementById("message").value;
          let error_message = document.getElementById("error-message");
          let text;
          
        error_message.style.padding = "14px";

        if(name.length <5){
          text = "Please Enter Valid Name";
          error_message.innerHTML = text;
          return false;
        }

        if(email.indexOf("@") == -1 || email.length < 6){
          text = "Please Enter Valid Email";
          error_message.innerHTML = text;
          return false;
        }

        if(message.length <= 100){
          text = "Please Enter More Than 20 Character";
          error_message.innerHTML = text;
          return false;
        }

          alert("Form Submitted Successfully!")
          return true;
        }

// testimonal Page Slider

var slideIndex = 1;
     showSlides(slideIndex);
     // Next/previous controls
     function plusSlides(n) {
     showSlides(slideIndex += n);
     }
     // Thumbnail image controls
     function currentSlide(n) {
     showSlides(slideIndex = n);
     }
     function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("imageSlider");
      var dots = document.getElementsByClassName("dot-btn");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
     }
     for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" active", "");
     }
     slides[slideIndex-1].style.display = "block";
     dots[slideIndex-1].className += " active";
     }





// Pop up Button
/*
function openForm() {
  document.getElementById("pop-container").style.display ="block";
  
}

function closeForm() {
  document.getElementById("pop-container").style.display ="none";
  
}*/