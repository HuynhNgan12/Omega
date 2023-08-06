<?php
namespace App\Http\Controllers\product;
use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;
class tbdcController extends Controller{
    public function tbdc(Request $request)
    {
        $search = $request->query('search');
        $query = Products::query();
        if ($search) {
            $query->where('NameSP', 'like', '%'.$search.'%')
                ->orWhere('Price', 'like', '%'.$search.'%')
                ->orWhere('OldPrice', 'like', '%'.$search.'%');
        }
        $products = $query->paginate(8); // Số lượng mục trên mỗi trang, trong ví dụ này là 5
        $viewData = [
            'products' => $products,
            'search' => $search,
        ];

        return view('product.tbdc', compact('viewData'));
    }
    public function MotaSP($id) {
        $viewData = [];
        $products = Products::findOrFail($id);
        $viewData["products"] = $products;
        return view('Mota.MotaSP')->with("viewData", $viewData);  }
}
