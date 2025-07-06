@extends('app')
@section('content')
<section class="about-section-dark">
    <div class="about-container">
        <p class="about-subtitle">— About Me</p>
        <h2 class="about-title">Who is <span class="highlight">Irma Listiya?</span></h2>
        <p class="about-desc">
        I am a Software Engineering student. Active in various development activities in the field of technology. Experienced in attending workshops, training, and direct practice in website creation. I like challenges, and have a high learning spirit.
        </p>
        <!--<div class="about-stats">
            <div><strong>10+</strong><br>Mini Projects</div>
            <div><strong>5+</strong><br>Technologies Learned</div>
            <div><strong>∞</strong><br>Semangat Belajar</div>
        </div>-->
        <a href="{{ asset('storage/irma-cv.pdf') }}" download class="cv-button">
            Download CV <span class="arrow">➜</span>
        </a>
    </div>
</section>
@endsection
