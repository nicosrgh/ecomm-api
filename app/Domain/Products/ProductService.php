<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 4/20/2018
 * Time: 5:31 PM
 */

namespace App\Domain\Products;

use App\Domain\Core\Service\Service;

class ProductService extends Service implements ProductServiceInterface
{
    private $productService;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productService = $productRepository;
    }

    public function getProduct($id)
    {
        return $this->productService->getProduct($id);
    }

    public function getProducts($search = '')
    {
        return $this->productService->getProducts($search);
    }
}