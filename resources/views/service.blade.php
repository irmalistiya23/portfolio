@extends('app')
@section('content')
<section class="service-section-dark">
    <div class="service-container">
        <p class="service-subtitle">— Service</p>
        <h2 class="service-title"><span class="highlight">Education</span> I Provide</h2>

        <div class="service-grid">
            <!-- Web Design -->
            <div class="service-card">
                <div class="icon">
                    <i class='bx bx-layout'></i>
                </div>
                <h3>Web Design</h3>
                <div class="service-desc">
                    <p>I can help you design an attractive and functional website that suits your needs.</p>
                </div>
            </div>

            <!-- Web Development -->
            <div class="service-card">
                <div class="icon">
                    <i class='bx bx-code-alt'></i>
                </div>
                <h3>Web Development</h3>
                <div class="service-desc">
                    <p>I can build a complete website, from front-end to back-end, equipped with features and database integration.</p>
                </div>
            </div>

            <!-- App Design -->
            <div class="service-card">
                <div class="icon">
                    <i class='bx bx-mobile-alt'></i>
                </div>
                <h3>App Design</h3>
                <div class="service-desc">
                    <p>I can design mobile applications with a simple, intuitive, and aesthetic interface.</p>
                </div>
            </div>

            <!-- UI/UX -->
            <div class="service-card">
                <div class="icon">
                    <i class='bx bx-pencil'></i>
                </div>
                <h3>UI/UX</h3>
                <div class="service-desc">
                    <p>I can create user interface and user experience designs that are consistent, effective, and support your product’s visual identity.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
