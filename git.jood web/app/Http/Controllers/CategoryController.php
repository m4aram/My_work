<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // عرض قائمة الفئات
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.categories.index', compact('categories'));
    }

    // عرض صفحة إضافة فئة جديدة
    public function create()
    {
        return view('dashboard.categories.create');
    }

    // حفظ فئة جديدة في قاعدة البيانات
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Category::create($validated);

        return redirect()->route('categories.index')->with('success', 'Category added successfully!');
    }

    // عرض صفحة تعديل فئة
    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', compact('category'));
    }

    // تحديث فئة موجودة
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category->update($validated);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
    }

    // حذف فئة
    public function destroy(Category $category)
    {
        $category->delete();
        $category->products->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    }
}
