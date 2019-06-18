function _instanceof(left, right) { if (right != null && typeof Symbol !== "undefined" && right[Symbol.hasInstance]) { return right[Symbol.hasInstance](left); } else { return left instanceof right; } }

function _classCallCheck(instance, Constructor) { if (!_instanceof(instance, Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var T =
/*#__PURE__*/
function () {
  "use strict";

  function T(value) {
    var key = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;
    var params = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};

    _classCallCheck(this, T);

    this.key = key;
    this.params = params;
    this.value = value;
  }

  _createClass(T, [{
    key: "getText",
    value: function getText(key) {
      var text = undefined;
      try {
        text = window.Translations[key];
      }
      catch(e) {}

      if (text === undefined) {
        return this.value;
      }

      return trans(this.key, this.params);
    }
  }, {
    key: "t",
    value: function t() {
      if (this.key == null) return this.value;
      return this.getText(this.key);
    }
  }]);

  return T;
}();

window.t = function t(value, key, params) {
  return new T(value, key, params).t();
};