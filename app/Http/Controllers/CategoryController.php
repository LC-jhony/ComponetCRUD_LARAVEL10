<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryUpdate;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use ProtoneMedia\LaravelCrossEloquentSearch\Search;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Search::add(Category::class, 'name')
            ->beginWithWildcard()
            ->orderByDesc()
            ->Paginate(5)
            ->search(request('search'));

        return view('admin.category.index', compact('categories'));
    }

    public function create(): View
    {
        return view('admin.category.create');
    }

    public function store(CategoryRequest $request): RedirectResponse
    {
        $category = Category::create($request->all());

        return redirect()->route('categories.index')
            ->with('success', 'Categoria registrada corectamente');
    }

    public function edit(Category $category): View
    {
        $category = Category::findOrFail($category->id);

        return view('admin.category.edit', compact('category'));
    }

    public function update(CategoryUpdate $request, Category $category): RedirectResponse
    {
        $category->update($request->all());

        return redirect()->route('categories.index')
            ->with('info', 'Categoria actualizada correctamente');
    }

    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();

        return redirect()->route('categories.index')
            ->with('danger', 'Categoria Eliminado correctamente');
    }
}
