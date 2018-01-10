/* 
 * Common function
 */

/**
 * Check string is numeric character
 * @param {string} str
 * @returns {Boolean}
 */
function isNumber(str) {
    var alphaExp = /^[0-9]+$/;
    if (str.match(alphaExp)) {
        return true;
    }
    return false;
}

/**
 * Check string is telephone character
 * @param {string} str
 * @returns {Boolean}
 */
function isTel(str) {
    var alphaExp = /^[0-9]+$|^$/;// numeric and empty
    if (str.match(alphaExp)) {
        return true;
    }
    return false;
}

/**
 * Check string is email format
 * @param {string} email
 * @return {Boolean}
 */
function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

/**
 * Plugin focus at last character
 * @param {?} $
 */
(function ($) {
    $.fn.focusTextToEnd = function () {
        this.focus();
        var $thisVal = this.val();
        this.val('').val($thisVal);
        return this;
    };
}(jQuery));

/**
 * Go next item
 * 
 * @param {string} selector
 */
function inputNextEvent(selector) {
    $(selector).keyup(function() {
        if (this.value.length == this.maxLength) {
            $(this).nextAll(selector).eq(0).focus().select();
            return false;
        }
    });
}

/**
 * Go previous item
 * 
 * @param {string} selector
 */
function inputBackEvent(selector) {
    $(selector).keyup(function(e) {
        if (e.which == 8 && this.value.length == 0) {
            $(this).prevAll(selector).eq(0).focusTextToEnd();
            return false;
        }
    });
}

/**
 * Mobile detection
 */
function isMobile() {
    var user_agent = navigator.userAgent || navigator.vendor || window.opera;
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(user_agent);
}

/**
 * Mobile detection
 */
function isIOS() {
    var user_agent = navigator.userAgent || navigator.vendor || window.opera;
    return /iPhone|iPad|iPod/i.test(user_agent);
}

/**
 * Get inner width
 * 
 * @param {boolean} withScroolBar
 * @returns int
 */
function getInnerWidth(withScroolBar) {
    if (withScroolBar) {
        return window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    } else {
        return $('body').innerWidth();
    }
}

/**
 * Get inner height
 * 
 * @param {boolean} withScroolBar
 * @returns int
 */
function getInnerHeight(withScroolBar) {
    if (withScroolBar) {
        return window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
    } else {
        return $('body').innerHeight();
    }
}

/**
 * Add bind function if not exist
 */
if (!Function.prototype.bind) {
    Function.prototype.bind = function (oThis) {
        if (typeof this !== 'function') {
            // closest thing possible to the ECMAScript 5
            // internal IsCallable function
            throw new TypeError('Function.prototype.bind - what is trying to be bound is not callable');
        }

        var aArgs = Array.prototype.slice.call(arguments, 1),
            fToBind = this,
            fNOP = function () {},
            fBound = function () {
                return fToBind.apply(this instanceof fNOP && oThis ? this : oThis, aArgs.concat(Array.prototype.slice.call(arguments)));
            };

        fNOP.prototype = this.prototype;
        fBound.prototype = new fNOP();

        return fBound;
    };
}

/**
 * Get scrollbar width, copy from Bootstrap v3
 * 
 * @returns {Number}
 */
function get_scrollbar_width() {
    var body = $('body');
    var fullWindowWidth = window.innerWidth;
    if (!fullWindowWidth) {
        // workaround for missing window.innerWidth in IE8
        var documentElementRect = document.documentElement.getBoundingClientRect();
        fullWindowWidth = documentElementRect.right - Math.abs(documentElementRect.left);
    }
    var bodyIsOverflowing = document.body.clientWidth < fullWindowWidth;
    if (bodyIsOverflowing) {
        var scrollDiv = document.createElement('div');
        scrollDiv.className = 'modal-scrollbar-measure';
        body.append(scrollDiv);
        var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth;
        body[0].removeChild(scrollDiv);

        return scrollbarWidth;
    }
    return 0;
}
