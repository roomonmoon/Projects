console.clear()

const a = 17
const b = 10
const c = a - b
const d = 7

let string = "text"; 
let integer = 123; 
let undefined1 = undefined; 
let boolean = true; 
let BigInt = 1234567890123456789012345678901234567890n;

// 1 task

console.log('Task 1:',typeof(string),typeof(integer),typeof(undefined1),typeof(boolean),typeof(BigInt))

// 2 task
console.log('Task 2:', a == b , a < b , a <= b , a > b)

// 3 task 
if (a == 10) console.log('Task 3:',"Right")
else {console.log('Task 3:',"Wrong");}

// 4 task 
let hour = prompt('Enter the hour to be displayed in seconds ', 24);
let minute = 48;
let second = 23; 
let calc = hour*minute*second

console.log('Task 4:', calc + ' seconds');

// 5 task
let result = c + d;

console.log('Task 5:',result)

// 6 task 
let str1 = "Привет,";
let str2 = " Мир!"

console.log('Task 6:',str1+str2)

// 7 task 
let name = prompt('What is your name?', 'Ivan');

console.log('Task 7:', `Your name is ${name}!`); 


// 8 task 
let num = prompt('Enter the number that will be squared', 8);

console.log('Task 8:',`${num**2}`);

// 9 task 
console.log('Task 9:', hour + ':' + minute + ':' + second);

// 10 task
let o = 'test';

if (o === 'test') {
console.log('Task 10:','Right');
} else {
console.log('Task 10:','Wrong');
};

// 11 task
let test = 0;

if (test != true) {
  console.log('Task 11:','Right');
} else {
  console.log('Task 11:','Wrong');
};

// 12 task
let g = 1;

if (g != 0) {
  console.log('Task 12:','Right');
} else {
  console.log('Task 12:','Wrong');
};

//13 task
if (a % 2 === 0) {
  console.log('Task 13:','True');
} else {
  console.log('Task 13:', 'False');
}

// 14 task
var arr = ['Привет, ', 'мир', '!'];

console.log('Task 14:', arr[0] + arr[1] + arr[2]);

// 15 task
let arr1 = ['a', 'b', 'c', 'd'];

console.log('Task 15:', arr1[0] + arr1[1], arr1[2] + arr1[3]); 