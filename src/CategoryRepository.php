<?php
use Doctrine\ORM\EntityRepository;

class CategoryRepository extends EntityRepository
{
    public function getCountProductsInCategory(Product $product) {
        return $this->getEntityManager()->createQuery("SELECT COUNT('products.id') JOIN categories_products ON products.id = categories_products.product_id FROM products WHERE product_id = ".$product->getId()."")
        ->getSingleScalarResult();
    }

    public function getProductsInCategory(Product $product) {
        return $this->getEntityManager()->createQuery("SELECT * JOIN categories_products ON products.id = categories_products.product_id FROM products WHERE product_id = ".$product->getId()."")
        ->getQuery();
    }
}