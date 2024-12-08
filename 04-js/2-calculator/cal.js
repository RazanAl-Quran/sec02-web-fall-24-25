function sum() {
    let num1 = parseInt(document.getElementById('number1').value); 
    console.log(num1);
    
    let num2 = document.getElementById('number2').value; 
    console.log(num2);
    console.log(typeof num2);

    let sumResult = parseInt(num1)+ parseInt(num2);
    console.log(sumResult);

    document.getElementById('result').value = sumResult;
    
}