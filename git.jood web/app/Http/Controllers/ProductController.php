<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    // عرض قائمة المنتجات
    public function index()
    {
        $products = Product::all(); // جلب جميع المنتجات
        return view('dashboard.products.index', compact('products'));
    }

    // عرض صفحة إضافة منتج جديد
    public function create()
    {
        $categories = Category::all(); // جلب جميع الفئات
        return view('dashboard.products.create', compact('categories'));
    }

    // حفظ منتج جديد في قاعدة البيانات
    public function store(Request $request)
    {
        // dd($request->all(), $request->file('image'));
        // return $request;
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,jpg,png,bmp,gif,svg',
            'category_id' => 'required|integer|exists:categories,id',
        ]);

        // رفع الصورة
        // $imagePath = $request->file('image')->store('products', 'public');

        $image = $request->image->getClientOriginalName();
        $image_name = time() . '.' . $image;
        $path = 'images/product';
        $request->image->move($path, $image_name);

        // حفظ المنتج
        Product::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            // 'image' => $imagePath,
            'image' => '/' . $path . '/' . $image_name,
            'category_id' => $validated['category_id'],
        ]);

        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

    // عرض صفحة تعديل منتج
    public function edit(Product $product)
    {
        $categories = Category::all(); // جلب جميع الفئات لتعديل المنتج
        return view('dashboard.products.edit', compact('product', 'categories'));
    }

    // تحديث منتج موجود
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,bmp,gif,svg',
            'category_id' => 'required|integer|exists:categories,id',
        ]);

        // إذا تم رفع صورة جديدة
        if ($request->hasFile('image_url')) {
            $imagePath = $request->file('image_url')->store('products', 'public');
            $product->update(['image_url' => $imagePath]);
        }

        if ($request->file('image')) {
            if (File::exists(public_path() . $product->image)) {
                File::delete(public_path() . $product->image);
            }

            $image = $request->image->getClientOriginalName();
            $image_name = time() . '.' . $image;
            $path = 'images/product';
            $request->image->move($path, $image_name);

            $product->update([
                'name' => $validated['name'],
                'description' => $validated['description'],
                'price' => $validated['price'],
                'category_id' => $validated['category_id'],
                'image' => '/' . $path . '/' . $image_name,
            ]);
        }

        else{

            // تحديث باقي بيانات المنتج
            $product->update([
                'name' => $validated['name'],
                'description' => $validated['description'],
                'price' => $validated['price'],
                'category_id' => $validated['category_id'],
            ]);
        }

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    // حذف منتج
    public function destroy(Product $product)
    {
        $product->delete(); // حذف المنتج
        unlink(public_path() .  $product->image);
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
