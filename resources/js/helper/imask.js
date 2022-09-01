var doubleMasked = document.getElementsByClassName('double-masked');
Array.prototype.forEach.call(doubleMasked, function(element) {
    var maskOptions = {
        mask: Number,  // enable number mask
        scale: 2,  // digits after point, 0 for integers
        signed: false,  // disallow negative
        thousandsSeparator: ',',  // any single char
        padFractionalZeros: false,  // if true, then pads zeros at end to the length of scale
        normalizeZeros: true,  // appends or removes zeros at ends
        radix: '.',  // fractional delimiter
        mapToRadix: ['.'],  // symbols to process as radix
        // additional number interval options (e.g.)
        min: 0,
        max: 1000000000
    };
var phoneMask = new IMask(element, maskOptions);
});

var numberMasked = document.getElementsByClassName('number-masked');
Array.prototype.forEach.call(numberMasked, function(element) {
    var maskOptions = {
        mask: Number,  // enable number mask
        signed: false,  // disallow negative
        thousandsSeparator: ',',  // any single char
        padFractionalZeros: false,  // if true, then pads zeros at end to the length of scale
        normalizeZeros: true,  // appends or removes zeros at ends
        // additional number interval options (e.g.)
        min: 0,
        max: 1000000000
    };
var phoneMask = new IMask(element, maskOptions);
});