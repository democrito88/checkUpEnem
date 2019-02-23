$(function () {
    var section = $('.sessao-login');
    var backgrounds = new Array('url(./Img/bg1.jpeg)', 'url(./Img/bg2.jpg)', 'url(./Img/bg3.jpg)', 'url(./Img/bg4.jpeg)');
    var current = 0;

    function nextBackground() {
        section.css(
                'background',
                backgrounds[current = ++current % backgrounds.length]
                );

        setTimeout(nextBackground, 10000);
    }

    setTimeout(nextBackground, 10000);
    section.css('background', backgrounds[0]);
});