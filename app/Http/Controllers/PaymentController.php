<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($product_id)
    {
        $product = Product::findOrFail($product_id);
        return view('payments.process', compact('product'));
    }

    public function process(Request $request)
    {
        // Validação dos dados do formulário
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'card_number' => 'required|string',
            'card_expiry' => 'required|string',
            'card_cvc' => 'required|string',
        ]);

        // Encontrar o produto
        $product = Product::findOrFail($request->input('product_id'));

        // Calcular o valor total
        $totalAmount = $product->price * $request->input('quantity');

        // Criar o pedido
        $order = Order::create([
            'user_id' => Auth::id(),
            'product_id' => $product->id,
            'quantity' => $request->input('quantity'),
            'total_amount' => $totalAmount,
        ]);

        // Aqui você pode adicionar a lógica para processar o pagamento real

        // Redirecionar com mensagem de sucesso
        return redirect()->route('payments.index', ['product_id' => $product->id])
            ->with('success', 'Pagamento processado com sucesso!');
    }
}
