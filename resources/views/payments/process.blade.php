<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processar Pagamento</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Processar Pagamento</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('payments.process') }}" method="post" class="mt-4">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <div class="form-group">
                <label for="product">Produto</label>
                <input type="text" id="product" class="form-control" value="{{ $product->name }} - ${{ $product->price }}" disabled>
            </div>
            <div class="form-group">
                <label for="quantity">Quantidade</label>
                <input type="number" id="quantity" name="quantity" class="form-control" min="1" required>
            </div>
            <div class="form-group">
                <label for="card-number">Número do Cartão</label>
                <input type="text" id="card-number" name="card_number" class="form-control" placeholder="1234 5678 9012 3456" required>
            </div>
            <div class="form-group">
                <label for="card-expiry">Validade</label>
                <input type="text" id="card-expiry" name="card_expiry" class="form-control" placeholder="MM/AA" required>
            </div>
            <div class="form-group">
                <label for="card-cvc">CVC</label>
                <input type="text" id="card-cvc" name="card_cvc" class="form-control" placeholder="123" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Pagar</button>
        </form>
    </div>
</body>
</html>
