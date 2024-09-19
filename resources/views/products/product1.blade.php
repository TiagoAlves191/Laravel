@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card h-100">
                <img src="{{ asset('images/product1.jpeg') }}" class="card-img-top img-fluid" style="height: 400px; object-fit: cover;" alt="LIMPADOR DE FONES DE OUVIDO">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 p-3">
                <div class="card-body">
                    <h1 class="card-title">LIMPADOR DE FONES DE OUVIDO</h1>
                    <p class="card-text">Este é um excelente limpador para os seus fones de ouvido, mantendo-os limpos e livres de sujidade.</p>
                    <p class="card-text"><strong>Preço: €15.00</strong></p>
                    <p class="card-text"><strong>Modelo: ZTX</strong></p>
                    <p class="card-text"><strong>Estado: Novo</strong></p>
                    <a href="{{ url('/') }}" class="btn btn-primary">Voltar</a>
                    <a href="{{ route('payments.index', ['product_id' => 3]) }}" class="btn btn-primary">Comprar</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
