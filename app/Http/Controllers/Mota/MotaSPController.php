namespace App\Http\Controllers\Mota;
use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class MotaSPController extends Controller {
    public function MotaSP($id) {
        $viewData = [];
        $product = Products::findOrFail($id);
        $viewData["product"] = $product; // Assuming you have one product to display
        return view('Mota.MotaSP', $viewData);
    }
}
