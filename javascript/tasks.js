// Task 1
var result = 1;
var arr = [2, 3, 4, 5];
for (var i = 0; i < arr.length; i++) {
	result = result * arr[i];
}
console.log(result);

// Task 2
var obj = {
	'Минск': 'Беларусь',
	'Москва': 'Россия',
	'Киев': 'Украина'
};
for (var key in obj) {
	console.log(key + ' - это ' + obj[key] + '.');
}

// Task 3
var n = 1000;
var num = 0;
 
while (n > 50) {
    num ++;
    n /= 2;
};

console.log(n)
console.log(num)

// Task 4 

function factorial(a) {
    let result = 1
    for (let i = 2; i <= a; i++) {
        result *= i;
    }
    return result;
}

console.log(factorial(3));

// Task 5

let arr = ['js', 'css', 'jq'];

console.log(arr[0]);

// Task 6

let cub = function(num) {
    return num * num;
};
console.log(cub(5));

// Task 7

let numbers = [1,3,5,7,9,11];
numbers.sort((a,b) => b - a );
console.log(numbers);

// Task 8
var arr = [1,2,3,4,5];
var sum = 0;
for (var i = 0; i < arr.length; i++) {
    sum += arr[i] * arr[i];
}
console.log(sum)

// Task 9

var obj = {a: 1, b: 2, c: 3};
console.log(obj['c']);
console.log(obj.c);

// Task 10

let str = 'я учу javascript!';
let arrStr = str.split(' ');
console.log(arrStr);

// Task 11

console.clear()

function foo(a, b) {
    if(a % 2 && b % 2) { // Если оба числа нечётные
        return a * b;
    } else if(a % 2 || b % 2) { // Если одно из них чётное
        if(a % 2) { // Если a нечётное
            return a;
        }
        return b; // Если а нечётное, скрипт до сюда не дойдёт
    } else { // Если оба чётные
        return a + b;
    }
}

console.log(foo(8,11))


// Task 12

function check_Palindrome(str_entry){
    // Изменяем строку на нижний регистр и удаляем все не буквенно-цифровые символы
       let cstr = str_entry.toLowerCase().replace(/[^a-zA-Z0-9]+/g,'');
      let ccount = 0;
    // Проверяем пуста ли строка или нет
      if(cstr==="") {
        console.log("Ничего не найдено!");
        return false;
      }
    // Проверяем четная или нечетная длина строки
      if ((cstr.length) % 2 === 0) {
        ccount = (cstr.length) / 2;
      } else {
    // Если длина строки равна 1, она становится палиндромом.
        if (cstr.length === 1) {
          console.log("Вход - это палиндром.");
          return true;
        } else {
    // Если длина строки нечетная, игнорируйте средний символ
              ccount = (cstr.length - 1) / 2;
        }
      }
    // Проциклуем, чтобы проверить первый символ до последнего символа, а затем перейдём к следующему
      for (let x = 0; x < ccount; x++) {
    // Сравниваем символы и отбросим их, если они не совпадают
        if (cstr[x] != cstr.slice(-1-x)[0]) {
          console.log("Вход - это не палиндром.");
          return false;
        }
      }
     console.log("Запись - палиндром.");
      return true;
    }
    check_Palindrome('level'); // Запись - палиндром.  
    check_Palindrome('topot'); // Запись - палиндром.
    check_Palindrome('that');  // Вход - это не палиндром.