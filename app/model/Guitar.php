<?php
namespace app\model;

class Guitar{
    private int $id;
    private string $manufacturer;
    private string $type;
    private int $categoryId;
    private int $numberOfStrings;
    private int $price;
    private int $stock;
    private bool $status;

    /**
     * @param int $id
     * @param string $manufacturer
     * @param string $type
     * @param int $categoryId
     * @param int $numberOfStrings
     * @param int $price
     * @param int $stock
     * @param bool $status
     */
    public function __construct(int $id, string $manufacturer, string $type, int $categoryId, int $numberOfStrings, int $price, int $stock, bool $status)
    {
        $this->id = $id;
        $this->manufacturer = $manufacturer;
        $this->type = $type;
        $this->categoryId = $categoryId;
        $this->numberOfStrings = $numberOfStrings;
        $this->price = $price;
        $this->stock = $stock;
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getManufacturer(): string
    {
        return $this->manufacturer;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    /**
     * @return int
     */
    public function getNumberOfStrings(): int
    {
        return $this->numberOfStrings;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getStock(): int
    {
        return $this->stock;
    }

    /**
     * @return bool
     */
    public function isStatus(): bool
    {
        return $this->status;
    }




}

