@extends('app')
@section('content')
<section class="contact-section-dark">
    <div class="contact-container">
        <p class="contact-subtitle">— Contact Me</p>
        <h2 class="contact-title">Have a project in mind? Let’s <span class="highlight">build it together.</span></h2>
        <div class="contact-content">
            <!-- Contact Info -->
            <div class="contact-card">
                <div class="contact-row">
                    <div class="icon-circle"><i class='bx bxs-phone'></i></div>
                    <p>+62 895 3614 34824</p>
                </div>
                <div class="contact-row">
                    <div class="icon-circle"><i class='bx bxs-envelope'></i></div>
                    <p>irmalistiya23@gmail.com</p>
                </div>
                <div class="contact-row">
                    <div class="icon-circle"><i class='bx bxs-map'></i></div>
                    <p>Jl. Ciroyom Gg Ikhlas</p>
                </div>
            </div>

            <!-- Form -->
            <div class="form-card">
                <!-- Alert success -->
                @if(session('success'))
                    <div class="alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.send') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn-send">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
