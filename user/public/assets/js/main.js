/**
 * animate css promise based approach
 * 
 * @param {String} element id or class of the element
 * @param {String} animation name of the animation
 * @param {String} prefix default value of animate__
 */
function animateCSS(element, animation, speed, prefix = 'animate__')
{
  // We create a Promise and return it
  new Promise((resolve, reject) => {
    const animationName = `${prefix}${animation}`;
    const animationSpeed = (speed) ? `${prefix}${speed}` : null;
    const node = document.querySelector(element);

    node.classList.add(`${prefix}animated`, animationName, animationSpeed);

    // When the animation ends, we clean the classes and resolve the Promise
    function handleAnimationEnd(event) {
      event.stopPropagation();
      node.classList.remove(`${prefix}animated`, animationName);
      resolve('Animation ended');
    }

    node.addEventListener('animationend', handleAnimationEnd, {once: true});
  });
}

/**
 * Initialization of Perfect Scrollbar
 */
const sidebar = document.getElementById('sidebar');

if (sidebar !== null) {
  const ps_sidebar = new PerfectScrollbar(sidebar);
}

/**
 * sidebar toggle onclick event
 */
$('#sidebar-toggle').click(() => {
  $('#sidebar').toggleClass('toggled');
  $('#sidebar-backdrop').toggleClass('d-block');
  $('#sidebar-toggle-icon').toggleClass('bx-x');
  $('#document-body').toggleClass('overflow-hidden');
  
  animateCSS('#sidebar-toggle-icon', 'rubberBand', 'faster');
});

$('#sidebar-backdrop').click(() => {
  $('#sidebar').toggleClass('toggled');
  $('#sidebar-backdrop').toggleClass('d-block');
  $('#sidebar-toggle-icon').toggleClass('bx-x');
  $('#document-body').toggleClass('overflow-hidden');
  
  animateCSS('#sidebar-toggle-icon', 'rubberBand', 'faster');
});

/**
 * topbar dropdown onclick event
 */
$('#topbar-dropdown-btn').click(() => {
  animateCSS('#topbar-dropdown-btn', 'flipInY', 'faster');  
  animateCSS('#topbar-dropdown-menu', 'slideInRight', 'faster');  
});

/**
 * starter JavaScript for disabling form submissions if there are invalid fields
 */
(function () {
  'use strict';

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  let forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      console.log(form);
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

/**
 * password visibility toggle
 */
const passwordVisibilityToggle = document.getElementById('password-visibility');

if (passwordVisibilityToggle !== null) {
  let passwordField = document.getElementById('password');

  passwordVisibilityToggle.addEventListener('click', () => {
    if (passwordField.type === "password") {
      passwordField.type = "text";
    } else {
      passwordField.type = "password";
    }
  });
}

/**
 * Countdown Timer
 */
// Set the date we're counting down to
let datetime = document.getElementById('ends_at');

if (datetime) {
  let countDownDate = new Date(datetime.value).getTime();

  // Update the count down every 1 second
  let x = setInterval(function() {
    // Get today's date and time
    let now = new Date().getTime();

    // Find the distance between now and the count down date
    let distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"

    const d = document.getElementById('days');
    const h = document.getElementById('hours');
    const m = document.getElementById('minutes');
    const s = document.getElementById('seconds');

    d.innerHTML = days + "d";
    h.innerHTML = hours + "h";
    m.innerHTML = minutes + "m";
    s.innerHTML = seconds + "s";

    // If the count down is over, write some text 
    if (distance < 0) {
      clearInterval(x);
      d.innerHTML = "";
      h.innerHTML = "";
      m.innerHTML = "";
      s.innerHTML = "";
      document.getElementById("is_closed").innerHTML = "BIDDING IS CLOSED";
    }
  }, 1000);
}