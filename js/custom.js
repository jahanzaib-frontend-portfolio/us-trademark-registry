$(document).ready(function () {
  switchDiv();

  $("li:first-child").addClass("first");
  $("li:last-child").addClass("last");

  $('[href="#"]').attr("href", "javascript:;");

  $(".menu-Bar").click(function () {
    $(this).toggleClass("open");
    $(".menuWrap").toggleClass("open");
    $("body").toggleClass("ovr-hiddn");
  });

  $(".loginUp").click(function () {
    $(".LoginPopup").fadeIn();
    $(".overlay").fadeIn();
  });

  $(".signUp").click(function () {
    $(".signUpPop").fadeIn();
    $(".overlay").fadeIn();
  });

  $(".closePop,.overlay").click(function () {
    $(".popupMain").fadeOut();
    $(".overlay").fadeOut();
  });

  $(".has-submenu").click(function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this).find("ul.sub-menu").slideUp();
    } else {
      $(this).addClass("active");
      $(this).find("ul.sub-menu").slideDown();
    }
  });

  $(".menu .menu-item-has-children").addClass("dropdown-nav ");
  $(".menu .menu-item-has-children ul.sub-menu").addClass("dropdown");

  /* Tabbing Function */
  $("[data-targetit]").on("click", function (e) {
    $(this).addClass("active");
    $(this).siblings().removeClass("active");
    var target = $(this).data("targetit");
    $("." + target)
      .siblings('[class^="box-"]')
      .hide();
    $("." + target).fadeIn();
    $(".tabViewList").slick("setPosition", 0);
  });

  // Accordian
  $(".accordian h4").click(function () {
    if ($(this).parent("li").hasClass("active")) {
      $(this).parent("li").removeClass("active");
      $(this).next().slideUp();
    } else {
      $(".accordian li").removeClass("active");
      $(this).parent("li").addClass("active");
      console.log("Doesnt have active");
      $(".accordian li div").slideUp();
      $(this).parent("li").find("div").slideDown();
    }
  });

  $("li.dropdown-nav").hover(function () {
    $(this).children("ul").stop(true, false, true).slideToggle(300);
  });

  $(".searchBtn").click(function () {
    $(".searchWrap").addClass("active");
    $(".overlay").fadeIn("active");
    $(".searchWrap input").focus();
    $(".searchWrap input").focusout(function (e) {
      $(this).parents().removeClass("active");
      $(".overlay").fadeOut("active");
      $("body").removeClass("ovr-hiddn");
    });
  });

  $(".testi-slider").slick({
    dots: false,
    infinite: true,
    speed: 300,
    autoplay: true,
    slidesToShow: 1,
    prevArrow:
      "<span class='arr-left slick-arrow'><i class='far fa-long-arrow-left'></i></span>",
    nextArrow:
      "<span class='arr-right slick-arrow'><i class='far fa-long-arrow-right'></i></span>",
    // prevArrow: $('.prev'),
    // nextArrow: $('.next')
  });

  $(".clients-slider1").slick({
    dots: false,
    arrows: false,
    autoplay: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    // prevArrow: $('.prev'),
    // nextArrow: $('.next')
    responsive: [
      {
        breakpoint: 700,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });

  $(".clients-slider2").slick({
    dots: false,
    arrows: false,
    autoplay: true,
    infinite: true,
    speed: 300,
    rtl: true,
    slidesToShow: 3,
    // prevArrow: $('.prev'),
    // nextArrow: $('.next')
    responsive: [
      {
        breakpoint: 700,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });

  //     Slider For
  // $('.slider-for').slick({
  //     slidesToShow: 1,
  //     slidesToScroll: 1,
  //     dots: false,
  //     arrows: false,
  //     fade: true,
  //     asNavFor: '.slider-nav'
  // });
  // $('.slider-nav').slick({
  //     slidesToShow: 4,
  //     slidesToScroll: 1,
  //     asNavFor: '.slider-for',
  //     dots: false,
  //     focusOnSelect: true
  // });

  /* Top Scroll */
  // $('body').on('click', '.scrolldown-fl', function() {
  //     goToScroll('awardSec');
  // });

  $(".popbtn").click(function () {
      $(".overlay").fadeIn();
      $("#popdynamic").fadeIn();

      var packtitle = $(this).closest(".pckg").find(".pck-hdng").html();
      var packprice = $(this).closest(".pckg").find("h4").html();

      // 🔍 Add Debug Logs
      console.log("Clicked Package Title:", packtitle);
      console.log("Clicked Package Price:", packprice);

      var thisrel = $(this).attr("rel");
      $('input[name="pkg_key"]').val(thisrel);
      $("#popdynamic input#popuppackage").val(thisrel);
      $("#popdynamic .centercont h3 span").html(packtitle);
      $("#popdynamic .centercont h4").html("In Just <span>" + packprice + "</span>");
  });


  $(".closeico,.overlay").click(function () {
    $(".popupmain").fadeOut();
    $(".overlay").fadeOut();

    $(".LoginPopup").removeClass("price-margin");
  });

  $(".loginUp").click(function () {
    $("#popstatic").fadeIn();
    $(".overlay").fadeIn();

    var orgtexts = "$39";
    // $(".centercont h3").text('Get Custom Logo Design');
    $(".centercont h4").html("in Just <span>" + orgtexts + "</span>");
  });

  $(".allinonelogin").click(function () {
    $(".LoginPopup").fadeIn();
    $(".overlay").fadeIn();

    var orgtexts = "$1599";
    // $(".centercont h3").text('Get Custom Logo Design');
    $(".centercont h4").html("in Just <span>" + orgtexts + "</span>");
  });
});

// $(window).on("scroll touchmove", function() {
//     $("header").toggleClass("stickyOpen", $(document).scrollTop() > 200);
// });

$(window).on("load", function () {
  var currentUrl = window.location.href.substr(
    window.location.href.lastIndexOf("/") + 1
  );
  $("ul.menu li a").each(function () {
    var hrefVal = $(this).attr("href");
    if (hrefVal == currentUrl) {
      $(this).removeClass("active");
      $(this).closest("li").addClass("active");
      $("ul.menu li.first").removeClass("active");
    }
  });
});

/* RESPONSIVE JS */
if ($(window).width() < 824) {
}

function switchDiv() {
  var $window = $(window).outerWidth();
  if ($window <= 768) {
    $(".topAppendTxt").each(function () {
      var getdtd = $(this).find(".cloneDiv").clone(true);
      $(this).find(".cloneDiv").remove();
      $(this).append(getdtd);
    });
  }
}

function goToScroll(e) {
  $("html, body").animate(
    {
      scrollTop: $("." + e).offset().top,
    },
    1000
  );
}

$("#popupform").submit(function (e) {
  e.preventDefault();
  $(".alreadyerror").remove();
  var code = $("#popupform").find("#popupcountrycode").val();
  $(this).find(".logoeminentloader").show();
  var name = $("#popupform input#name").val();
  var email = $("#popupform input#email").val();
  var phone = $("#popupform input#phoneNum2").val();
  var countrycode = code;
  var thepackage = $("#popupform input#popuppackage").val();
  var domain_url = "https://www.logoeminent.com/";
  $.ajax({
    type: "POST",
    url: domain_url + "cloud/include/signup",
    data: {
      name: name,
      email: email,
      phone: phone,
      countrycode: countrycode,
      thepackage: thepackage,
    },
    success: function (data) {
      $("#popupform").find(".logoeminentloader").hide();
      if (data == "error") {
        $(".packageformsubmit").after(
          '<div class="alreadyerror"> Something Went Wron Please Try Again.</div>'
        );
      } else if (data == "exists") {
        $(".packageformsubmit").after(
          '<div class="alreadyerror"> You are already a member. <a href="https://www.logoeminent.com/cloud">Click Here</a> to sign in.</div>'
        );
      } else {
        window.location.replace(data);
      }
      // if (data == 'success') {
      //     window.location.replace(domain_url + "crm/dashboard/payment.php?package=" + thepackage + "&firstsignup=1");
      // } else if (data == 'exists') {
      //     $('#popupformsubmit').after('<div class="alreadyerror"> You are already a member. <a href="https://www.logoeminent.com/crm">Click Here</a> to sign in.</div>');
      // } else {}
    },
  });
});

$("#popupform1").submit(function (e) {
  e.preventDefault();
  $(".alreadyerror").remove();
  var code = $("#popupform1").find("#popupcountrycode").val();
  $(this).find(".logoeminentloader").show();
  var name = $("#popupform1 input#name1").val();
  var email = $("#popupform1 input#email1").val();
  var phone = $("#popupform1 input#phoneNum3").val();
  var countrycode = code;
  var thepackage = $("#popupform1 input#popuppackage1").val();
  var domain_url = "https://www.logoeminent.com/";
  $.ajax({
    type: "POST",
    url: domain_url + "cloud/include/signup",
    data: {
      name: name,
      email: email,
      phone: phone,
      countrycode: countrycode,
      thepackage: thepackage,
    },
    success: function (data) {
      $("#popupform1").find(".logoeminentloader").hide();
      if (data == "error") {
        $(".packageformsubmit1").after(
          '<div class="alreadyerror"> Something Went Wron Please Try Again.</div>'
        );
      } else if (data == "exists") {
        $(".packageformsubmit1").after(
          '<div class="alreadyerror"> You are already a member. <a href="https://www.logoeminent.com/cloud">Click Here</a> to sign in.</div>'
        );
      } else {
        window.location.replace(data);
      }
      // if (data == 'success') {
      //     window.location.replace(domain_url + "crm/dashboard/payment.php?package=" + thepackage + "&firstsignup=1");
      // } else if (data == 'exists') {
      //     $('#popupformsubmit').after('<div class="alreadyerror"> You are already a member. <a href="https://www.logoeminent.com/crm">Click Here</a> to sign in.</div>');
      // } else {}
    },
  });
});

$(".accordion-list > li > .answer").hide();

$(".accordion-list > li").click(function () {
  if ($(this).hasClass("active")) {
    $(this).removeClass("active").find(".answer").slideUp();
  } else {
    $(".accordion-list > li.active .answer").slideUp();
    $(".accordion-list > li.active").removeClass("active");
    $(this).addClass("active").find(".answer").slideDown();
  }
  return false;
});

$(document).on("click", ".srch-btn", function () {
  $(".search-data tbody").html("");
  $(".search-data").css("display", "none");
  var searchText = $(".srch").val();
  if (searchText == "") {
  } else {
    var requestOptions = {
      method: "GET",
    };

    fetch(
      "https://innova-labs.net:9094/trademarks/search?name=" +
        searchText +
        "&page=1&count=10",
      requestOptions
    )
      .then((response) => response.json())
      .then((result) => {
        console.log(result.elements.length);
        if (result.elements.length > 0) {
          result.elements.forEach(function (item, index) {
            $(".search-data tbody").append(
              "<tr><td>" +
                item.markIdentification +
                "</td><td>" +
                item.owners[0].partyName +
                "</td><td>" +
                item.serialNumber +
                "</td><td>" +
                item.filingDate +
                "</td></tr>"
            );
          });
          $(".search-data").css("display", "block");
        } else {
          $(".search-data tbody").append(
            '<tr><td colspan="4">No Trademark Found For ' +
              searchText +
              "</td></tr>"
          );
          $(".search-data").css("display", "block");
        }
      })
      .catch((error) => console.log("error", error));
  }
});
$(document).ready(function () {
  $(".overlay").fadeIn();
  $("#popdynamic").fadeIn();
});

// step form progress bar start
const steps = document.querySelectorAll(".step-form-div");
const progressBar = document.querySelector(".progress");
const nextBtns = document.querySelectorAll(".step-next");

nextBtns.forEach((btn, index) => {
  btn.addEventListener("click", () => {
    if (index <= steps.length - 1) {
      updateProgressBar();
    }
  });
});

// function updateProgressBar() {
//   const progressPercentage = ((currentStep + 1) / steps.length) * 100;
//   progressBar.style.width = `${progressPercentage}%`;
//   currentStep++;
// }

// step form progress bar end

// 

// $(document).ready(function() {
//     $(".steps-section:not(:first)").hide();
//     $(".continue-btn").click(function() {
//       var currentSection = $(this).closest(".steps-section");
//       currentSection.hide();
//       var nextSection = currentSection.next(".steps-section");
//       if (nextSection.length > 0) {
//         nextSection.show();
//       } else {
//         // If there are no more sections, you can redirect or perform other actions
//         console.log("No more sections");
//       }
//     });
//   });
  
