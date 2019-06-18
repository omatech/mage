function _instanceof(left, right) { if (right != null && typeof Symbol !== "undefined" && right[Symbol.hasInstance]) { return right[Symbol.hasInstance](left); } else { return left instanceof right; } }

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!_instanceof(instance, Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Translator =
/*#__PURE__*/
function () {
  "use strict";

  function Translator(key) {
    var params = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};

    _classCallCheck(this, Translator);

    this.key = key;
    this.params = this.normalizeParams(params);
    this.text = this.getText(key);
    this.text = this.replaceParams(this.text, params);
  }

  _createClass(Translator, [{
    key: "normalizeParams",
    value: function normalizeParams(params) {
      if (typeof params === 'undefined') {
        return {};
      }

      if (_typeof(params) !== 'object') {
        throw new Error("Translator Error: Invalid parameters format");
      }

      return params;
    }
  }, {
    key: "replaceParams",
    value: function replaceParams(text, params) {
      Object.keys(params).forEach(function (key) {
        text = text.replace(":".concat(key), params[key]);
      });
      return text;
    }
  }, {
    key: "getText",
    value: function getText(key) {
      var text = undefined;
      try {
        text = window.Translations[key];
      }
      catch(e) {}

      if (text === undefined) {
        return key;
      }

      return text;
    }
  }, {
    key: "get",
    value: function get() {
      return this.text;
    }
  }]);

  return Translator;
}();

window.trans = function trans(key, params) {
  return new Translator(key, params).get();
};