<?php

require_once __DIR__ . '/../db/db_com.php';
$usersArr=[];
$productsArr=[];

foreach($customers as $customer){
  if($customer['registered']){
    $cust = new Buyer($customer['name'],$customer['surname'],$customer['birth'],$customer['cardValid'],$customer['discount']);
    $usersArr[] = $cust;
  }else{
    $cust = new RegCustomer($customer['name'],$customer['surname'],$customer['birth'],$customer['cardValid'],$customer['discount'],$customer['registered']);
    $usersArr[] = $cust;
  }
}

foreach($products as $product){
  if($product['category']=== 'care'){
    $prod = new Care($product['name'],$product['animal'],$product['price'],$product['category'],$product['type']);
    $productsArr[]= $prod;
  }elseif($product['category']=== 'food'){
    $prod = new Food($product['name'],$product['animal'],$product['price'],$product['category'],$product['expiration']);
    $productsArr[]= $prod;
  }elseif($product['category']=== 'forniture'){
    $prod = new Forniture($product['name'],$product['animal'],$product['price'],$product['category'],$product['size']);
    $productsArr[]= $prod;
  }elseif($product['category']=== 'games'){
    $prod = new Games($product['name'],$product['animal'],$product['price'],$product['category'],$product['material']);
    $productsArr[]= $prod;
  }
}

// var_dump(date('y/m'))
?>
<main>
  <?php foreach($usersArr as $user):?>
    <div>
      <ul>
        <li>Name: <?php echo $user->getName()?></li>
        <li>surname: <?php echo $user->getSurname()?></li>
        <li>Name: <?php echo $user->getBirth()?></li>
        <li>Name: <?php echo $user->getCardValid()?></li>
        <li>Name: <?php echo $user->getDiscount()?>%</li>
      </ul>
    </div>
  <?php endforeach?>
<hr>
  <?php foreach($productsArr as $product):?>
    <div>
      <ul>
        <li>Name: <?php echo $product->getName()?></li>
        <li>Adapted for: <?php echo $product->getAnimal()?></li>
        <li>Price: <?php echo $product->getPrice()?>€</li>
        <li>Category: <?php echo $product->getCategory()?></li>
        <?php if(get_class($product) === "care"):?>
          <li>Type of product: <?php echo $product->getType()?></li>
         <?php elseif(get_class($product) === "food"):?>
          <li>Expiration date: <?php echo $product->getExpiration()?></li>
         <?php elseif(get_class($product) === "forniture"):?>
          <li>Size: <?php echo $product->getSize()?></li>
         <?php elseif(get_class($product) === "games"):?>
          <li>Material: <?php echo $product->getMaterial()?></li>
         <?php endif?>
      </ul>
    </div>
  <?php endforeach?>
 </main>