<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $product = Product::get();
        return response()->json([
            'message' => 'Product list',
            'status' => 'success',
            'products' => $product
        ]);
    }

    public function store(Request $request)
    {

        $newProduct = new Product;
        $newProduct->name = $request->name;
        $newProduct->description = $request->description;
        $newProduct->units = $request->units;
        $newProduct->price = $request->price;
        $newProduct->category = $request->category;


        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $fileName = time() . $img->getClientOriginalName();
            $path = $img->storeAs('itemImages', $fileName, 'public');
            $newProduct->image = '/storage/' . $path;
        } else {
            return response()->json(["message" => "no files"]);
        }

        $newProduct->save();


        return response()->json(["message" => "success"]);
    }


    public function show(Product $product)
    {
        return response()->json([
            'message' => 'Product details',
            'status' => 'success',
            'product' => $product,

        ]);
    }

    public function update(Request $request, Product $product)
    {

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::delete(str_replace('/storage/', 'public/', $product->image));
            }
            $img = $request->file('image');
            $fileName = time() . $img->getClientOriginalName();
            $path = $img->storeAs('itemImages', $fileName, 'public');
            $image = '/storage/' . $path;
        } else {
            $image = $product->image;
        }



        $product->update([
            'name' => $request->name,
            'image' => $image,
            'description' => $request->description,
            'units' => $request->units,
            'price' => $request->price,
            'category' => $request->category,
        ]);
        return response()->json([
            'message' => 'Product updated',
            'status' => 'success',
            'updated_product' => $product
        ]);
    }

    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::delete(str_replace('/storage/', 'public/', $product->image));
        }
        $product->delete();

        return response()->json([
            'message' => 'Product deleted',
            'status' => 'success'
        ]);
    }
}
