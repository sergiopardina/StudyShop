<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    /**
     * @var Collection
     */
    public $categories;

    /**
     * @var Collection
     */
    public $brands;

    public function __construct()
    {
        $this->middleware('auth');

        $this->categories = Category::all()->sortBy('name');
        $this->brands = Brand::all()->sortBy('name');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category', 'brand', 'price')->get();
        return view('product.index', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create', [
            'categories' => $this->categories,
            'brands' => $this->brands,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'brand_id' => 'required',
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required',
            'file' => 'mimes:jpg,jpeg,png',
        ]);

        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->top_discount = !is_null($request->top_discount);
        $product->save();

        $price = new Price();
        $price->product_id = $product->id;
        $price->price = $request->price;
        $price->save();

        $files = $request->file('fileMulti');
        if($files) {
            foreach ($files as $file) {

                $fileName = $product->id . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('images', $fileName, 'public');

                $fileModel = new Photo;
                $fileModel->name = $fileName;
                $fileModel->path = '/storage/' . $filePath;
                $fileModel->product_id = $product->id;
                $fileModel->save();
            }
        }

        return redirect()
            ->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit',[
            'product' => $product,
            'category_name' => $product->category->name,
            'brand_name' => $product->brand->name,
            'price' => $product->price->price,
            'price_id' => $product->price->id,
            'categories' => $this->categories,
            'brands' => $this->brands,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'brand_id' => 'required',
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required',
        ]);

        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->top_discount = !is_null($request->top_discount);
        $product->save();

        $price = $product->price;
        $price->price = $request->price;
        $price->save();

        return redirect()
            ->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $photos = $product->photo;
        foreach ($photos as $photo) {
            $image_path = public_path('storage\images\\' . $photo->name);
            if ($photo->exists($image_path)) {
                unlink($image_path);
            }
            $photo->delete($photos);
        }
        $product->price->delete();
        $product->delete();

        return redirect()->route('product.index');
    }
}
