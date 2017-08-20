$(document).ready(function () {
    var slider = $('.price-slider')[0],
        bottom = $('.price-slider .bottom'),
        top = $('.price-slider .top');

        noUiSlider.create(slider, {
        start: [20, 80],
        connect: true,
        range: {
            'min': 0,
            'max': 100
        }
    });

    //colors
    //ищи data-color атрибут
});