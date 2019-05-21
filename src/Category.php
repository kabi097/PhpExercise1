<?php
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Table(name="categories")
 * @Entity(repositoryClass="CategoryRepository")
 **/
class Category
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string") **/
    protected $name;

    /**
     * @ManyToMany(targetEntity="Product", inversedBy="belongingToProducts")
     * @JoinTable(name="categories_products")
     **/
    protected $products;

    public function __construct() {
        $this->products = new ArrayCollection();
    }

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}