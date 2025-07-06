@extends('app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<section class="projects-section-dark">
    <div class="projects-container">
        <p class="projects-subtitle">— Projects</p>
        <h2 class="projects-title">My Latest <span class="highlight">Projects</span></h2>

        <div class="projects-grid">
            <!-- Project 1 -->
            <div class="projects-card">
                <a class="link-web" href="https://samsung-phi.vercel.app/" target="_blank" rel="noopener noreferrer"> <img src="{{ asset('storage/projects1.jpg') }}" alt="Project 1" class="project-image">
                    <div class="project-info">
                        <div class="project-tags">
                            <span class="tag">Product Design</span>
                            <span class="tag">Landing Page</span>
                            <span class="tag">UI/UX</span>
                        </div>
                        <h3 class="project-title">Digital Product: E-commerce Mobile App</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
