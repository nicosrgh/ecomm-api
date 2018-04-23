<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 4/20/2018
 * Time: 5:25 PM
 */

namespace App\Domain\Products;

interface ProductRepositoryInterface
{
    public function getProduct($id);

    public function getProducts();
}