<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\category;
use App\Models\admin\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->get();

        $page = [
            'name' => 'Product'
        ];
        return view('admin.pages.product.index', compact('page', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('test');
        $categories = Category::orderBy('name', 'asc')->get();

        
        $page = [
            'name' => 'Product',
            'slug' => 'slug',
            'search_index' => 1,
            'search_follow' => 1,
            'canonical_url' => null,
            'meta_title' => null,
            'meta_keyword' => null,
            'meta_description' => null,
        ];

        return view('admin.pages.product.create', compact('page', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string',
        ]);

        $item_no = Product::latest()->first();
        if($item_no){
            $item_no =  $item_no->item_no + 1;
        }else{
            $item_no = 1;
        }

        $image_name = uploadImageThumb($request);

        $product = Product::create([
            'item_no' => $item_no, 
            'name' => $request->name, 
            'category_id' => $request->category_id, 
            'description' => $request->description, 
            'image' => $image_name, 
            'image_title' => $request->image_title, 
            'page_title' => $request->page_title, 
            'slug' => $request->slug, 
            'status' => $request->status
        ]);
        
        $product->seo()->create([
            'search_index' => $request->search_index, 
            'search_follow' => $request->search_follow, 
            'canonical_url' => $request->canonical_url, 
            'meta_title' => $request->meta_title,
            'meta_keyword' => $request->meta_keyword, 
            'meta_description' => $request->meta_description,
            'seoable_id' => $request->seoable_id, 
            'seoable_type' => $request->seoable_type
        ]);

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
