<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at', 'DESC')->paginate(10);
        return view('categories.index', compact('categories'));
    }
}

public function store(Request $request)
{
    //validasi form
    $this->validate($request, [
        'name' => 'required|string|max:50',
        'description' => 'nullable|string'
    ]);
​
    try {
        $categories = Category::firstOrCreate([
            'name' => $request->name
        ], [
            'description' => $request->description
        ]);
        return redirect()->back()->with(['success' => 'Kategori: ' . $categories->name . ' Ditambahkan']);
    } catch (\Exception $e) {
        return redirect()->back()->with(['error' => $e->getMessage()]);
    }
}
​




