<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\Item;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
class AdminCartController extends Controller{
    public function index(Request $request) {
        $search = $request->query('search');
        $query = Item::query();
        if ($search) {
            $query->where('quantity', 'like', '%' . $search . '%')
                ->orWhere('price', 'like', '%' . $search . '%')
                ->orWhere('order_id', 'like', '%' . $search . '%')
                ->orWhere('product_id', 'like', '%' . $search . '%');
        }
        $items = $query->paginate(5); 
        $viewData = [
            'items' => $items,
            'search' => $search,
        ];

        return view('admin.cart.index', compact('viewData'));
    }public function store(Request $request)
    {
        $request->validate([
           
        ]);

        $items = new Item();
        $items->setQuantity($request->input('quantity'));
        $items->setPrice($request->input('price'));
        $items->setOrderId($request->input('order_id'));
        $items->setProductId($request->input('product_id'));
        $items->setNameSP($request->input('NameSP'));
        $items->save();

        return back();
    }

    public function delete($id)
    {
        Item::destroy($id);
        return back();
    } public function edit($id)
    {
        $viewData = [];
        $viewData["items"] = Item::findOrFail($id);
        return view('admin.cart.index')->with("viewData", $viewData);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            
        ]);

        $items = Item::findOrFail($id);
        $items->setQuantity($request->input('quantity'));
        $items->setPrice($request->input('price'));
        $items->setOrderId($request->input('order_id'));
        $items->setProductId($request->input('product_id'));
        $items->save();
        return redirect()->route('admin.cart.index');
    }
}
