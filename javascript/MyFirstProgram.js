// Первое задание

let pathname = "/home/MyFirstProgram.js";

function getExtension(pathname) {
  var name = pathname.split(".").pop();
  return name;
}

document.writeln(getExtension(pathname)); 

// Второе задание

console.clear()
function doDivision(n1, n2) {
    var n1 = 12;
    var n2 = 10;
    if (n1/n2>0)
      return Math.floor(n1/n2);
    else 
      return Math.ceil(n1/n2);
}
console.log(doDivision());
   

// Третье задание

console.clear();
function checkNumbers(num1, num2) {
    if (num1 == 120 || num2 == 120 || num1 + num2 == 120 ) 
        console.log('True');
    else 
        console.log('False');
}
checkNumbers(60,120);

// Четвёртое задание

