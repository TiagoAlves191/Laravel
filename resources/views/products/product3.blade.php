@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card h-100">
                <img src="{{ asset('images/product3.jpg') }}" class="card-img-top img-fluid" style="height: 400px; object-fit: cover;" alt="RATO GAMING RAZER">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 p-3">
                <div class="card-body">
                    <h1 class="card-title">RATO GAMING RAZER</h1>
                    <p class="card-text">Desfrute de precisão e conforto com o Rato Gaming Razer, perfeito para gamers exigentes.</p>
                    <p class="card-text"><strong>Preço: €100.00</strong></p>
                    <p class="card-text"><strong>Modelo: Viper mini</strong></p>
                    <p class="card-text"><strong>Estado: Como novo</strong></p>
                    <a href="{{ url('/') }}" class="btn btn-primary">Voltar</a>
                    <a href="{{ route('payments.index', ['product_id' => 1]) }}" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
