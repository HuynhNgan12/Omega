<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;
class AdminProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $query = Products::query();
        if ($search) {
            $query->where('NameSP', 'like', '%' . $search . '%')
                ->orWhere('Price', 'like', '%' . $search . '%')
                ->orWhere('OldPrice', 'like', '%' . $search . '%')
                ->orWhere('Describe', 'like', '%' . $search . '%');
        }
        $products = $query->paginate(5); // Số lượng mục trên mỗi trang, trong ví dụ này là 5
        $viewData = [
            'products' => $products,
            'search' => $search,
        ];

        return view('admin.product.index', compact('viewData'));
    }

    public function store(Request $request)
    {
        $request->validate([
           
        ]);

        $products = new Products();
        $products->setIdSP($request->input('IdSP'));
        $products->setNameSP($request->input('NameSP'));
        $products->setPrice($request->input('Price'));
        $products->setOldPrice($request->input('OldPrice'));
        $products->setDescribe($request->input('Describe'));

        // Lưu hình ảnh sản phẩm
        if ($request->hasFile('ImageSP')) {
            $imageName = $products->getId() . "." . $request->file('ImageSP')->getClientOriginalExtension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('ImageSP')->getRealPath())
            );
            $products->setImageSP($imageName);
        }

        // Lưu video sản phẩm
        if ($request->hasFile('Video')) {
            $videoPath = $request->file('Video')->store('public');
            $products->setVideo(basename($videoPath));
        }

        $products->save();

        // Lưu thông điệp vào Session
        return back();
    }
    public function delete($id)
    {
        Products::destroy($id);
        return back();
    } public function edit($id)
    {
        $viewData = [];
        $viewData["product"] = Products::findOrFail($id);
        return view('admin.product.index')->with("viewData", $viewData);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            
        ]);

        $products = Products::findOrFail($id);
        $products->setIdSP($request->input('IdSP'));
        $products->setNameSP($request->input('NameSP'));
        $products->setPrice($request->input('Price'));
        $products->setOldPrice($request->input('OldPrice'));
        $products->setDescribe($request->input('Describe'));
        
         // Lưu hình ảnh sản phẩm
         if ($request->hasFile('ImageSP')) {
            $imageName = $products->getId() . "." . $request->file('ImageSP')->getClientOriginalExtension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('ImageSP')->getRealPath())
            );
            $products->setImageSP($imageName);
        }

        // Lưu video sản phẩm
        if ($request->hasFile('Video')) {
            $videoPath = $request->file('Video')->store('public');
            $products->setVideo(basename($videoPath));
        }

        $products->save();
        return redirect()->route('admin.product.index');
    }
}
