<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Elegance</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Hotel Elegance</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#rooms">Quartos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#services">Serviços</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contato</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Header -->
<header class="header">
    <div class="container text-center">
        <h1>Bem-vindo ao Hotel Elegance</h1>
        <p class="lead">Seu conforto é nossa prioridade</p>
        <a href="#" class="btn btn-primary btn-lg">Reserve Agora</a>
    </div>
</header>

<!-- About Section -->
<section class="about py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="data:image/jpeg;base64,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" alt="Lobby do Hotel" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>Sobre Nós</h2>
                <p>O Hotel Elegance é o destino perfeito para quem procura conforto e luxo. Localizado no coração da cidade, oferecemos uma experiência única e inesquecível. Nossos quartos são equipados com as mais modernas comodidades, garantindo uma estadia agradável e relaxante.</p>
                <p>Desde nossa fundação, temos nos dedicado a fornecer um serviço excepcional e atendimento personalizado a cada hóspede. Nossa equipe está sempre pronta para atender suas necessidades e tornar sua visita memorável.</p>
            </div>
        </div>
    </div>
</section>

<!-- Rooms Section -->
<section id="rooms" class="rooms py-5 bg-light">
    <div class="container">
        <h2 class="text-center">Nossos Quartos</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://source.unsplash.com/800x600/?hotel,room" class="card-img-top" alt="Quarto Standard">
                    <div class="card-body">
                        <h5 class="card-title">Quarto Standard</h5>
                        <p class="card-text">Desfrute de conforto e conveniência em nosso Quarto Standard, equipado com todas as comodidades essenciais.</p>
                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://source.unsplash.com/800x600/?hotel,bedroom" class="card-img-top" alt="Suíte Deluxe">
                    <div class="card-body">
                        <h5 class="card-title">Suíte Deluxe</h5>
                        <p class="card-text">Experimente o luxo supremo em nossa Suíte Deluxe, com espaço adicional e vistas deslumbrantes.</p>
                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://source.unsplash.com/800x600/?hotel,luxury" class="card-img-top" alt="Suíte Presidencial">
                    <div class="card-body">
                        <h5 class="card-title">Suíte Presidencial</h5>
                        <p class="card-text">Viva uma experiência inigualável em nossa Suíte Presidencial, a escolha perfeita para ocasiões especiais.</p>
                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services py-5">
    <div class="container">
        <h2 class="text-center">Nossos Serviços</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="service">
                    <i class="fas fa-bed fa-3x mb-3"></i>
                    <h3>Quartos Confortáveis</h3>
                    <p>Desfrute de uma estadia confortável em nossos quartos bem equipados.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <i class="fas fa-utensils fa-3x mb-3"></i>
                    <h3>Restaurante Gourmet</h3>
                    <p>Saboreie pratos deliciosos em nosso restaurante de classe mundial.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <i class="fas fa-spa fa-3x mb-3"></i>
                    <h3>Spa e Bem-Estar</h3>
                    <p>Relaxe e rejuvenesça com nossos serviços de spa de luxo.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact py-5 bg-light">
    <div class="container">
        <h2 class="text-center">Contato</h2>
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" placeholder="Seu Nome">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Seu Email">
                    </div>
                    <div class="form-group">
                        <label for="message">Mensagem</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Sua Mensagem"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="col-md-6">
                <h3>Endereço</h3>
                <p>Rua das Flores, 123</p>
                <p>Cidade Exemplo, CE 12345-678</p>
                <p>Email: contato@hotelelegance.com</p>
                <p>Telefone: (12) 3456-7890</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer bg-dark text-white py-4">
    <div class="container text-center">
        <p>&copy; 2024 Hotel Elegance. Todos os direitos reservados.</p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="script.js"></script>
</body>
</html>
<style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
}

.header {
    background: url('https://source.unsplash.com/1600x900/?hotel') no-repeat center center/cover;
    height: 100vh;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.header h1 {
    font-size: 4rem;
    margin-bottom: 1rem;
}

.header p {
    font-size: 1.5rem;
    margin-bottom: 2rem;
}

.about {
    background-color: #fff;
}

.rooms .card {
    transition
}
</style>