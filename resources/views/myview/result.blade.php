@extends('template.default')

@section('title', 'Workshop Result')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-11 col-xl-9">
            <!-- Header Card -->
            <div class="card border-0 shadow-sm mb-4 overflow-hidden">
                <div class="position-relative" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 3rem 2rem;">
                    <div class="position-absolute top-0 end-0 opacity-10">
                        <i class="bi bi-check-circle" style="font-size: 12rem;"></i>
                    </div>
                    <div class="position-relative">
                        <span class="badge bg-white bg-opacity-25 text-white px-3 py-2 mb-3">
                            <i class="bi bi-check-circle-fill me-2"></i>Confirmed
                        </span>
                        <h1 class="display-5 text-white fw-bold mb-2">Registration Successful</h1>
                        <p class="text-white text-opacity-75 mb-0 fs-5">Your workshop registration has been confirmed</p>
                    </div>
                </div>
            </div>

            <!-- Main Content Card -->
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4 p-md-5">

                    <!-- Profile Section -->
                    @if(isset($photo))
                    <div class="text-center mb-5">
                        <div class="position-relative d-inline-block">
                            <img src="{{ asset('storage/'.$photo) }}"
                                 class="rounded-3 shadow"
                                 style="width: 180px; height: 180px; object-fit: cover; border: 4px solid #f8f9fa;"
                                 alt="Profile">
                            <div class="position-absolute bottom-0 end-0 bg-success rounded-circle p-2 shadow-sm" style="border: 3px solid white;">
                                <i class="bi bi-check-lg text-white"></i>
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Information Grid -->
                    <div class="row g-4 mb-5">
                        <!-- Full Name -->
                        <div class="col-md-6">
                            <div class="info-card p-4 rounded-3 h-100" style="background: #f8f9fa; border-left: 4px solid #667eea;">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-person-fill text-primary me-2 fs-5"></i>
                                    <span class="text-muted text-uppercase small fw-semibold" style="letter-spacing: 0.5px;">Full Name</span>
                                </div>
                                <p class="fs-4 fw-bold text-dark mb-0">{{ $fname }} {{ $lname }}</p>
                            </div>
                        </div>

                        <!-- Date of Birth -->
                        <div class="col-md-6">
                            <div class="info-card p-4 rounded-3 h-100" style="background: #f8f9fa; border-left: 4px solid #f093fb;">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-calendar-event text-primary me-2 fs-5"></i>
                                    <span class="text-muted text-uppercase small fw-semibold" style="letter-spacing: 0.5px;">Date of Birth</span>
                                </div>
                                <p class="fs-4 fw-bold text-dark mb-0">{{ \Carbon\Carbon::parse($birthdate)->format('d M Y') }}</p>
                            </div>
                        </div>

                        <!-- Personal Info -->
                        <div class="col-md-6">
                            <div class="info-card p-4 rounded-3 h-100" style="background: #f8f9fa; border-left: 4px solid #4facfe;">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-info-circle-fill text-primary me-2 fs-5"></i>
                                    <span class="text-muted text-uppercase small fw-semibold" style="letter-spacing: 0.5px;">Personal Info</span>
                                </div>
                                <p class="fs-4 fw-bold text-dark mb-0">{{ $age }} Years • {{ ucfirst($gender) }}</p>
                            </div>
                        </div>

                        <!-- Music Preference -->
                        <div class="col-md-6">
                            <div class="info-card p-4 rounded-3 h-100" style="background: #f8f9fa; border-left: 4px solid #43e97b;">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-music-note-beamed text-primary me-2 fs-5"></i>
                                    <span class="text-muted text-uppercase small fw-semibold" style="letter-spacing: 0.5px;">Music Preference</span>
                                </div>
                                <span class="badge bg-success bg-opacity-10 text-success fs-5 px-3 py-2 border border-success border-opacity-25">
                                    {{ ucfirst($music) }}
                                </span>
                            </div>
                        </div>

                        <!-- Theme Color -->
                        <div class="col-12">
                            <div class="info-card p-4 rounded-3" style="background: #f8f9fa; border-left: 4px solid #fa709a;">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-palette-fill text-primary me-2 fs-5"></i>
                                    <span class="text-muted text-uppercase small fw-semibold" style="letter-spacing: 0.5px;">Theme Color</span>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="rounded-3 shadow-sm position-relative" style="background: {{ $color }}; width: 60px; height: 60px; border: 4px solid white; box-shadow: 0 4px 12px rgba(0,0,0,0.1) !important;">
                                        <div class="position-absolute top-50 start-50 translate-middle">
                                            <i class="bi bi-droplet-fill text-white opacity-25 fs-3"></i>
                                        </div>
                                    </div>
                                    <span class="fs-3 fw-bold text-dark text-uppercase font-monospace">{{ $color }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="col-12">
                            <div class="info-card p-4 rounded-3" style="background: #f8f9fa; border-left: 4px solid #feca57;">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-geo-alt-fill text-primary me-2 fs-5"></i>
                                    <span class="text-muted text-uppercase small fw-semibold" style="letter-spacing: 0.5px;">Mailing Address</span>
                                </div>
                                <p class="fs-5 mb-0 text-secondary" style="line-height: 1.7;">{{ $address }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="text-center pt-4 border-top">
                        <button onclick="window.print()" class="btn btn-primary btn-lg px-5 py-3 rounded-pill shadow-sm me-2 mb-2">
                            <i class="bi bi-printer-fill me-2"></i>Print Summary
                        </button>
                        <a href="/" class="btn btn-outline-secondary btn-lg px-5 py-3 rounded-pill mb-2">
                            <i class="bi bi-house-door-fill me-2"></i>Return Home
                        </a>
                    </div>
                </div>
            </div>

            <!-- Footer Note -->
            <div class="text-center mt-4">
                <p class="text-muted small mb-0">
                    <i class="bi bi-shield-check me-1"></i>
                    Your information is securely stored and protected
                </p>
            </div>
        </div>
    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

    body {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        font-family: 'Inter', sans-serif;
        min-height: 100vh;
    }

    .info-card {
        transition: all 0.3s ease;
    }

    .info-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }

    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
    }

    .btn-outline-secondary {
        border: 2px solid #dee2e6;
        transition: all 0.3s ease;
    }

    .btn-outline-secondary:hover {
        background: #f8f9fa;
        border-color: #adb5bd;
        transform: translateY(-2px);
    }

    @media print {
        body {
            background: white !important;
        }
        .btn, a, .border-top, .shadow, .shadow-sm {
            display: none !important;
            box-shadow: none !important;
        }
        .card {
            box-shadow: none !important;
            border: 1px solid #dee2e6 !important;
        }
        .info-card {
            border: 1px solid #e9ecef !important;
            break-inside: avoid;
        }
    }

    @media (max-width: 768px) {
        .display-5 {
            font-size: 2rem;
        }
    }
</style>
@endsection
