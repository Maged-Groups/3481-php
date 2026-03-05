# PHP Array Higher Order Functions Practice

## Question 1
```php
$numbers = [5, 12, 18, 25, 30, 42, 55];

$result = array_filter($numbers, function ($number) {
    return $number % 2 == 0;
});
```
المطلوب: اكتب كود يعيد الأرقام الفردية فقط.

---

## Question 2
```php
$numbers = [10, 15, 20, 25, 30];

$result = array_map(function ($number) {
    return $number * 2;
}, $numbers);
```
المطلوب: اكتب كود يرجع مربع كل رقم بدلاً من ضربه ×2.

---

## Question 3
```php
$users = [
    ['name' => 'Ahmed', 'age' => 22],
    ['name' => 'Sara', 'age' => 35],
    ['name' => 'Mona', 'age' => 28],
    ['name' => 'Ali', 'age' => 40],
];

$result = array_filter($users, function ($user) {
    return $user['age'] < 30;
});
```
المطلوب: اكتب كود يرجع المستخدمين اللي أعمارهم أكبر من أو يساوي 30.

---

## Question 4
```php
$users = [
    ['name' => 'Ahmed', 'salary' => 4000],
    ['name' => 'Sara', 'salary' => 6000],
    ['name' => 'Mona', 'salary' => 5000],
];

$result = array_map(function ($user) {
    return $user['name'];
}, $users);
```
المطلوب: اكتب كود يرجع مرتبات المستخدمين فقط.

---

## Question 5
```php
$numbers = [1, 2, 3, 4, 5];

$result = array_reduce($numbers, function ($carry, $number) {
    return $carry + $number;
}, 0);
```
المطلوب: اكتب كود يستخدم `array_reduce` لحساب حاصل ضرب الأرقام.

---

## Question 6
```php
$products = [
    ['name' => 'Laptop', 'price' => 15000],
    ['name' => 'Mouse', 'price' => 200],
    ['name' => 'Keyboard', 'price' => 500],
];
```
المطلوب: اكتب كود باستخدام `array_filter` يرجع المنتجات اللي سعرها أكبر من 1000.

---

## Question 7
```php
$products = [
    ['name' => 'Laptop', 'price' => 15000],
    ['name' => 'Mouse', 'price' => 200],
    ['name' => 'Keyboard', 'price' => 500],
];
```
المطلوب: اكتب كود باستخدام `array_map` يرجع أسماء المنتجات بحروف كبيرة (Uppercase).

---

## Question 8
```php
$numbers = [3, 6, 9, 12, 15, 18];
```
المطلوب: اكتب كود باستخدام `array_filter` يرجع الأرقام اللي تقبل القسمة على 3 و 2 معًا.

---

## Question 9
```php
$users = [
    ['name' => 'Omar', 'age' => 17],
    ['name' => 'Laila', 'age' => 21],
    ['name' => 'Hassan', 'age' => 15],
    ['name' => 'Nour', 'age' => 30],
];
```
المطلوب: اكتب كود باستخدام `array_filter` يرجع المستخدمين البالغين (age >= 18).

---

## Question 10
```php
$orders = [
    ['id' => 1, 'total' => 250],
    ['id' => 2, 'total' => 450],
    ['id' => 3, 'total' => 300],
];
```
المطلوب: اكتب كود باستخدام `array_reduce` لحساب إجمالي مجموع الطلبات.