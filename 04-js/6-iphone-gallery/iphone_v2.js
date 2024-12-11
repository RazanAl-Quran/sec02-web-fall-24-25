//function + onclick()
//function body
////catch all radios
////check if it is checked
////display the div and hide others
////put the old function with the new div
//DOMContentLoaded Call the function

document.addEventListener("DOMContentLoaded", function () {
    radioColor();
  
 })
function radioColor() {
    let Radio_Btns = document.querySelectorAll("input[name='color']");
    if (Radio_Btns[0].checked) {//blue
        document.querySelector("#purple-main-div").style.display = "none";
        document.querySelector("#blue-main-div").style.display = "block";
      
        let listBlue = document.querySelectorAll("#blue-div img");
        listBlue.forEach(function (image) {
            image.addEventListener("mouseover", function () {
                document.querySelector("#bigimg").src = image.src;
            })
        })
    } if (Radio_Btns[1].checked) {//purple
        document.querySelector("#purple-main-div").style.display = "block";
        document.querySelector("#blue-main-div").style.display = "none";

        let listPurple = document.querySelectorAll("#purple-div img");
        listPurple.forEach(function (image) {
            image.addEventListener("mouseover", function () {
                document.querySelector("#bigimg2").src = image.src;
            })
        })
    }
}

