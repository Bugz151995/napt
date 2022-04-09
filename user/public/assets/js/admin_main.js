/**
 * animate css promise based approach
 * 
 * @param {String} element id or class of the element
 * @param {String} animation name of the animation
 * @param {String} prefix default value of animate__
 */
function animateCSS(element, animation, speed, prefix = 'animate__') {
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

    node.addEventListener('animationend', handleAnimationEnd, {
      once: true
    });
  });
}

/**
 * Initialization of Perfect Scrollbar
 */
const sidebar = document.getElementById('sidebar');
const content = document.getElementById('app');
const login   = document.getElementById('login-container');

if (sidebar !== null) {
  const ps_sidebar = new PerfectScrollbar(sidebar);
  const ps_content = new PerfectScrollbar(content);
}

if (login !== null) {
  const ps_login = new PerfectScrollbar(login);
}

/**
 * sidebar toggle onclick event
 */

$('#sidebar-toggle').click(() => {
  width = document.body.clientWidth;

  if (width > 768) {
    $('#sidebar').toggleClass('md-toggled');
    $('#sidebar').removeClass('toggled');
    $('#app').toggleClass('toggled');
    $('#topbar').toggleClass('toggled');
    $('#footer').toggleClass('toggled');
  } else {
    $('#sidebar').removeClass('md-toggled');
    $('#sidebar').toggleClass('toggled');
  }

  $('#sidebar-toggle-icon').toggleClass('bx-x');

  const sidebarToggle = document.getElementById('sidebar-toggle-icon');

  animateCSS('#sidebar-toggle-icon', 'rubberBand', 'faster');
});

window.addEventListener('resize', () => {
  width = document.body.clientWidth;

  if (width > 768) {
    $('#sidebar').removeClass('md-toggled');
    $('#app').removeClass('toggled');
    $('#topbar').removeClass('toggled');
    $('#footer').removeClass('toggled');
  }
})

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
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
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
 * inititalize tables
 */
$(document).ready(function () {
  $('#app-table').DataTable({
    responsive: true,
    "pagingType": "first_last_numbers"
  });
});

/**
 * pagination small
 */
$(document).ready(() => {
  $('.pagination').addClass('pagination-sm');
  $('div#app-table_wrapper > div.row').addClass('g-3 mb-3');
});


/**
 * about us mission onclick event listener
 */
$('#about-mission-toggle').on('click', () => {

  if ($('#submit-btn-mission').hasClass('d-none')){
    animateCSS('#about-mission-toggle', 'slideInRight', 'faster'); 
  } else {
    animateCSS('#about-mission-toggle', 'slideInLeft', 'faster'); 
  }
  
  animateCSS('#submit-btn-mission', 'fadeIn', 'slow');
  $('#about-mission-toggle-icon').toggleClass('bx-x');
  $('#submit-btn-mission').toggleClass('d-none');

  document.getElementById('mission').toggleAttribute('disabled');
});

/**
 * about us vision onclick event listener
 */
$('#about-vision-toggle').on('click', () => {

  if ($('#submit-btn-vision').hasClass('d-none')){
    animateCSS('#about-vision-toggle', 'slideInRight', 'faster'); 
  } else {
    animateCSS('#about-vision-toggle', 'slideInLeft', 'faster'); 
  }
  
  animateCSS('#submit-btn-vision', 'fadeIn', 'slow');
  $('#about-vision-toggle-icon').toggleClass('bx-x');
  $('#submit-btn-vision').toggleClass('d-none');

  document.getElementById('vision').toggleAttribute('disabled');
});

/**
 * about us intro onclick event listener
 */
$('#about-intro-toggle').on('click', () => {

  if ($('#submit-btn-intro').hasClass('d-none')){
    animateCSS('#about-intro-toggle', 'slideInRight', 'faster'); 
  } else {
    animateCSS('#about-intro-toggle', 'slideInLeft', 'faster'); 
  }

  animateCSS('#submit-btn-intro', 'fadeIn', 'slow'); 
  $('#about-intro-toggle-icon').toggleClass('bx-x');
  $('#submit-btn-intro').toggleClass('d-none');

  document.getElementById('intro').toggleAttribute('disabled');
});

/**
 * drag and drop file upload
 */
document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
  const dropZoneElement = inputElement.closest(".drop-zone");

  dropZoneElement.addEventListener("click", (e) => {
    inputElement.click();
  });

  inputElement.addEventListener("change", (e) => {
    if (inputElement.files.length) {
      updateThumbnail(dropZoneElement, inputElement.files[0]);
    }
  });

  dropZoneElement.addEventListener("dragover", (e) => {
    e.preventDefault();
    dropZoneElement.classList.add("drop-zone--over");
  });

  ["dragleave", "dragend"].forEach((type) => {
    dropZoneElement.addEventListener(type, (e) => {
      dropZoneElement.classList.remove("drop-zone--over");
    });
  });

  dropZoneElement.addEventListener("drop", (e) => {
    e.preventDefault();

    if (e.dataTransfer.files.length) {
      inputElement.files = e.dataTransfer.files;
      updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
    }

    dropZoneElement.classList.remove("drop-zone--over");
  });
});

/**
 * Updates the thumbnail on a drop zone element.
 *
 * @param {HTMLElement} dropZoneElement
 * @param {File} file
 */
function updateThumbnail(dropZoneElement, file) {
  let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

  // First time - remove the prompt
  if (dropZoneElement.querySelector(".drop-zone__prompt")) {
    dropZoneElement.querySelector(".drop-zone__prompt").remove();
  }

  // First time - there is no thumbnail element, so lets create it
  if (!thumbnailElement) {
    thumbnailElement = document.createElement("div");
    thumbnailElement.classList.add("drop-zone__thumb");
    dropZoneElement.appendChild(thumbnailElement);
  }

  thumbnailElement.dataset.label = file.name;

  // Show thumbnail for image files
  if (file.type.startsWith("image/")) {
    const reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = () => {
      thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
    };
  } else {
    thumbnailElement.style.backgroundImage = null;
  }
}

/**
 * populate the modal after a click event
 * 
 * @param {String} urlString url address to send request to
 * @param {String} modal_id id of the modal
 * @param {Array} fields fields or title or images in a modal
 * @param {String} action type of action i.e. edit, delete, etc.
 */
function populateModal(urlString, modal_id, fields, action) {

  $.ajax({
    url: urlString,
    type: 'post',
    beforeSend: function (f) {
      console.log('executing...');
      console.log('splash screen here...');
    },
    success: function (data) {
      let objData = JSON.parse(data);

      // get all fields 
      fields.forEach((index) => {
        Object.keys(objData).forEach(key => {
          let fieldType = '_field';
          let divisible = '_divisible';
          let spanType  = '_span';
          let maxnuType = '_numbermax'; // create auction
          let indexId = index.getAttribute('id');
          let id = key + action;

          // normal field types
          if (indexId == id + fieldType)
            index.value = objData[key];

          // fields that needs conversion
          if (indexId == id + fieldType + divisible)
            index.value = (objData[key]) ? objData[key] / 100 : null;

          // images
          if (indexId == id && indexId.includes('img'))
            index.setAttribute('src', objData[key]);

          // in stock max number
          if (indexId == id + maxnuType)
            index.setAttribute('max', objData[key]);

          // name of the coin
          if (indexId == id + spanType)
            index.innerHTML = objData[key];
        })
      });

      let modal = new bootstrap.Modal(document.getElementById(modal_id), {
        backdrop: 'static'
      });
      modal.toggle();
    }
  })
}