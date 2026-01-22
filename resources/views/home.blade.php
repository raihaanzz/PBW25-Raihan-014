@extends('layouts.main')    
@section('content')

<style>
    .welcome-section {
        text-align: center;
        padding: 3rem 0;
    }

    .welcome-title {
        font-size: 3rem;
        font-weight: 700;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 1rem;
        animation: fadeInDown 1s ease;
    }

    .welcome-subtitle {
        font-size: 1.5rem;
        color: #666;
        margin-bottom: 2rem;
        animation: fadeInUp 1s ease;
    }

    .greeting-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 2rem;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
        margin-bottom: 2rem;
        animation: slideInLeft 1s ease;
    }

    .greeting-card h3 {
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .greeting-card p {
        margin: 0;
        font-size: 1.1rem;
    }

    .alert-custom {
        border-radius: 10px;
        border: none;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        animation: slideInDown 0.5s ease;
    }

    .features-section {
        margin-top: 3rem;
    }

    .feature-card {
        background: white;
        border-radius: 15px;
        padding: 2rem;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        margin-bottom: 1.5rem;
        border-left: 4px solid #667eea;
        animation: fadeIn 1s ease;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(102, 126, 234, 0.2);
    }

    .feature-icon {
        font-size: 2.5rem;
        color: #667eea;
        margin-bottom: 1rem;
    }

    .feature-title {
        font-size: 1.3rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 0.5rem;
    }

    .feature-description {
        color: #666;
        line-height: 1.6;
    }

    .guest-cta {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 3rem 2rem;
        border-radius: 15px;
        text-align: center;
        margin-top: 2rem;
        animation: pulse 2s infinite;
    }

    .guest-cta h2 {
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .guest-cta p {
        font-size: 1.2rem;
        margin-bottom: 2rem;
    }

    .btn-cta {
        background: white;
        color: #667eea;
        padding: 1rem 2.5rem;
        border-radius: 50px;
        font-weight: 600;
        border: none;
        transition: all 0.3s ease;
        margin: 0 0.5rem;
    }

    .btn-cta:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        color: #667eea;
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes pulse {
        0%, 100% {
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
        }
        50% {
            box-shadow: 0 10px 40px rgba(102, 126, 234, 0.5);
        }
    }
</style>

<!-- Alert Messages -->
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show alert-custom" role="alert">
    <i class="fas fa-check-circle"></i> {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="welcome-section">
    @auth
        <!-- Greeting for logged in users -->
        <div class="greeting-card">
            <h3><i class="fas fa-user-circle"></i> Halo, {{ Auth::user()->name }}!</h3>
           
        </div>
        
        <h1 class="welcome-title">SELAMAT DATANG</h1>
       

        <div class="row features-section">
            <div class="col-md-4">
                
            
                
            </div>
        </div>
    @else
        <!-- Welcome message for guests -->
        <h1 class="welcome-title">SELAMAT DATANG</h1>
        <div class="guest-cta">
            
            <a href="{{ route('register') }}" class="btn btn-cta">
                <i class="fas fa-user-plus"></i> Daftar Sekarang
            </a>
            <a href="{{ route('login') }}" class="btn btn-cta">
                <i class="fas fa-sign-in-alt"></i> Login
            </a>
        </div>


    @endauth
</div>

@endsection