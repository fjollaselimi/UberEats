var i = 0;
var vargu = [
    "slider1.webp",
    "slider2.webp",
    "slider3.webp"
];

function nextpic(){
    document.getElementById('slideshow').src = vargu[i];
    if (i < vargu.length - 1) {
    i++;
    } else {
    i = 0;
    }
}
document.body.addEventListener('load', nextpic());
