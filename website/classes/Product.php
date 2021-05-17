<?php


class Product
{

    private $title;
    private $image_url;
    private $image_detail1;
    private $price;
    private $description;
    private $code;

    public function __construct($code, $title, $image_url, $price, $description, $image_detail1, $image_detail2, $image_detail3, $image_detail4)
    {

        $this->code = $code;
        $this->title = $title;
        $this->image_url = $image_url;
        $this->image_detail1 = $image_detail1;
        $this->price = $price;
        $this->description = $description;

    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }
    

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getImage()
    {
        return $this->image_url;
    }

    public function getDetail1()
    {
        return $this->image_detail1;
    }

    public function getDetail2()
    {
        return $this->image_detail1;
    }

    public function getDetail3()
    {
        return $this->image_detail1;
    }
    
    public function getDetail4()
    {
        return $this->image_detail1;
    }


}