<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * OrderProducts
 *
 * @Table(name="order_products")
 * @Entity
 */
class DB_OrderProducts
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
     * @var string $qty
     *
     * @Column(name="qty", type="string", length=100, nullable=false)
     */
    private $qty;

    /**
     * @var string $unitPrice
     *
     * @Column(name="unit_price", type="string", length=100, nullable=false)
     */
    private $unitPrice;

   
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
     * @var Order
     *
     * @ManyToOne(targetEntity="DB_Orders", inversedBy="products")
     * @JoinColumns({
     *   @JoinColumn(name="order_id", referencedColumnName="id")
     * })
     */
    private $order;
    
    /**
     * @var integer $status
     *
     * @Column(name="status", type="string", length=100, nullable=true)
     */
    private $status;



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
     * Set qty
     *
     * @param string $qty
     * @return OrderProducts
     */
    public function setQty($qty)
    {
        $this->qty = $qty;
        return $this;
    }

    /**
     * Get qty
     *
     * @return string 
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * Set unitPrice
     *
     * @param string $unitPrice
     * @return OrderProducts
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * Get unitPrice
     *
     * @return string 
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }
    

    /**
     * Set product
     *
     * @param DB_Product $product
     * @return OrderProducts
     */
    public function setProduct(\DB_Product $product = null)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * Get product
     *
     * @return DB_Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set order
     *
     * @param DB_Orders $order
     * @return OrderProducts
     */
    public function setOrder(\DB_Orders $order = null)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Get order
     *
     * @return DB_Order 
     */
    public function getOrder()
    {
        return $this->order;
    }
    
     /**
     * Set status
     *
     * @param integer $status
     * @return OrderProducts
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }
    
}