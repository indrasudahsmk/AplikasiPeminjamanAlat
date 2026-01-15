(function($) {
  "use strict"; // Start of use strict

  // Function to save sidebar state
  function saveSidebarState(isToggled) {
    localStorage.setItem('sidebarToggled', isToggled ? 'true' : 'false');
  }

  // Function to get sidebar state
  function getSidebarState() {
    return localStorage.getItem('sidebarToggled') === 'true';
  }

  // Restore sidebar state on page load
  $(document).ready(function() {
    var isToggled = getSidebarState();
    if (isToggled) {
      $("body").addClass("sidebar-toggled");
      $(".sidebar").addClass("toggled");
    }
  });

  // Toggle the side navigation
  $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
    var isToggled = !$("body").hasClass("sidebar-toggled");
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
    if ($(".sidebar").hasClass("toggled")) {
      $('.sidebar .collapse').collapse('hide');
    };
    saveSidebarState(isToggled);
  });

  // Close any open menu accordions when window is resized below 768px
  $(window).resize(function() {
    // Removed to prevent closing on scroll on mobile
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

  // Scroll to top button appear
  $(document).on('scroll', function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });

})(jQuery); // End of use strict
