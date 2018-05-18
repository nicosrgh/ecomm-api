<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 4/20/2018
 * Time: 5:31 PM
 */

namespace App\Domain\Products;

interface ProductServiceInterface
{
    public function getProduct($id);

    public function getProducts($search = '');
}
