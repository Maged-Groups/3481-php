# Challenges

## Create a php file with an HTML content as a product card( Photo, Name, price)

# loop the current array and dispaly the product card

```php
$products = <?php

$products = [
    [
        "id" => 1,
        "title" => "Essence Mascara Lash Princess",
        "price" => 9.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/beauty/essence-mascara-lash-princess/thumbnail.webp"
    ],
    [
        "id" => 2,
        "title" => "Eyeshadow Palette with Mirror",
        "price" => 19.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/beauty/eyeshadow-palette-with-mirror/thumbnail.webp"
    ],
    [
        "id" => 3,
        "title" => "Powder Canister",
        "price" => 14.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/beauty/powder-canister/thumbnail.webp"
    ],
    [
        "id" => 4,
        "title" => "Red Lipstick",
        "price" => 12.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/beauty/red-lipstick/thumbnail.webp"
    ],
    [
        "id" => 5,
        "title" => "Red Nail Polish",
        "price" => 8.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/beauty/red-nail-polish/thumbnail.webp"
    ],
    [
        "id" => 6,
        "title" => "Calvin Klein CK One",
        "price" => 49.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/fragrances/calvin-klein-ck-one/thumbnail.webp"
    ],
    [
        "id" => 7,
        "title" => "Chanel Coco Noir Eau De",
        "price" => 129.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/fragrances/chanel-coco-noir-eau-de/thumbnail.webp"
    ],
    [
        "id" => 8,
        "title" => "Dior J'adore",
        "price" => 89.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/fragrances/dior-j'adore/thumbnail.webp"
    ],
    [
        "id" => 9,
        "title" => "Dolce Shine Eau de",
        "price" => 69.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/fragrances/dolce-shine-eau-de/thumbnail.webp"
    ],
    [
        "id" => 10,
        "title" => "Gucci Bloom Eau de",
        "price" => 79.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/fragrances/gucci-bloom-eau-de/thumbnail.webp"
    ],
    [
        "id" => 11,
        "title" => "Annibale Colombo Bed",
        "price" => 1899.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/furniture/annibale-colombo-bed/thumbnail.webp"
    ],
    [
        "id" => 12,
        "title" => "Annibale Colombo Sofa",
        "price" => 2499.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/furniture/annibale-colombo-sofa/thumbnail.webp"
    ],
    [
        "id" => 13,
        "title" => "Bedside Table African Cherry",
        "price" => 299.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/furniture/bedside-table-african-cherry/thumbnail.webp"
    ],
    [
        "id" => 14,
        "title" => "Knoll Saarinen Executive Conference Chair",
        "price" => 499.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/furniture/knoll-saarinen-executive-conference-chair/thumbnail.webp"
    ],
    [
        "id" => 15,
        "title" => "Wooden Bathroom Sink With Mirror",
        "price" => 799.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/furniture/wooden-bathroom-sink-with-mirror/thumbnail.webp"
    ],
    [
        "id" => 16,
        "title" => "Apple",
        "price" => 1.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/groceries/apple/thumbnail.webp"
    ],
    [
        "id" => 17,
        "title" => "Beef Steak",
        "price" => 12.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/groceries/beef-steak/thumbnail.webp"
    ],
    [
        "id" => 18,
        "title" => "Cat Food",
        "price" => 8.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/groceries/cat-food/thumbnail.webp"
    ],
    [
        "id" => 19,
        "title" => "Chicken Meat",
        "price" => 9.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/groceries/chicken-meat/thumbnail.webp"
    ],
    [
        "id" => 20,
        "title" => "Cooking Oil",
        "price" => 4.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/groceries/cooking-oil/thumbnail.webp"
    ],
    [
        "id" => 21,
        "title" => "Cucumber",
        "price" => 1.49,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/groceries/cucumber/thumbnail.webp"
    ],
    [
        "id" => 22,
        "title" => "Dog Food",
        "price" => 10.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/groceries/dog-food/thumbnail.webp"
    ],
    [
        "id" => 23,
        "title" => "Eggs",
        "price" => 2.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/groceries/eggs/thumbnail.webp"
    ],
    [
        "id" => 24,
        "title" => "Fish Steak",
        "price" => 14.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/groceries/fish-steak/thumbnail.webp"
    ],
    [
        "id" => 25,
        "title" => "Green Bell Pepper",
        "price" => 1.29,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/groceries/green-bell-pepper/thumbnail.webp"
    ],
    [
        "id" => 26,
        "title" => "Green Chili Pepper",
        "price" => 0.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/groceries/green-chili-pepper/thumbnail.webp"
    ],
    [
        "id" => 27,
        "title" => "Honey Jar",
        "price" => 6.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/groceries/honey-jar/thumbnail.webp"
    ],
    [
        "id" => 28,
        "title" => "Ice Cream",
        "price" => 5.49,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/groceries/ice-cream/thumbnail.webp"
    ],
    [
        "id" => 29,
        "title" => "Juice",
        "price" => 3.99,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/groceries/juice/thumbnail.webp"
    ],
    [
        "id" => 30,
        "title" => "Kiwi",
        "price" => 2.49,
        "thumbnail" => "https://cdn.dummyjson.com/product-images/groceries/kiwi/thumbnail.webp"
    ],
];
?>
```