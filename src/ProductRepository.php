<?php
use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository
{

    public function getCountProducts() {
        return $this->createQueryBuilder('u')
        ->select('count(u.id)')
        ->getQuery()
        ->getSingleScalarResult();
    }

    public function getAvailableProducts() {
        return $this->findBy(['available' => true]);
    }

    public function getNotAvailableProducts() {
        return $this->findBy(['available' => false]);
    }

    public function getProductsByName($name = '') {
        return $this->findBy(['name' => $name]);
    }
}