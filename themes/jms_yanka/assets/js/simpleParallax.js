/*!
 * simpleParallax.min - simpleParallax is a simple JavaScript library that gives your website parallax animations on any images, 
 * @date: 07-12-2019 18:53:52, 
 * @version: 5.2.0,
 * @link: https://simpleparallax.com/
 */
! function(t, e) {
    "object" == typeof exports && "object" == typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define("simpleParallax", [], e) : "object" == typeof exports ? exports.simpleParallax = e() : t.simpleParallax = e()
}(window, function() {
    return (n = {}, s.m = i = [function(t, e, i) {
        "use strict";

        function n(t, e) {
            for (var i = 0; i < e.length; i++) {
                var n = e[i];
                n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, n.key, n)
            }
        }
        i.r(e);
        var s = new(function() {
                function t() {
                    ! function(t, e) {
                        if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                    }(this, t), this.positions = {
                        top: 0,
                        bottom: 0,
                        height: 0
                    }
                }
                return function(t, e, i) {
                    e && n(t.prototype, e), i && n(t, i)
                }(t, [{
                    key: "setViewportTop",
                    value: function(t) {
                        return this.positions.top = t ? t.scrollTop : window.pageYOffset, this.positions
                    }
                }, {
                    key: "setViewportBottom",
                    value: function() {
                        return this.positions.bottom = this.positions.top + this.positions.height, this.positions
                    }
                }, {
                    key: "setViewportAll",
                    value: function(t) {
                        return this.positions.top = t ? t.scrollTop : window.pageYOffset, this.positions.height = t ? t.clientHeight : document.documentElement.clientHeight, this.positions.bottom = this.positions.top + this.positions.height, this.positions
                    }
                }]), t
            }()),
            o = function(t) {
                return NodeList.prototype.isPrototypeOf(t) || HTMLCollection.prototype.isPrototypeOf(t) ? Array.from(t) : "string" == typeof t || t instanceof String ? document.querySelectorAll(t) : [t]
            },
            r = function() {
                for (var t, e = "transform webkitTransform mozTransform oTransform msTransform".split(" "), i = 0; void 0 === t;) t = void 0 !== document.createElement("div").style[e[i]] ? e[i] : void 0, i += 1;
                return t
            }(),
            a = function(t) {
                return !!t && (!!t.complete && (void 0 === t.naturalWidth || 0 !== t.naturalWidth))
            };

        function l(t) {
            return function(t) {
                if (Array.isArray(t)) {
                    for (var e = 0, i = new Array(t.length); e < t.length; e++) i[e] = t[e];
                    return i
                }
            }(t) || function(t) {
                if (Symbol.iterator in Object(t) || "[object Arguments]" === Object.prototype.toString.call(t)) return Array.from(t)
            }(t) || function() {
                throw new TypeError("Invalid attempt to spread non-iterable instance")
            }()
        }

        function u(t, e) {
            for (var i = 0; i < e.length; i++) {
                var n = e[i];
                n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, n.key, n)
            }
        }
        var h = function() {
            function i(t, e) {
                ! function(t, e) {
                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                }(this, i), this.element = t, this.elementContainer = t, this.settings = e, this.isVisible = !0, this.isInit = !1, this.oldTranslateValue = -1, this.init = this.init.bind(this), a(t) ? this.init() : this.element.addEventListener("load", this.init)
            }
            return function(t, e, i) {
                e && u(t.prototype, e), i && u(t, i)
            }(i, [{
                key: "init",
                value: function() {
                    var t = this;
                    this.isInit || this.element.closest(".simpleParallax") || (!1 === this.settings.overflow && this.wrapElement(this.element), this.setTransformCSS(), this.getElementOffset(), this.intersectionObserver(), this.getTranslateValue(), this.animate(), 0 < this.settings.delay && setTimeout(function() {
                        t.setTransitionCSS()
                    }, 10), this.isInit = !0)
                }
            }, {
                key: "wrapElement",
                value: function() {
                    var t = this.element.closest("picture") || this.element,
                        e = document.createElement("div");
                    e.classList.add("simpleParallax"), e.style.overflow = "hidden", t.parentNode.insertBefore(e, t), e.appendChild(t), this.elementContainer = e
                }
            }, {
                key: "unWrapElement",
                value: function() {
                    var t = this.elementContainer;
                    t.replaceWith.apply(t, l(t.childNodes))
                }
            }, {
                key: "setTransformCSS",
                value: function() {
                    !1 === this.settings.overflow && (this.element.style[r] = "scale(".concat(this.settings.scale, ")")), this.element.style.willChange = "transform"
                }
            }, {
                key: "setTransitionCSS",
                value: function() {
                    this.element.style.transition = "transform ".concat(this.settings.delay, "s ").concat(this.settings.transition)
                }
            }, {
                key: "unSetStyle",
                value: function() {
                    this.element.style.willChange = "", this.element.style[r] = "", this.element.style.transition = ""
                }
            }, {
                key: "getElementOffset",
                value: function() {
                    var t = this.elementContainer.getBoundingClientRect();
                    if (this.elementHeight = t.height, this.elementTop = t.top + s.positions.top, this.settings.customContainer) {
                        var e = this.settings.customContainer.getBoundingClientRect();
                        this.elementTop = t.top - e.top + s.positions.top
                    }
                    this.elementBottom = this.elementHeight + this.elementTop
                }
            }, {
                key: "buildThresholdList",
                value: function() {
                    for (var t = [], e = 1; e <= this.elementHeight; e++) {
                        var i = e / this.elementHeight;
                        t.push(i)
                    }
                    return t
                }
            }, {
                key: "intersectionObserver",
                value: function() {
                    var t = {
                        root: null,
                        threshold: this.buildThresholdList()
                    };
                    this.observer = new IntersectionObserver(this.intersectionObserverCallback.bind(this), t), this.observer.observe(this.element)
                }
            }, {
                key: "intersectionObserverCallback",
                value: function(t) {
                    for (var e = t.length - 1; 0 <= e; e--) t[e].isIntersecting ? this.isVisible = !0 : this.isVisible = !1
                }
            }, {
                key: "checkIfVisible",
                value: function() {
                    return this.elementBottom > s.positions.top && this.elementTop < s.positions.bottom
                }
            }, {
                key: "getRangeMax",
                value: function() {
                    var t = this.element.clientHeight;
                    this.rangeMax = t * this.settings.scale - t
                }
            }, {
                key: "getTranslateValue",
                value: function() {
                    var t = ((s.positions.bottom - this.elementTop) / ((s.positions.height + this.elementHeight) / 100)).toFixed(1);
                    return t = Math.min(100, Math.max(0, t)), this.oldPercentage !== t && (this.rangeMax || this.getRangeMax(), this.translateValue = (t / 100 * this.rangeMax - this.rangeMax / 2).toFixed(0), this.oldTranslateValue !== this.translateValue && (this.oldPercentage = t, this.oldTranslateValue = this.translateValue, !0))
                }
            }, {
                key: "animate",
                value: function() {
                    var t, e = 0,
                        i = 0;
                    (this.settings.orientation.includes("left") || this.settings.orientation.includes("right")) && (i = "".concat(this.settings.orientation.includes("left") ? -1 * this.translateValue : this.translateValue, "px")), (this.settings.orientation.includes("up") || this.settings.orientation.includes("down")) && (e = "".concat(this.settings.orientation.includes("up") ? -1 * this.translateValue : this.translateValue, "px")), t = !1 === this.settings.overflow ? "translate3d(".concat(i, ", ").concat(e, ", 0) scale(").concat(this.settings.scale, ")") : "translate3d(".concat(i, ", ").concat(e, ", 0)"), this.element.style[r] = t
                }
            }]), i
        }();

        function c(t, e) {
            for (var i = 0; i < e.length; i++) {
                var n = e[i];
                n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, n.key, n)
            }
        }
        i.d(e, "default", function() {
            return y
        });
        var f, m, p, d = !0,
            g = !1,
            v = [],
            y = function() {
                function i(t, e) {
                    ! function(t, e) {
                        if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                    }(this, i), t && (this.elements = o(t), this.defaults = {
                        delay: .4,
                        orientation: "up",
                        scale: 1.3,
                        overflow: !1,
                        transition: "cubic-bezier(0,0,0,1)",
                        customContainer: !1
                    }, this.settings = Object.assign(this.defaults, e), "IntersectionObserver" in window || (d = !1), this.settings.customContainer && (console.log(o(this.settings.customContainer)[0]), this.customContainer = o(this.settings.customContainer)[0]), this.lastPosition = -1, this.resizeIsDone = this.resizeIsDone.bind(this), this.handleResize = this.handleResize.bind(this), this.proceedRequestAnimationFrame = this.proceedRequestAnimationFrame.bind(this), this.init())
                }
                return function(t, e, i) {
                    e && c(t.prototype, e), i && c(t, i)
                }(i, [{
                    key: "init",
                    value: function() {
                        s.setViewportAll(this.customContainer);
                        for (var t = this.elements.length - 1; 0 <= t; t--) {
                            var e = new h(this.elements[t], this.settings);
                            v.push(e)
                        }
                        f = v.length, g || (this.proceedRequestAnimationFrame(), window.addEventListener("resize", this.resizeIsDone), g = !0)
                    }
                }, {
                    key: "resizeIsDone",
                    value: function() {
                        clearTimeout(p), p = setTimeout(this.handleResize, 500)
                    }
                }, {
                    key: "handleResize",
                    value: function() {
                        s.setViewportAll(this.customContainer);
                        for (var t = f - 1; 0 <= t; t--) v[t].getElementOffset(), v[t].getRangeMax();
                        this.lastPosition = -1
                    }
                }, {
                    key: "proceedRequestAnimationFrame",
                    value: function() {
                        if (s.setViewportTop(this.customContainer), this.lastPosition !== s.positions.top) {
                            s.setViewportBottom();
                            for (var t = f - 1; 0 <= t; t--) this.proceedElement(v[t]);
                            m = window.requestAnimationFrame(this.proceedRequestAnimationFrame), this.lastPosition = s.positions.top
                        } else m = window.requestAnimationFrame(this.proceedRequestAnimationFrame)
                    }
                }, {
                    key: "proceedElement",
                    value: function(t) {
                        (!d || this.customContainer ? t.checkIfVisible() : t.isVisible) && t.getTranslateValue() && t.animate()
                    }
                }, {
                    key: "destroy",
                    value: function() {
                        var e = this,
                            i = [];
                        v = v.filter(function(t) {
                            return e.elements.includes(t.element) ? (i.push(t), !1) : t
                        });
                        for (var t = i.length - 1; 0 <= t; t--) i[t].unSetStyle(), !1 === this.settings.overflow && i[t].unWrapElement();
                        (f = v.length) || (window.cancelAnimationFrame(m), window.removeEventListener("resize", this.handleResize))
                    }
                }]), i
            }()
    }], s.c = n, s.d = function(t, e, i) {
        s.o(t, e) || Object.defineProperty(t, e, {
            enumerable: !0,
            get: i
        })
    }, s.r = function(t) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(t, "__esModule", {
            value: !0
        })
    }, s.t = function(e, t) {
        if (1 & t && (e = s(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var i = Object.create(null);
        if (s.r(i), Object.defineProperty(i, "default", {
                enumerable: !0,
                value: e
            }), 2 & t && "string" != typeof e)
            for (var n in e) s.d(i, n, function(t) {
                return e[t]
            }.bind(null, n));
        return i
    }, s.n = function(t) {
        var e = t && t.__esModule ? function() {
            return t.default
        } : function() {
            return t
        };
        return s.d(e, "a", e), e
    }, s.o = function(t, e) {
        return Object.prototype.hasOwnProperty.call(t, e)
    }, s.p = "", s(s.s = 0)).default;

    function s(t) {
        if (n[t]) return n[t].exports;
        var e = n[t] = {
            i: t,
            l: !1,
            exports: {}
        };
        return i[t].call(e.exports, e, e.exports, s), e.l = !0, e.exports
    }
    var i, n
});