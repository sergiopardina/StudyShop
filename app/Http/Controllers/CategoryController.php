<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index', [
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->top = !is_null($request->top);

        $category->save();

        return redirect()
            ->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($name)
    {
        $category = Category::where('name', $name)->firstOrFail();
        $products = $category->products;
        $photos = DB::table('photos')
            ->join('products', 'photos.product_id', '=', 'products.id')
            ->whereIn('photos.product_id', $category->products->pluck('id'))
            ->groupBy('products.id')
            ->select(DB::raw('GROUP_CONCAT(photos.path) as photos'))
            ->get();

        return view('category', [
           'products' => $products,
            'name' => $name,
            'photos' => $photos,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit',[
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $category->name = $request->name;
        $category->top = !is_null($request->top);

        $category->save();

        return redirect()
            ->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
}
