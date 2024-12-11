function changeBackground() {
    // let allPs = document.getElementsByTagName('p'); // array
    // let allPs = document.getElementsByClassName('matrix'); // array
    let allPs = document.querySelectorAll('.matrix'); // array
    console.log(allPs);

    allPs[0].style.backgroundColor = 'aqua';
    allPs[1].style.backgroundColor = 'brown';
    allPs[2].style.backgroundColor = 'yellow';


}

function reset(){
    let allPs = document.getElementsByTagName('p'); // array
    console.log(allPs);

    allPs[0].style.backgroundColor = '';
    allPs[1].style.backgroundColor = '';
    allPs[2].style.backgroundColor = '';

}