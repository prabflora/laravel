<?php

namespace App\Http\Controllers\Admin;
use App\Models\Product;
use Storage;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageServiceProvider;
use Illuminate\Support\Facades\DB;
//use App\Http\Requests\Auth\LoginRequest;
class ProductCrudController extends Controller
{
     //
     /**
     * Show the table data of resource.
     *
     *  
     */
      public function index()
    {
       
        
           $products = DB::table('products')
          ->join('categories', 'products.c_id', 'categories.id')
          ->select('products.*', 'categories.c_name')
          ->orderBy('p_id', 'desc')
          ->get();

       // $products = Product::all();
       
        return view('admin.product.index',compact('products'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     *  
     */

      public function create()
    {

        $categories = Category::all();
        return view('admin.product.create',compact('categories'));

    }
   /**
     * Store a newly created resource in storage.
     *
     */

    public function store(Request $request)
    {

    //   print "<pre>";
    //    print_r($_POST);
    //    die('prab');

        $request->validate([
            'p_name' => 'required',
            'p_slug' => 'required',
            'p_price' => 'required',
            'p_desc' => 'required',      
            'p_sort_order' => 'required',  
            'p_image' => 'image|required|mimes:jpeg,png,jpg' 
        ]);
     
        $request_data=$request->all();

        //$request->file->store('products', 'public');

        // Store the record, using the new file hashname which will be it's new filename identity.
         
         
        $path = $request->file('p_image')->store('public/products');
        $path=str_replace('public/products/',"",$path);
        $request_data['p_image']=$path;
   

        
        Product::create($request_data);

        return redirect('admin/product')->with('success', 'Product have been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Product $product)
    {



        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
 
     */
    public function edit(Product $product)
    {


        $categories = Category::all();
        $product['categories']=$categories;

        return view('admin.product.edit', compact('product'));
    }
    /**
     * Update the specified resource in storage.
     *
 
     */
    public function update(Request $request, Product $product)
    {

      
        $request->validate([
            'p_name' => 'required',
            'p_slug' => 'required',
            'p_price' => 'required',
            'p_desc' => 'required',      
            'p_sort_order' => 'required',  
         
        ]);

        $request_data=$request->all();

         if($request->file('p_image')!=""){
            $path = $request->file('p_image')->store('public/products');
            $path=str_replace('public/products/',"",$path);
            $request_data['p_image']=$path;
         }

 
        $product->update($request_data);
        return redirect()->route('admin.product.index')
            ->with('success', 'Product has been updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     * 
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('admin/product')->with('success', 'Product has been deleted successfully');
    }
 
}
