<?php
// Создание ассоциативного массива с информацией о продуктах в магазине
let products = {
    "яблоки": 50,
  "молоко": 60,
  "хлеб": 40,
  "сыр": 150
};

// Нахождение товара с самой высокой ценой
let maxPrice = 0;
let expensiveProduct = "";
for (let product in products) {
    if (products[product] > maxPrice) {
        maxPrice = products[product];
        expensiveProduct = product;
    }
}

// Вывод товара с самой высокой ценой
console.log("Товар с самой высокой ценой: " + expensiveProduct + " - " + maxPrice);
?>