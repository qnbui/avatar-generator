
var random_images_array = ["../img/hairs/hairs_1.png", "../img/hairs/hairs_2.png", "../img/hairs/hairs_3.png",
    "../img/hairs/hairs_4.png", "../img/hairs/hairs_5.png", "../img/hairs/hairs_6.png", "../img/hairs/hairs_7.png"];

function getRandomhairs(imgAr, path) {
    path = path || 'images/';
    var num = Math.floor(math.random() * imgAr.length );
    var img = imgAr[ num ];
    var imgStr = '<img src="' + path + img + '" alt = "">';
    document.write(imgStr); document.close();
}