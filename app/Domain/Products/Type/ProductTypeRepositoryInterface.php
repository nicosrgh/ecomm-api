<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 4/24/2018
 * Time: 5:18 PM
 */

namespace App\Domain\Products\Type;

interface ProductTypeRepositoryInterface
{
    public function getProductType($id);

    public function getProductTypes();
}
