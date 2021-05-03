/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/controls/accordion.js":
/*!********************************************!*\
  !*** ./resources/js/controls/accordion.js ***!
  \********************************************/
/***/ (() => {

window.addEventListener('DOMContentLoaded', function () {
  var accordions = Array.from(document.getElementsByClassName('accordion'));
  var accordionHandlers = Array.from(document.getElementsByClassName('accordion__title'));
  accordionHandlers.map(function (e) {
    e.addEventListener('click', function () {
      accordionHandle(this, this.closest('.accordion'));
    });
  });

  function accordionHandle(element, accordion) {
    if (accordion.classList.toggle('open')) {
      expandAccordion(element.nextElementSibling);
    } else {
      collapseAccordion(element.nextElementSibling);
    }

    accordions.map(function (e) {
      if (e.id != accordion.id) {
        e.classList.remove('open');
        e.getElementsByClassName('accordion__content')[0].style.height = '';
      }
    });
  }

  function collapseAccordion(element) {
    element.style.height = '';
  }

  function expandAccordion(element) {
    element.style.height = element.scrollHeight + 'px';
  }
});

/***/ }),

/***/ "./resources/js/controls/bell-icon.js":
/*!********************************************!*\
  !*** ./resources/js/controls/bell-icon.js ***!
  \********************************************/
/***/ (() => {

window.addEventListener('DOMContentLoaded', function () {
  var bellIcon = $('.bell-icon');
  bellIcon.on('click', function () {
    if ($(this).find('.fa-bell').hasClass('far')) {
      $(this).find('.fa-bell').removeClass('far');
      $(this).find('.fa-bell').addClass('fas');
    } else if ($(this).find('.fa-bell').hasClass('fas')) {
      $(this).find('.fa-bell').removeClass('fas');
      $(this).find('.fa-bell').addClass('far');
    }
  });
  bellIcon.on('focusout', function () {
    if ($('.notifications').attr('style') !== 'display: none;') {
      $(this).find('.fa-bell').removeClass('fas');
      $(this).find('.fa-bell').addClass('far');
    }
  });
});
$(document).ready(function ($) {
  $('.bell-icon').on('click', function (e) {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '/viewNotfs',
      data: {
        is_viewed: 1
      },
      dataType: 'json',
      success: function success(result) {
        console.log(result);
      },
      error: function error(data) {
        console.log(data);
      }
    });
  });
});

/***/ }),

/***/ "./resources/js/controls/modal.js":
/*!****************************************!*\
  !*** ./resources/js/controls/modal.js ***!
  \****************************************/
/***/ (() => {

window.addEventListener('DOMContentLoaded', function () {
  var modalHandlers = Array.from(document.querySelectorAll('[data-type="modal"]'));
  var closeModalBtn = Array.from(document.querySelectorAll('[data-type="close-modal"]'));

  var handleModal = function handleModal(element) {
    document.getElementById("overlay-".concat(element.dataset["id"])).classList.toggle('hidden');
    document.getElementById("overlay-".concat(element.dataset["id"])).classList.toggle('flex');
  };

  var closeModal = function closeModal(element) {
    document.getElementById("".concat(element.dataset["close"])).classList.toggle('hidden');
    document.getElementById("".concat(element.dataset["close"])).classList.toggle('flex');
  };

  modalHandlers.map(function (element) {
    element.addEventListener('click', function (event) {
      handleModal(this);
    });
  });
  closeModalBtn.map(function (element) {
    element.addEventListener('click', function (event) {
      closeModal(this);
    });
  });
});

/***/ }),

/***/ "./resources/js/controls/toast.js":
/*!****************************************!*\
  !*** ./resources/js/controls/toast.js ***!
  \****************************************/
/***/ (() => {

window.addEventListener('DOMContentLoaded', function () {
  $('.close-toast').on('click', function () {
    hide();
  });
  setInterval(function () {
    hide();
  }, 8000);

  function hide() {
    $('.toast').addClass('hide-toast');
    setInterval(function () {
      $('.toast').remove();
    }, 150);
  }
});

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!*******************************************!*\
  !*** ./resources/js/controls/controls.js ***!
  \*******************************************/
__webpack_require__(/*! ./accordion */ "./resources/js/controls/accordion.js");

__webpack_require__(/*! ./modal */ "./resources/js/controls/modal.js");

__webpack_require__(/*! ./toast */ "./resources/js/controls/toast.js");

__webpack_require__(/*! ./bell-icon */ "./resources/js/controls/bell-icon.js");
})();

/******/ })()
;