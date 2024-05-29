<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
    function getProduct() {
        $products = ProductModel::all();
        return view('admin.product.getProducts', ['products' => $products]);
    }

    function getProductsbyBand(Request $request) {
        $band = $request->input('selectBand');
        $products = ProductModel::where('band', $band)->get();
        return view('admin.product.getProductsbyBand', ['products' => $products]);
    }

    function forminsertProduct() {
        return view('admin.product.insertProduct');
    }

    function insertProduct(Request $request) {
        $product = new ProductModel;
        $product->pid = $request->id;
        $product->pname = $request->pname;
        $product->company = $request->company;
        $product->band = $request->selectBand;
        $product->year = $request->selectYear;
        if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
            $pimage = 'data: image/png;base64,'
            . base64_encode(file_get_contents($_FILES['img']["tmp_name"]));
            $product->pimage = $pimage;
        }
        $product->save();
        return redirect('admin/product/insertProduct')
        ->with("Note", "Thêm thành công.");
    }
}
