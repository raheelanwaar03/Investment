<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\AdminProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = AdminProductModel::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_price' => 'required',
            'product_level' => 'required',
            'product_img' => 'required',
        ]);

        $image = $validated['product_img'];
        $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $product = new AdminProductModel();
        $product->product_price = $validated['product_price'];
        $product->product_level = $validated['product_level'];
        $product->product_img = $imageName;
        $product->save();
        return redirect()->back()->with('massage', 'Task Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $product = AdminProductModel::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = AdminProductModel::find($id);
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = AdminProductModel::find($id);

        // check image

        if ($request->product_img) {
            $image = $request->product_img;
            $imageName = rand(111111, 99999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $product->product_img = $imageName;
        }
        $product->product_price = $request->product_price;
        $product->product_level = $request->product_level;
        $product->save();
        return redirect()->back()->with('massage', 'Task Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = AdminProductModel::find($id);
        $product->delete();
        return redirect()->back()->with('error', 'Task Deleted successfully');
    }
}
