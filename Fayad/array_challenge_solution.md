## Question 1

### Solution

```php
$numbers = [5, 12, 18, 25, 30, 42, 55];

$result = array_filter($numbers, function ($number) {
    return $number % 2 != 0;
});
```

---

## Question 2

### Solution

```php
$numbers = [10, 15, 20, 25, 30];

$result = array_map(function ($number) {
    return $number * $number;
}, $numbers);
```

---

## Question 3

### Solution

```php
$users = [
    ['name' => 'Ahmed', 'age' => 22],
    ['name' => 'Sara', 'age' => 35],
    ['name' => 'Mona', 'age' => 28],
    ['name' => 'Ali', 'age' => 40],
];

$result = array_filter($users, function ($user) {
    return $user['age'] >= 30;
});
```

---

## Question 4

### Solution

```php
$users = [
    ['name' => 'Ahmed', 'salary' => 4000],
    ['name' => 'Sara', 'salary' => 6000],
    ['name' => 'Mona', 'salary' => 5000],
];

$result = array_map(function ($user) {
    return $user['salary'];
}, $users);
```

---

## Question 5

### Solution

```php
$numbers = [1, 2, 3, 4, 5];

$result = array_reduce($numbers, function ($carry, $number) {
    return $carry * $number;
}, 1);
```

---

## Question 6

### Solution

```php
$products = [
    ['name' => 'Laptop', 'price' => 15000],
    ['name' => 'Mouse', 'price' => 200],
    ['name' => 'Keyboard', 'price' => 500],
];

$result = array_filter($products, function ($product) {
    return $product['price'] > 1000;
});
```

---

## Question 7

### Solution

```php
$products = [
    ['name' => 'Laptop', 'price' => 15000],
    ['name' => 'Mouse', 'price' => 200],
    ['name' => 'Keyboard', 'price' => 500],
];

$result = array_map(function ($product) {
    return strtoupper($product['name']);
}, $products);
```

---

## Question 8

### Solution

```php
$numbers = [3, 6, 9, 12, 15, 18];

$result = array_filter($numbers, function ($number) {
    return $number % 2 == 0 && $number % 3 == 0;
});
```

---

## Question 9

### Solution

```php
$users = [
    ['name' => 'Omar', 'age' => 17],
    ['name' => 'Laila', 'age' => 21],
    ['name' => 'Hassan', 'age' => 15],
    ['name' => 'Nour', 'age' => 30],
];

$result = array_filter($users, function ($user) {
    return $user['age'] >= 18;
});
```

---

## Question 10

### Solution

```php
$orders = [
    ['id' => 1, 'total' => 250],
    ['id' => 2, 'total' => 450],
    ['id' => 3, 'total' => 300],
];

$result = array_reduce($orders, function ($carry, $order) {
    return $carry + $order['total'];
}, 0);
```
