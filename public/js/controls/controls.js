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
})();

/******/ })()
;