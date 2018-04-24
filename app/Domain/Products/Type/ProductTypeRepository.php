<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 4/24/2018
 * Time: 5:19 PM
 */

namespace App\Domain\Products\Type;

use App\Domain\Core\Model\ProductType;
use App\Domain\Core\Repository\Repository;

class ProductTypeRepository extends Repository implements ProductTypeRepositoryInterface
{
    private $productType;

    public function __construct(ProductType $productType)
    {
        $this->productType = $productType;
    }

    public function getProductType($id)
    {
        return $this->productType->findOrFail($id);
    }

    public function getProductTypes()
    {
        return $this->productType->all();
    }
}
