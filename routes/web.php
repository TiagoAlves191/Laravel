<?php
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product1', function () {
    return view('products.product1');
})->name('product1');

Route::get('/product2', function () {
    return view('products.product2');
})->name('product2');

Route::get('/product3', function () {
    return view('products.product3');
})->name('product3');

Route::middleware(['auth'])->group(function () {
Route::get('/pagamento/{product_id}', [PaymentController::class, 'index'])->name('payments.index');
Route::post('/pagamento/processar', [PaymentController::class, 'process'])->name('payments.process');
});



Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

