document.querySelector('#on').addEventListener('click', function () {
    console.log('yoi clicked me');
    document.querySelector('#myImage').src = 'bulbon.gif';
});

document.querySelector('#off').addEventListener('click', function () {
    console.log('yoi clicked me');
    document.querySelector('#myImage').src = 'bulboff.gif';
});