<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 4/20/2018
 * Time: 5:28 PM
 */

namespace App\Domain\Products;

use App\Domain\Core\Model\Product;
use App\Domain\Core\Repository\Repository;

class ProductRepository extends Repository implements ProductRepositoryInterface
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getProduct($id)
    {
        return $this->product->findOrFail($id);
    }

    public function getProducts()
    {
        return $this->product
	        ->with('productType')
	        ->get();
    }
}