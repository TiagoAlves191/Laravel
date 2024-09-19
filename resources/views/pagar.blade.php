<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Pagamento</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>Pagamento</h1>
    <form id="payment-form">
      <div class="form-group">
        <label for="card-number">Número do Cartão</label>
        <input type="text" id="card-number" placeholder="1234 5678 9012 3456" required>
      </div>
      <div class="form-group">
        <label for="card-expiry">Validade</label>
        <input type="text" id="card-expiry" placeholder="MM/AA" required>
      </div>
      <div class="form-group">
        <label for="card-cvc">CVC</label>
        <input type="text" id="card-cvc" placeholder="123" required>
      </div>
      <button type="submit">Pagar</button>
    </form>
    <div id="payment-message"></div>
  </div>

  <script src="script.js"></script>
</body>
</html>
