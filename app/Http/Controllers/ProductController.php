<?php

namespace App\Http\Controllers;

use App\Model\Cart;
use App\Model\Category;
use App\Repositories\CartRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Debugbar;


class ProductController extends Controller
{
    protected $productRepositoryInterface;
    
    protected $nbrPerPage = 12;
    
    
    public function __construct(ProductRepositoryInterface $productRepositoryInterface)
    {
        $this->productRepositoryInterface = $productRepositoryInterface;
        $this->middleware('auth');
        $this->middleware('header_data');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {        
        $products = null;
        
        if(isset($request))
        {
            $category_id = $request->input(['category_name']);
            $product_name = $request->input(['product_name']);
            
            if(is_null($category_id) && is_null($product_name))
            {
                $products = $this->productRepositoryInterface->getPaginate($this->nbrPerPage);
                session()->forget('category_selected');
                session()->forget('product_selected');
            }
            else if (isset($category_id) && is_null($product_name))
            {
                $products = $this->productRepositoryInterface->getPaginateCategory($this->nbrPerPage,$category_id);
                session(['category_selected' => $category_id]);
                session()->forget('product_selected');
                
            }
            else if (is_null($category_id) && isset($product_name))
            {
                $products = $this->productRepositoryInterface->getPaginateProduct($this->nbrPerPage,$product_name);
                session(['product_selected' => $product_name]);
                session()->forget('category_selected');
            }
            else if (isset($product_name) && isset($product_name))
            {
                $products = $this->productRepositoryInterface->getPaginateCategoryProduct($this->nbrPerPage,$category_id,$product_name);
                session(['category_selected' => $category_id]);
                session(['product_selected' => $product_name]);
            }
            else
            {
                // nothing
            }
        }
        else
        {
            $products = $this->productRepositoryInterface->getPaginate($this->nbrPerPage);
            session()->forget('catetory_selected');
            session()->forget('product_selected');
        }
        
        return view('product_index', ['products' => $products]);
    }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        // CODE TEMPORARY (url()->previous())
        return $this->index($request);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get product
        $product = $this->productRepositoryInterface->getById($id);

        return view('product_show', ['product' => $product]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    
    
    
    
}