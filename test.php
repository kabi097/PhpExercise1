<?php
use Doctrine\ORM\Query\QueryException;

require_once "bootstrap.php";
try {
$product = new Product();
$product->setName("Test");
$product->setAvailable(true);
$product->setPrice(500);

$category = new Category();
$category->setName("New category");
$category->addProduct($product);

$entityManager->persist($product);
$entityManager->persist($category);
$entityManager->flush();


require_once "bootstrap.php";
$products = $entityManager->getRepository('Product');
$categories = $entityManager->getRepository('Category');

$product = $products->findOneBy([]);
echo $categories->getCountProductsInCategory($product);
} catch(QueryException $e) {
    echo $e;
}