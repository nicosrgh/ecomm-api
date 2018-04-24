<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 4/24/2018
 * Time: 5:22 PM
 */

namespace App\Domain\Products\Type;

interface ProductTypeServiceInterface
{
    public function getProductType($id);

    public function getProductTypes();
}
