//DOMContentLoaded
//Catch all small images
//Loop to>> add event on each image
//Catch the big image and swap the src


document.addEventListener("DOMContentLoaded", function () {
    let list = document.querySelectorAll("#blue-div img");
    list.forEach(function (image) {
        image.addEventListener("mouseover", function () {
            document.querySelector("#bigimg").src = image.src;
        })
    })
})