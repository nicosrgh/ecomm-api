<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 4/20/2018
 * Time: 5:33 PM
 */

namespace App\Domain\Products;

use App\Domain\Core\Controller\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function index(Request $request)
    {
        $search = $request->get('search');
        $products = $this->productService->getProducts($search);

        return response()->json($products);
    }

    public function show($id)
    {
        $product = $this->productService->getProduct($id);

        return response()->json($product);
    }
}