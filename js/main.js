$('.hotel-carousel').owlCarousel({
  loop:false,
  margin:10,
  nav:true,
  dots:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:4
      }
  }
})

$('.vehicle-carousel').owlCarousel({
  loop:false,
  margin:10,
  nav:true,
  dots:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:4
      }
  }
})


$('.client-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  dots:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:4
      },
      1000:{
          items:6
      }
  }
})






$('.testimonial-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  dots:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:2
      }
  }
})



$(".banner-services-carousel").owlCarousel({
  loop: true,
  nav: true,
  dots: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 5,
    },
  },
});

$(".banner-carousel").owlCarousel({
  loop: true,
  nav: true,
  dots: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});

//menu mob
$(document).ready(function(){
  $(".show-nav").click(function(){
    $(".nav-list").slideDown();
    $(".show-nav").hide();
    $(".hide-nav").show();
  })
  $(".hide-nav").click(function(){
    $(".nav-list").slideUp();
    $(".show-nav").show();
    $(".hide-nav").hide();
  })
})

//shomadhaan filtering item
$(document).ready(function(){
  $(".shomadhaan_industry_filtering_row .item").click(function(){
    let filterItem = $(this).attr('id');
    if( filterItem != 'all' ){
      $('.industry_filtering_list').removeClass('active_filtering_list');
      $("."+filterItem).addClass('active_filtering_list');
    }
  })
  $(".shomadhaan_industry_filtering_row .active_item").click(function(){
    let filterList = $(this).attr('id');
    if( filterList != 'all' ){
      $('.active_item').removeClass('filter_active');
      $('.active_item').removeClass('active_filtering_list');
      $("."+filterList).addClass('filter_active');
    }
  })
})



//services dropdown
$(document).ready(function(){
  $(".service-item-dropdown").click(function(){
    let item = $(this).attr('id');
  
    if( item != 'all' ){
      $('.'+item).slideToggle();
      
    }
  
  })
})

$(document).ready(function(){
  $(".service-item").click(function(){
    let serviceItem = $(this).attr('id');
    let activeItem = $(this).attr('id');
    if( serviceItem != 'all' ){
      $(".services-section-3 .right").removeClass('show-service');
      $('.'+serviceItem).addClass('show-service');
      
    }
    if( activeItem != 'all' ){
      $('.service-item').removeClass('show-service');
      $('.service-item').removeClass('active-item');
      $('.'+activeItem).addClass('active-item');
    }
  })
})
















//booking js
$(document).ready(function(){
  $('.rent-a-car').click(function(){
    $('.rent-a-car .b-img').show();
    $('.rent-a-car .h-img').hide();

    $('.book-hotel .b-img').show();
    $('.book-hotel .h-img').hide();

    $('.custom-book .b-img').show();
    $('.custom-book .h-img').hide();

    $('.for-car-book').show();
    $('.for-hotel-book').hide();
    $('.for-custom-book').hide();

  })

  $('.book-hotel').click(function(){
    $('.rent-a-car .b-img').hide();
    $('.rent-a-car .h-img').show();

    $('.book-hotel .b-img').hide();
    $('.book-hotel .h-img').show();

    $('.custom-book .b-img').show();
    $('.custom-book .h-img').hide();

    $('.for-car-book').hide();
    $('.for-hotel-book').show();
    $('.for-custom-book').hide();
  })

  $('.custom-book').click(function(){
    $('.rent-a-car .b-img').hide();
    $('.rent-a-car .h-img').show();

    $('.book-hotel .b-img').show();
    $('.book-hotel .h-img').hide();

    $('.custom-book .b-img').hide();
    $('.custom-book .h-img').show();

    $('.for-car-book').hide();
    $('.for-hotel-book').hide();
    $('.for-custom-book').show();
  })
})









let item_image = document.querySelectorAll('.check-car input[type="radio"]');
let item_image_again = document.querySelectorAll('.check-car-again input[type="radio"]');
let roundTrip = document.querySelectorAll('.round_trip .custom_container input[type="checkbox"] ')
let showRoundTrip = document.getElementsByClassName('show_round_trip');
let takeVehicleFacility = document.getElementsByClassName('take-vehicle-facility');
let showVehicle = document.querySelectorAll('.show-vehicle .custom_container input[type="checkbox"] ')

for( let i in roundTrip ){
  roundTrip[i].onclick = e => {
    if( roundTrip[i].checked ){
      showRoundTrip[i].style.display = "block"
    }else{
      showRoundTrip[i].style.display = "none"
     
    }
  }
}

for( let i in  showVehicle ){
  showVehicle[i].onclick = e => {
    if( showVehicle[i].checked ){
      takeVehicleFacility[i].style.display = 'block'
    }
    else{
      takeVehicleFacility[i].style.display = 'none'
    }
  }
}

for( let i in item_image ){
  item_image[i].onclick = e => {
      for(let j in item_image){
        if( item_image[j].checked ) {
          item_image[j].parentElement.children[2].classList.add('active-booking')
        }else{
          item_image[j].parentElement.children[2].classList.remove('active-booking')
          item_image_again.checked = false;
        }
      }
  }
}



for( let i in item_image_again ){
  item_image_again[i].onclick = e => {
      for(let j in item_image_again){
        if( item_image_again[j].checked ) {
          item_image_again[j].parentElement.children[2].classList.add('active-booking')
        }else{
          item_image_again[j].parentElement.children[2].classList.remove('active-booking')
        }
      }
  }
}

$(document).ready(function(){
  $('.check-car').click(function(){
    let carBooking = $(this).attr('id');
    if( carBooking != 'all' ){
      $('.form-booking').hide();
      $('.'+carBooking).show();
    }
  })
})



$(".chosen").chosen();


let plus = document.getElementsByClassName('plus');
let minus = document.getElementsByClassName('minus');
let value = document.getElementsByClassName('value');

for( let i in plus ){
  plus[i].onclick = () => {
    let number = parseInt(value[i].value);
    number++;
    value[i].value = number;
  } 
}
for( let i in minus ){
  minus[i].onclick = () => {
    let number = parseInt(value[i].value);
    if( value[i].value != 1 ){
      number--;
    }
    value[i].value = number;
  } 
}





let serviceNav = document.getElementById('services-nav');

function showNav(){ 
  serviceNav.style.opacity = "1"
  serviceNav.style.visibility = "unset"
  serviceNav.style.transition = "0.4s ease-in-out"
}
showNav()
function hideNav(){ 
  serviceNav.style.opacity = "0"
  serviceNav.style.visibility = "hidden"
  serviceNav.style.transition = "0.4s ease-in-out"
}
hideNav()



$(document).ready(function(){
  $('.service-list').click(function(){
    let serviceDropdown = $(this).attr('id')
    if( serviceDropdown  != 'all' ){
      $('.'+serviceDropdown).slideToggle();
    }
  })
})






$(document).ready(function(){
  $('.our-services-mob a').click(function(){
    $(".our-services-list-mob").slideToggle()
  })

  $(".our-services-list-item-mob").click(function(){
    let serviceDropDownMob = $(this).attr('id');

    if( serviceDropDownMob != 'all' ){
      $('.' + serviceDropDownMob ).slideToggle();
    }
  })

})


//go to top
$(document).ready(function(){
  $(window).scroll(function(){
      if( $(window).scrollTop() > 10 ){
          $(".go-to-top a").fadeIn();
      }
      else{
          $(".go-to-top a").fadeOut();
      }
  })
})