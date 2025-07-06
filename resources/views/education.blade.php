@extends('app')
@section('content')
<section class="edu-section-dark">
    <div class="edu-container">
        <p class="edu-subtitle">— Education and Training</p>
        <h2 class="edu-title">
            My <span class="highlight">Educational</span> and <span class="highlight">Training</span> Journey
        </h2>

        <section class="resume-section">
            <!-- Education Card -->
            <div class="resume-card">
                <div class="resume-header">
                    <div class="icon-circle">
                        <i class='bx bxs-graduation'></i>
                    </div>
                    <h3>Education</h3>
                </div>
                <div class="resume-item">
                    <span class="year">2023 - 2026</span>
                    <h4>SMKN 11 Bandung</h4>
                    <p>Software Engineering</p>
                </div>
            </div>

            <!-- Training Card -->
            <div class="resume-card">
                <div class="resume-header">
                    <div class="icon-circle">
                        <i class='bx bxs-briefcase'></i>
                    </div>
                    <h3>Training</h3>
                </div>

                <div class="resume-item">
                    <span class="year">2025</span>
                    <h4>Dicoding: Full-Stack Developer</h4>
                    <p>Taught how to build web applications using JavaScript, covering Front-End development, data handling through RESTful API, and Back-End fundamentals.</p>
                </div>

                <div class="resume-item">
                    <span class="year">2024</span>
                    <h4>RevoU: Data Analytics</h4>
                    <p>Training focused on data analysis, with a primary emphasis on SQL for managing and analyzing data.</p>
                </div>

                <div class="resume-item">
                    <span class="year">2024</span>
                    <h4>ASEAN Foundation: Data Science</h4>
                    <p>Learned the basics of data science, from data analysis and visualization to applying data for real-world solutions.</p>
                </div>

                <div class="resume-item">
                    <span class="year">2024</span>
                    <h4>EDUCOURSE: Virtual Reality</h4>
                    <p>Created virtual worlds, used VR cameras, added interaction, and ran games using Oculus Quest.</p>
                </div>

                <div class="resume-item">
                    <span class="year">2023 – 2024</span>
                    <h4>SIDNET: Educational Videos</h4>
                    <p>Produced educational videos about coding in HTML, CSS, Python, and Django programming languages.</p>
                </div>

                <div class="resume-item">
                    <span class="year">2023</span>
                    <h4>AWS: Girl’s Tech Day</h4>
                    <p>Learned Machine Learning and block-based coding for controlling a forklift robot.</p>
                </div>
            </div>
        </section>
    </div>
</section>
@endsection
