/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************************!*\
  !*** ./resources/js/thumbnail-slider.js ***!
  \******************************************/
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Slider = /*#__PURE__*/function () {
  function Slider(options) {
    _classCallCheck(this, Slider);

    this.sliderSelector = options.sliderSelector;
    this.slideToShow = options.slideToShow;
    this.slideToScroll = options.slideToScroll;
    this.slideWidth = 100 / this.slideToShow;
    this.slideMove = 0;
    this.slideTrackWidth = (this.sliderSelector.children.length - this.slideToShow) * this.slideWidth;
  }

  _createClass(Slider, [{
    key: "slideTrack",
    value: function slideTrack() {
      var moveTo = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 0;
      this.slideMove = moveTo;
      this.sliderSelector.classList.add('slider-track');
      var slides = this.sliderSelector.children;

      var _iterator = _createForOfIteratorHelper(slides),
          _step;

      try {
        for (_iterator.s(); !(_step = _iterator.n()).done;) {
          var element = _step.value;
          element.classList.add('slide');
          element.style.width = this.slideWidth + "%";
          element.style.left = "-" + this.slideMove + "%";
        }
      } catch (err) {
        _iterator.e(err);
      } finally {
        _iterator.f();
      }
    }
  }, {
    key: "next",
    value: function next() {
      if (this.slideMove < this.slideTrackWidth) {
        this.slideMove += this.slideWidth;
      }

      this.slideTrack(this.slideMove);
    }
  }, {
    key: "prev",
    value: function prev() {
      if (this.slideMove > 0) {
        this.slideMove -= this.slideWidth;
      }

      this.slideTrack(this.slideMove);
    }
  }, {
    key: "navbuttons",
    value: function navbuttons() {
      var buttonPrev = document.createElement('button');
      var buttonNext = document.createElement('button');
      var parentElement = this.sliderSelector.parentNode;
      var prevID = this.sliderSelector.id + 'prevId';
      var nextID = this.sliderSelector.id + 'nextId';
      buttonPrev.setAttribute('id', prevID);
      buttonNext.setAttribute('id', nextID);
      buttonPrev.setAttribute('class', 'btn-prev');
      buttonNext.setAttribute('class', 'btn-next');
      parentElement.insertBefore(buttonPrev, this.sliderSelector);
      this.sliderSelector.after(buttonNext);
    }
  }]);

  return Slider;
}(); // home car slider


var homeProductSlider = new Slider({
  sliderSelector: document.querySelector('#slider'),
  slideToShow: 3
});
homeProductSlider.slideTrack();
homeProductSlider.navbuttons();

document.getElementById('slidernextId').onclick = function () {
  homeProductSlider.next();
};

document.getElementById('sliderprevId').onclick = function () {
  homeProductSlider.prev();
}; // sponsors


var sponsorsSlider = new Slider({
  sliderSelector: document.querySelector('#sponsors'),
  slideToShow: 4
});
sponsorsSlider.slideTrack();
sponsorsSlider.navbuttons();

document.getElementById('sponsorsnextId').onclick = function () {
  sponsorsSlider.next();
};

document.getElementById('sponsorsprevId').onclick = function () {
  sponsorsSlider.prev();
}; // car-details-slider
// const carDetailsSlider = new Slider({
//     sliderSelector: document.querySelector('#car-details-slider'),
//     slideToShow: 1
// })
// carDetailsSlider.slideTrack();
// carDetailsSlider.navbuttons();
// document.getElementById('car-details-slidernextId').onclick = function(){
//     carDetailsSlider.next();
// };
// document.getElementById('car-details-sliderprevId').onclick = function(){
//     carDetailsSlider.prev();
// };
/******/ })()
;