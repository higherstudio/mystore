<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SaleGroupOffer
 *
 * @Table(name="sale_group_offer")
 * @Entity
 */
class DB_SaleGroupOffer
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
     * @var string $valueType
     *
     * @Column(name="value_type", type="string", length=50, nullable=false)
     */
    private $valueType;

    /**
     * @var string $value
     *
     * @Column(name="value", type="string", length=50, nullable=false)
     */
    private $value;

    /**
     * @var datetime $dateFrom
     *
     * @Column(name="date_from", type="datetime", nullable=true)
     */
    private $dateFrom;

    /**
     * @var datetime $dateTo
     *
     * @Column(name="date_to", type="datetime", nullable=true)
     */
    private $dateTo;

    /**
     * @var datetime $dateCreate
     *
     * @Column(name="date_create", type="datetime", nullable=false)
     */
    private $dateCreate;

    /**
     * @var datetime $dateUpd
     *
     * @Column(name="date_upd", type="datetime", nullable=true)
     */
    private $dateUpd;

    /**
     * @var boolean $status
     *
     * @Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var string $shortName
     *
     * @Column(name="short_name", type="string", length=30, nullable=true)
     */
    private $shortName;

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
     * @var Admin
     *
     * @ManyToOne(targetEntity="DB_Admin")
     * @JoinColumns({
     *   @JoinColumn(name="admin_id", referencedColumnName="id")
     * })
     */
    private $admin;



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
     * @return SaleGroupOffer
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
     * Set valueType
     *
     * @param string $valueType
     * @return SaleGroupOffer
     */
    public function setValueType($valueType)
    {
        $this->valueType = $valueType;
        return $this;
    }

    /**
     * Get valueType
     *
     * @return string 
     */
    public function getValueType()
    {
        return $this->valueType;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return SaleGroupOffer
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set dateFrom
     *
     * @param datetime $dateFrom
     * @return SaleGroupOffer
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    /**
     * Get dateFrom
     *
     * @return datetime 
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Set dateTo
     *
     * @param datetime $dateTo
     * @return SaleGroupOffer
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;
        return $this;
    }

    /**
     * Get dateTo
     *
     * @return datetime 
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Set dateCreate
     *
     * @param datetime $dateCreate
     * @return SaleGroupOffer
     */
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;
        return $this;
    }

    /**
     * Get dateCreate
     *
     * @return datetime 
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * Set dateUpd
     *
     * @param datetime $dateUpd
     * @return SaleGroupOffer
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;
        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return datetime 
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return SaleGroupOffer
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set shortName
     *
     * @param string $shortName
     * @return SaleGroupOffer
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
        return $this;
    }

    /**
     * Get shortName
     *
     * @return string 
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Set store
     *
     * @param DB_Store $store
     * @return SaleGroupOffer
     */
    public function setStore(\DB_Store $store = null)
    {
        $this->store = $store;
        return $this;
    }

    /**
     * Get store
     *
     * @return DB_Store 
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * Set admin
     *
     * @param DB_Admin $admin
     * @return SaleGroupOffer
     */
    public function setAdmin(\DB_Admin $admin = null)
    {
        $this->admin = $admin;
        return $this;
    }

    /**
     * Get admin
     *
     * @return DB_Admin 
     */
    public function getAdmin()
    {
        return $this->admin;
    }
}