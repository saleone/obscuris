/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.l = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// identity function for calling harmory imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };

/******/ 	// define getter function for harmory exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		Object.defineProperty(exports, name, {
/******/ 			configurable: false,
/******/ 			enumerable: true,
/******/ 			get: getter
/******/ 		});
/******/ 	};

/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};

/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports) {

eval("// Floating label headings for the contact form\n$(function() {\n    $(\"body\").on(\"input propertychange\", \".floating-label-form-group\", function(e) {\n        $(this).toggleClass(\"floating-label-form-group-with-value\", !!$(e.target).val());\n    }).on(\"focus\", \".floating-label-form-group\", function() {\n        $(this).addClass(\"floating-label-form-group-with-focus\");\n    }).on(\"blur\", \".floating-label-form-group\", function() {\n        $(this).removeClass(\"floating-label-form-group-with-focus\");\n    });\n});\n\n// Navigation Scripts to Show Header on Scroll-Up\njQuery(document).ready(function($) {\n    var MQL = 1170;\n\n    //primary navigation slide-in effect\n    if ($(window).width() > MQL) {\n        var headerHeight = $('.navbar-custom').height();\n        $(window).on('scroll', {\n                previousTop: 0\n            },\n            function() {\n                var currentTop = $(window).scrollTop();\n                //check if user is scrolling up\n                if (currentTop < this.previousTop) {\n                    //if scrolling up...\n                    if (currentTop > 0 && $('.navbar-custom').hasClass('is-fixed')) {\n                        $('.navbar-custom').addClass('is-visible');\n                    } else {\n                        $('.navbar-custom').removeClass('is-visible is-fixed');\n                    }\n                } else if (currentTop > this.previousTop) {\n                    //if scrolling down...\n                    $('.navbar-custom').removeClass('is-visible');\n                    if (currentTop > headerHeight && !$('.navbar-custom').hasClass('is-fixed')) $('.navbar-custom').addClass('is-fixed');\n                }\n                this.previousTop = currentTop;\n            });\n    }\n});\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMC5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9yZXNvdXJjZXMvYXNzZXRzL2pzL29jcy5qcz8zMmY1Il0sInNvdXJjZXNDb250ZW50IjpbIi8vIEZsb2F0aW5nIGxhYmVsIGhlYWRpbmdzIGZvciB0aGUgY29udGFjdCBmb3JtXG4kKGZ1bmN0aW9uKCkge1xuICAgICQoXCJib2R5XCIpLm9uKFwiaW5wdXQgcHJvcGVydHljaGFuZ2VcIiwgXCIuZmxvYXRpbmctbGFiZWwtZm9ybS1ncm91cFwiLCBmdW5jdGlvbihlKSB7XG4gICAgICAgICQodGhpcykudG9nZ2xlQ2xhc3MoXCJmbG9hdGluZy1sYWJlbC1mb3JtLWdyb3VwLXdpdGgtdmFsdWVcIiwgISEkKGUudGFyZ2V0KS52YWwoKSk7XG4gICAgfSkub24oXCJmb2N1c1wiLCBcIi5mbG9hdGluZy1sYWJlbC1mb3JtLWdyb3VwXCIsIGZ1bmN0aW9uKCkge1xuICAgICAgICAkKHRoaXMpLmFkZENsYXNzKFwiZmxvYXRpbmctbGFiZWwtZm9ybS1ncm91cC13aXRoLWZvY3VzXCIpO1xuICAgIH0pLm9uKFwiYmx1clwiLCBcIi5mbG9hdGluZy1sYWJlbC1mb3JtLWdyb3VwXCIsIGZ1bmN0aW9uKCkge1xuICAgICAgICAkKHRoaXMpLnJlbW92ZUNsYXNzKFwiZmxvYXRpbmctbGFiZWwtZm9ybS1ncm91cC13aXRoLWZvY3VzXCIpO1xuICAgIH0pO1xufSk7XG5cbi8vIE5hdmlnYXRpb24gU2NyaXB0cyB0byBTaG93IEhlYWRlciBvbiBTY3JvbGwtVXBcbmpRdWVyeShkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oJCkge1xuICAgIHZhciBNUUwgPSAxMTcwO1xuXG4gICAgLy9wcmltYXJ5IG5hdmlnYXRpb24gc2xpZGUtaW4gZWZmZWN0XG4gICAgaWYgKCQod2luZG93KS53aWR0aCgpID4gTVFMKSB7XG4gICAgICAgIHZhciBoZWFkZXJIZWlnaHQgPSAkKCcubmF2YmFyLWN1c3RvbScpLmhlaWdodCgpO1xuICAgICAgICAkKHdpbmRvdykub24oJ3Njcm9sbCcsIHtcbiAgICAgICAgICAgICAgICBwcmV2aW91c1RvcDogMFxuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIGZ1bmN0aW9uKCkge1xuICAgICAgICAgICAgICAgIHZhciBjdXJyZW50VG9wID0gJCh3aW5kb3cpLnNjcm9sbFRvcCgpO1xuICAgICAgICAgICAgICAgIC8vY2hlY2sgaWYgdXNlciBpcyBzY3JvbGxpbmcgdXBcbiAgICAgICAgICAgICAgICBpZiAoY3VycmVudFRvcCA8IHRoaXMucHJldmlvdXNUb3ApIHtcbiAgICAgICAgICAgICAgICAgICAgLy9pZiBzY3JvbGxpbmcgdXAuLi5cbiAgICAgICAgICAgICAgICAgICAgaWYgKGN1cnJlbnRUb3AgPiAwICYmICQoJy5uYXZiYXItY3VzdG9tJykuaGFzQ2xhc3MoJ2lzLWZpeGVkJykpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICQoJy5uYXZiYXItY3VzdG9tJykuYWRkQ2xhc3MoJ2lzLXZpc2libGUnKTtcbiAgICAgICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICQoJy5uYXZiYXItY3VzdG9tJykucmVtb3ZlQ2xhc3MoJ2lzLXZpc2libGUgaXMtZml4ZWQnKTtcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIH0gZWxzZSBpZiAoY3VycmVudFRvcCA+IHRoaXMucHJldmlvdXNUb3ApIHtcbiAgICAgICAgICAgICAgICAgICAgLy9pZiBzY3JvbGxpbmcgZG93bi4uLlxuICAgICAgICAgICAgICAgICAgICAkKCcubmF2YmFyLWN1c3RvbScpLnJlbW92ZUNsYXNzKCdpcy12aXNpYmxlJyk7XG4gICAgICAgICAgICAgICAgICAgIGlmIChjdXJyZW50VG9wID4gaGVhZGVySGVpZ2h0ICYmICEkKCcubmF2YmFyLWN1c3RvbScpLmhhc0NsYXNzKCdpcy1maXhlZCcpKSAkKCcubmF2YmFyLWN1c3RvbScpLmFkZENsYXNzKCdpcy1maXhlZCcpO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB0aGlzLnByZXZpb3VzVG9wID0gY3VycmVudFRvcDtcbiAgICAgICAgICAgIH0pO1xuICAgIH1cbn0pO1xuXG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIHJlc291cmNlcy9hc3NldHMvanMvb2NzLmpzIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7Iiwic291cmNlUm9vdCI6IiJ9");

/***/ }
/******/ ]);