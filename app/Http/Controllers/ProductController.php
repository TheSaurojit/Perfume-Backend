<?php

namespace App\Http\Controllers;

use App\Helpers\FileUploader;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * @param UploadedFile[] $images
     */
    private  function uploadProductImages(array $images, Product $product)
    {
        foreach ($images as $image) {
            if ($image instanceof UploadedFile) {

                $path = FileUploader::upload($image);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path,
                ]);
            }
        }
    }

    public function allProduct()
    {
        $products = Product::with(['singleImage'])->latest()->get();

        return view('pages.products.all-products', compact('products'));
    }

    public function createView()
    {

        return view('pages.products.create');
    }

    public function create(Request $request)
    {

        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',

            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'keywords' => 'nullable|string',

            'price' => 'required|numeric',
            'quantity' => 'required|integer',

            'images' => 'required|array', // images must be an array
            'images.*' => 'image|mimes:jpeg,png,jpg', // each file must be an image
        ]);

        try {

            $product = Product::create([

                'id' => Str::uuid(),
                'title' => $request->input('title'),
                'description' => $request->input('description'),

                'meta_title' => $request->input('meta_title'),
                'meta_description' => $request->input('meta_description'),
                'keywords' => $request->input('keywords'),


                'price' => $request->input('price'),
                'quantity' => $request->input('quantity'),

                'status' => $request->has('draft') ? 'draft' : 'published',

            ]);

            $this->uploadProductImages($request->file('images'), $product);


            return redirect()->route('products.all')->with('success', 'Product created successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Failed to create product. Please try again.');
        }
    }

    public function updateView(Product $product)
    {


        return view('pages.products.update', compact('product'));
    }

    public function update(Request $request, Product $product)
    {

        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',

            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'keywords' => 'nullable|string',

            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'remove_images' => 'nullable|array', // images must be an array

            'images' => 'nullable|array', // images must be an array
            'images.*' => 'image|mimes:jpeg,png,jpg', // each file must be an image
        ]);

        try {

            $product->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),

                'meta_title' => $request->input('meta_title'),
                'meta_description' => $request->input('meta_description'),
                'keywords' => $request->input('keywords'),

                'price' => $request->input('price'),
                'quantity' => $request->input('quantity'),
                'status' => $request->has('draft') ? 'draft' : 'published',
            ]);

            $remove_images = $request->input('remove_images');

            $images = $request->file('images');

            if ($images) {

                $this->uploadProductImages($images, $product);
            }

            if ($remove_images) {
                ProductImage::destroy($remove_images);
            }

            return redirect()->route('products.all')->with('success', 'Product updated successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Failed to update product. Please try again.');
        }
    }



    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.all')->with('success', 'Product deleted successfully.');
    }
}
