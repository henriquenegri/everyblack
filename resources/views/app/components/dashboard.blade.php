@extends('app.layouts.template')

@section('content')
<div class="landing-page">

    <section class="hero-section d-flex align-items-center justify-content-center">
        <div class="text-center hero-content">
            <h1 class="hero-title">EveryBlack</h1>
            <p class="hero-subtitle">
                A plataforma que conecta pessoas através de um cadastro simples, rápido e seguro.
            </p>
            <a href="{{ route('login') }}" class="btn btn-custom">Cadastre-se Agora</a>
        </div>
    </section>

    <section class="features-section container py-5">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="feature-card p-4">
                    <i class="bi bi-people-fill fs-1 mb-3"></i>
                    <h5>Conexões Reais</h5>
                    <p>Encontre pessoas e profissionais de forma confiável e personalizada.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-card p-4">
                    <i class="bi bi-lock-fill fs-1 mb-3"></i>
                    <h5>Segurança</h5>
                    <p>Suas informações estão protegidas com tecnologia de ponta.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-card p-4">
                    <i class="bi bi-lightning-fill fs-1 mb-3"></i>
                    <h5>Rapidez</h5>
                    <p>Cadastre-se em poucos minutos e aproveite todas as vantagens.</p>
                </div>
            </div>
        </div>
    </section>

</div>

<style>
    .landing-page {
        font-family: 'Montserrat', sans-serif;
        color: #fff;
    }

    .hero-section {
        background-color: transparent !important;
        min-height: 90vh;
        padding: 60px 20px;
        text-align: center;
    }

    .hero-title {
        font-size: 3rem;
        font-weight: 700;
        background: linear-gradient(90deg, #ff8c00, #ffa500);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 20px;
    }

    .hero-subtitle {
        font-size: 1.2rem;
        color: #ccc;
        max-width: 600px;
        margin: 0 auto 30px;
    }

    .btn-custom {
        background: linear-gradient(90deg, #ff8c00, #ffa500);
        color: #000;
        border: none;
        font-weight: 600;
        border-radius: 30px;
        padding: 12px 30px;
        transition: background 0.3s ease, transform 0.2s ease;
    }

    .btn-custom:hover {
        background: linear-gradient(90deg, #ffa500, #ff8c00);
        transform: translateY(-2px);
    }

    .features-section {
        background-color: transparent !important;
    }

    .feature-card {
        background-color: transparent !important;
        border-radius: 16px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.5);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.7);
    }

    .feature-card i {
        color: #ffa500;
    }

    @media (max-width: 767px) {
        .hero-title {
            font-size: 2.2rem;
        }
    }
</style>

<!-- Bootstrap Icons (opcional) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
@endsection
