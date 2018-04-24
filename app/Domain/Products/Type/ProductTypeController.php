<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 4/24/2018
 * Time: 5:26 PM
 */

namespace App\Domain\Products\Type;

use App\Domain\Core\Controller\Controller;

class ProductTypeController extends Controller
{
    private $productTypeService;

    public function __construct(ProductTypeServiceInterface $productTypeService)
    {
        $this->productTypeService = $productTypeService;
    }

    public function index()
    {
        $productTypes = $this->productTypeService->getProductTypes();

        return response()->json($productTypes);
    }

    public function show($id)
    {
        $productType = $this->productTypeService->getProductType($id);

        return response()->json($productType);
    }
}
