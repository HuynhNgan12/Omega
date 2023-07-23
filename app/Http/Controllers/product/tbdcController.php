<?php
namespace App\Http\Controllers\product;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;
class tbdcController extends Controller{
    public function tbdc(Request $request)
    {
        $search = $request->query('search');
        $query = Product::query();
        if ($search) {
            $query->where('nameproduct', 'like', '%'.$search.'%')
                ->orWhere('money', 'like', '%'.$search.'%')
                ->orWhere('oldprice', 'like', '%'.$search.'%');
        }
        $products = $query->paginate(8); // Số lượng mục trên mỗi trang, trong ví dụ này là 5
        $viewData = [
            'products' => $products,
            'search' => $search,
        ];

        return view('product.tbdc', compact('viewData'));
    }
}
