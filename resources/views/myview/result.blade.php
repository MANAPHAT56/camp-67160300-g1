@extends('template.default')

@section('title', 'Workshop Result')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-8"> <div class="card border-0 shadow-lg overflow-hidden mb-5">
                <div class="card-body text-center py-5" style="background: linear-gradient(135deg, #4e54c8 0%, #8f94fb 100%);">
                    <div class="mb-4">
                        <i class="bi bi-check-circle-fill text-white" style="font-size: 5rem; filter: drop-shadow(0 4px 8px rgba(0,0,0,0.2));"></i>
                    </div>
                    <h1 class="display-4 text-white fw-bold mb-2">Registration Complete!</h1>
                    <p class="lead text-white-50 fs-4">Thank you for joining our workshop. Here is your summary.</p>
                </div>
            </div>

            <div class="card border-0 shadow-sm p-4 p-md-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bold border-bottom d-inline-block pb-2">Participant Details</h2>
                </div>

                <div class="row justify-content-center g-5">
                    @if(isset($photo))
                    <div class="col-12 text-center mb-2">
                        <div class="position-relative d-inline-block">
                            <img src="{{ asset('storage/'.$photo) }}"
                                 class="img-thumbnail rounded-circle shadow-sm"
                                 style="width: 220px; height: 220px; object-fit: cover; border: 8px solid #f8f9fa;"
                                 alt="Profile">
                        </div>
                    </div>
                    @endif

                    <div class="col-md-10">
                        <div class="row g-4 text-center">
                            <div class="col-md-6">
                                <p class="text-uppercase text-muted fw-semibold small mb-1 ls-1">Full Name</p>
                                <p class="fs-3 fw-bold text-dark">{{ $fname }} {{ $lname }}</p>
                            </div>

                            <div class="col-md-6">
                                <p class="text-uppercase text-muted fw-semibold small mb-1 ls-1">Date of Birth</p>
                                <p class="fs-3 fw-bold text-dark">{{ \Carbon\Carbon::parse($birthdate)->format('d M Y') }}</p>
                            </div>

                            <div class="col-md-6">
                                <p class="text-uppercase text-muted fw-semibold small mb-1 ls-1">Personal Info</p>
                                <p class="fs-3 fw-bold text-dark">{{ $age }} Years • {{ ucfirst($gender) }}</p>
                            </div>

                            <div class="col-md-6">
                                <p class="text-uppercase text-muted fw-semibold small mb-1 ls-1">Music Preference</p>
                                <span class="badge rounded-pill bg-soft-success text-success fs-5 px-4 py-2" style="background-color: #e8f5e9; border: 1px solid #c8e6c9;">
                                    {{ ucfirst($music) }}
                                </span>
                            </div>

                            <div class="col-12 mt-5">
                                <p class="text-uppercase text-muted fw-semibold small mb-1 ls-1">Theme Color</p>
                                <div class="d-flex justify-content-center align-items-center gap-3">
                                    <div class="rounded-circle shadow-sm" style="background: {{ $color }}; width: 40px; height: 40px; border: 3px solid white; outline: 2px solid {{ $color }};"></div>
                                    <span class="fs-3 fw-bold text-dark text-uppercase">{{ $color }}</span>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <div class="p-4 rounded-4 bg-light">
                                    <p class="text-uppercase text-muted fw-semibold small mb-2 ls-1 text-center">Mailing Address</p>
                                    <p class="fs-4 mb-0 text-secondary text-center leading-relaxed">{{ $address }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-5 pt-4 border-top">
                    <button onclick="window.print()" class="btn btn-primary btn-lg px-5 py-3 rounded-pill shadow-sm">
                        <i class="bi bi-printer me-2"></i> Print Summary
                    </button>
                    <a href="/" class="btn btn-link btn-lg text-decoration-none text-muted ms-3">Return Home</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body { background-color: #f4f7f6; font-family: 'Inter', sans-serif; }
    .ls-1 { letter-spacing: 1px; }
    .leading-relaxed { line-height: 1.6; }

    @media print {
        .btn, a, .border-top { display: none !important; }
        .card { box-shadow: none !important; border: none !important; }
        body { background-color: white; }
    }
</style>
@endsection
