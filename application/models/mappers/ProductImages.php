<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ProductAttributes
 *
 * @Table(name="product_images")
 * @Entity
 */
class DB_ProductImages
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;
    
   /**
     * @var Product
     *
     * @ManyToOne(targetEntity="DB_Product")
     * @JoinColumns({
     *   @JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;
    
    
    /**
     * @var Store
     *
     * @ManyToOne(targetEntity="DB_Store")
     * @JoinColumns({
     *   @JoinColumn(name="store_id", referencedColumnName="id")
     * })
     */
    private $store;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return ProductAttributes
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set product
     *
     * @param DB_Product $product
     * @return ProductImages
     */
    public function setProduct(\DB_Product $product = null)
    {
    	$this->product = $product;
    	return $this;
    }
    
    /**
     * Get $product
     *
     * @return integer
     */
    public function getProduct()
    {
    	return $this->product;
    }
    
    
    /**
     * Set store
     *
     * @param DB_Store $store
     * @return ProductImages
     */
    public function setStore(\DB_Store $store = null)
    {
    	$this->store = $store;
    	return $this;
    }
    
    /**
     * Get $store
     *
     * @return integer
     */
    public function getStore()
    {
    	return $this->store;
    }
    
}