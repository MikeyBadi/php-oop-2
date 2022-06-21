<?php

require_once __DIR__ . '/../class/buyer.php';
require_once __DIR__ . '/../class/care.php';
require_once __DIR__ . '/../class/food.php';
require_once __DIR__ . '/../class/forniture.php';
require_once __DIR__ . '/../class/games.php';
require_once __DIR__ . '/../class/products.php';
require_once __DIR__ . '/../class/regCust.php';

$customers = [
  [
    'name' => 'Mihai',
    'surname' => 'Badia',
    'birth' => '1999/03/01',
    'cardValid' => '24/12',
    'expired' => false,
    'registered' => true,
    'discount' => '20',
  ],
  [
    'name' => 'Iahim',
    'surname' => 'Aidab',
    'birth' => '1991/09/12',
    'cardValid' => '22/05',
    'expired' => true,
    'registered' => false,
    'discount' => '0',

  ]
];

$products = [
  [
   'name' => 'Mordicchio',
   'animal' => 'Dog',
   'price' => '19.99',
   'category' => 'games',
   'material' => 'Natural rubber'
  ],
  [
   'name' => 'Dog house',
   'animal' => 'dog',
   'price' => '149.99',
   'category' => 'forniture',
   'size' => 'medium/big'
  ],
  [
   'name' => 'Acana',
   'animal' => 'Dog',
   'price' => '79.99',
   'category' => 'food',
   'expiration' => '2022/12/31'
  ],
  [
   'name' => 'Shampoo for dogs',
   'animal' => 'dogs',
   'price' => '14.99',
   'category' => 'care',
   'type' => 'shampoo'
  ]
];