<?php


class ProductCatalogue
{


    private $products;

    /**
     * ProductCatalogue constructor.
     *
     * @param $json_file The file with products to load into the product catalogue
     */
    public function __construct($json_file)
    {
        if (!file_exists($json_file)) {
            throw new \RuntimeException('Dit JSON bestand bestaat niet');
        }

        $this->products = [];

        $this->loadCatalogue($json_file);
    }

    public function getAllProducts()
    {
        return $this->products;
    }

    private function loadCatalogue($json_file)
    {
        $json = file_get_contents($json_file);
        $data = json_decode($json, true);
        foreach ($data as $product) {
            $this->products[] = new Product($product['code'], $product['title'], $product['image_url'], $product['price'], $product['description'], $product['image_detail1'], $product['image_detail2'], $product['image_detail3'], $product['image_detail4']);}
    }


    /**
     * @param $id
     * @return Product $product
     */
    public function getProduct($code)
    {

        foreach ($this->products as $product) {
            if ($product->getCode() == $code) {
                return $product;
            }
        }

        return false;
    }
    // public function addProduct(Product $product)
    // {

    // }

}
