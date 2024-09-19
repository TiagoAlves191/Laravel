@extends('layouts.app')

@section('content')
<div class="banner text-center">
    <div class="banner-content">
        <h1 class="display-4">Bem vindo à Pro-Shipping</h1>
        <p class="lead">A melhor loja de e-commerce de Portugal</p>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset('images/product1.jpeg') }}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <p class="card-text">LIMPADOR DE FONES DE OUVIDO</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">€15.00</small>
                        <a href="{{ route('product1') }}" class="btn btn-sm btn-outline-secondary">Mais informações</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset('images/product2.jpg') }}" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <p class="card-text">AIR PODS SERIES 2</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">€150.00</small>
                        <a href="{{ route('product2') }}" class="btn btn-sm btn-outline-secondary">Mais informações</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset('images/product3.jpg') }}" class="card-img-top" alt="Product 3">
                <div class="card-body">
                    <p class="card-text">RATO GAMING RAZER</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">€100.00</small>
                        <a href="{{ route('product3') }}" class="btn btn-sm btn-outline-secondary">Mais informações</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
