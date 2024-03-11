<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        return view('admin.products.index');
    }

    public function create(): View
    {
        $categories = Category::all();

        return view('admin.products.create', compact('categories'));
    }

    public function store(ProductRequest $request): RedirectResponse
    {
        Product::create($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Producto registrada corectamente');
    }

    public function edit(Product $product): View
    {
        $categories = Category::all();
        $product = Product::findOrFail($product->id);

        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(ProductRequest $request, Product $product): RedirectResponse
    {
        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('info', 'Producto Actualizado corectamente');
    }

    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('danger', 'Producto Eliminado correctamente');
    }
}
