<?php

namespace App\Http\Controllers;

use App\Http\Requests\UotputProductRequest;
use App\Models\Product;
use App\Models\UotputProduct;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class OutputProductController extends Controller
{
    public function index(): View
    {

        return view('admin.output.index');
    }

    public function create(): View
    {
        $products = Product::all();

        return view('admin.output.create', compact('products'));
    }

    public function store(UotputProductRequest $request): RedirectResponse
    {
        $product = UotputProduct::create($request->all());

        foreach ($request->input('products') as $product) {
            $product->products()->attach($product['product_id'], ['quantity' => $product['quantity']]);
            $productModel = Product::find($product['product_id']);
            $productModel->quantity -= $product['quantity'];
            $productModel->save();
        }

        return redirect()->route('')->with('success', 'Salida registrada correctamente');
    }

    public function edit(UotputProduct $output): View
    {
        $output = UotputProduct::findOrFail($output->id);
        $products = Product::all();

        return view('admin.output.edit', compact('products', 'output'));
    }

    public function update(UotputProductRequest $request, UotputProduct $output): RedirectResponse
    {
        $output->update($request->all());

        return redirect()->route('')->with('info', 'Salida actualizado correctamente');
    }

    public function destroy(UotputProduct $output): RedirectResponse
    {
        $output->delete();

        return redirect()->route('')->with('danger', 'Salida eliminada correctamente', '');
    }
}
