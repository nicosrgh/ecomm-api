<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 4/24/2018
 * Time: 5:23 PM
 */

namespace App\Domain\Products\Type;

use App\Domain\Core\Service\Service;

class ProductTypeService extends Service implements ProductTypeServiceInterface
{
    private $productTypeRepository;

    public function __construct(ProductTypeRepositoryInterface $productTypeRepository)
    {
        $this->productTypeRepository = $productTypeRepository;
    }

    public function getProductType($id)
    {
        return $this->productTypeRepository->getProductType($id);
    }

    public function getProductTypes()
    {
        return $this->productTypeRepository->getProductTypes();
    }
}
