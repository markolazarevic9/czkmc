$(window).scroll(function() {
    if($(this).scrollTop() > 200) {
        $('.gototop').fadeIn();
    } else {
        $('.gototop').fadeOut();  
    }
})

$(document).ready(function(){
    $('ul.nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
    }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
    });  
});


$(window).scroll(function(){
 let st = $(window).scrollTop();
  if (st > 0) {
    $('.nav-menu').addClass('scrolled');
  } else {
    $('.nav-menu').removeClass('scrolled');
  
  }
});

$('.gototop').click(function() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
})

let links = document.getElementsByClassName('nav-link');
for(let i = 0; i<links.length; i++){
  links[i].addEventListener('click', function() {
    let current = document.getElementsByClassName('active');
    current[0].className = current[0].className.replace(' active', '');
    this.className += ' active';
  })
}




if(window.matchMedia("(prefers-color-scheme:dark)").matches) {
 const icon = document.getElementById("faviconId");
 icon.href = "../img/favicon2.png";
 
  
 
}

function myFunction(x) {
  x.classList.toggle("change");
}


$(window).resize(function () { 
  if($(".nav-menu").hasClass('makeDarker')) {
        $(".nav-menu").removeClass('makeDarker');
      }
});

let ulSoc = document.createElement('div');
ulSoc.setAttribute('id','ulSoc');
ulSoc.innerHTML += ` <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
<a href="#"><i class="fab fa-youtube-square fa-2x"></i></a>
<a href="#"><i class="fas fa-envelope-square fa-2x"></i></a>`;



$('.menu-toggle').click(function() {
 

  if($('.nav').hasClass('responsive')) {
    $('.gototop').fadeIn();
    $('.nav').removeClass('responsive');
    $("body").css("overflow", "auto");
    $("body").css("overflow-x", "hidden");
    $('.nav-menu').removeClass('makeDarker');
    $('#ulSoc').css('display','none');
  
  
  } else {
    $('.nav').css('height','100vh');
    $('.nav-menu').addClass('makeDarker');
    $('.nav').addClass('responsive');
    $("body").css("overflow", "hidden");
    
    $('.gototop').fadeOut();
    document.querySelector('.nav-link').style.color = 'white';
    $('.nav').append(ulSoc);
    $('#ulSoc').css('display','block');
  }

  $('.nav').addClass('nav-active');
})
$('.nav').style.animation  = `menuSlow 1.5s ease-in-out`;


var rellax = new Rellax('.rellax');

// ontainer.addEventListener('click', () => {
//   menu.classList.toggle('nav-active');
//   // navLinks.forEach((link, index)=>{
//   //     link.style.animation = `menuFade 0.5s ease forwards ${index / 4 + 1}s`
//   // });
  
//      menu.style.animation = `menuSlow 1.5s ease-in-out  `;
    
     
  
// });


window.addEventListener('scroll', function() {
  let paralax = document.querySelector('.paralax');
  let scrollPosition = window.pageYOffset;
  paralax.style.transform = 'translateY(' + scrollPosition * .5 + 'px)';
})


// window.addEventListener("scroll", function() {
//   const distance = window.scrollY;
//   document.querySelector("header").style.transform = `translateY(${distance *
//     1}px)`;
//   document.querySelector(
//     "#red1"
//   ).style.transform = `translateY(${distance * 0.3}px)`;
//   setTimeout(() => {
//     document.querySelector("section h2").classList.add("animate-me");
//   }, 400);
// });


$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})