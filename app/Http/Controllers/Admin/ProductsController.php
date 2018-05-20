<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EditProductsRequest;
use App\Http\Requests\SaveProductsRequest;
use App\Models\CookTable;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createProducts()
    {
        return view('admin.products.form_products');
    }

    public function saveProducts(SaveProductsRequest $request)
    {
        $image = $request->file('fileToUpload');
        $filename = time() . '.' . $image->extension();
        $image->move('upload/', $filename);

        $newsCompany = CookTable::create([
            'image' => $filename,
            'name' => $request['title_products'],
            'price' => $request['price_products']
        ]);
        if ($newsCompany) {
            \Session::flash('alert-success', 'Tạo Món Ăn Thành Công');
        } else {
            \Session::flash('alert-warning', 'Tạo Món Ăn Lỗi');
        }
        return redirect()->route('list_products');
    }

    public function listProducts()
    {
        $products = CookTable::all();
        return view('admin.products.list_products',[
            'products' => $products
        ]);
    }

    public function showEditProducts($id)
    {
        $products = CookTable::find($id);

        if (isset($products) && !empty($products)) {
            return view('admin.products.edit_products', [
                'products' => $products
            ]);
        }
        return redirect()->route('list_products');
    }

    public function editProducts(EditProductsRequest $request)
    {
        if (!empty($request->file('fileToUpload'))) {
            $image = $request->file('fileToUpload');
            $filename = time() . '.' . $image->extension();
            $image->move('upload/', $filename);
        } else{
            $product = CookTable::where('id', $request['products_id'])->first();
            $filename = $product['image'];
        }

        $newsEdit = CookTable::where('id', $request['products_id'])
            ->update([
                'image' => $filename,
                'name' => $request['title_products'],
                'price' => $request['price_products']
            ]);
        if ($newsEdit) {
            \Session::flash('alert-success', 'Sửa Món Ăn Thành Công');
        } else {
            \Session::flash('alert-warning', 'Sửa Món Ăn Lỗi');
        }
        return redirect()->route('list_products');

    }

    public function deleteProducts($id)
    {
        $product = CookTable::find($id);
        $delete = $product->delete();
        if ($delete) {
            \Session::flash('alert-success', 'Xoá Món Ăn Thành Công');
        } else {
            \Session::flash('alert-warning', 'Xoá Món Ăn Lỗi');
        }
        return redirect()->route('list_products');
    }
}
