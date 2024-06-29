@extends('user.layouts.master')

@section('title', 'Ethio-Furnitures || Contact Us')

@section('content')



<div class="contact-section py-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="font-weight-bold mb-4">Get In Touch</h3>
                <p class="text-muted mb-4">Feel free to contact us using the form below or through our contact information. We are here to answer any questions you may have about our products or services.</p>

                <ul class="list-unstyled mb-4">
                    <li><i class="fas fa-map-marker-alt mr-2"></i>Addis Ababa, Ethiopia</li>
                    <li><i class="fas fa-phone-alt mr-2"></i>+251964532816</li>
                    <li><i class="fas fa-envelope mr-2"></i>ethio-furnitures@gmail.com</li>
                </ul>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" class="form-control" placeholder="Your Email" required>
                    </div>
                    <div class="form-group mb-4">
                        <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .breadcrumbs {
        background: #f8f9fa;
        padding: 30px 0;
    }
    .breadcrumbs h2 {
        font-size: 28px;
        font-weight: 600;
        margin: 0;
    }
    .contact-section {
        padding: 60px 0;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    }
    .contact-section h3 {
        font-size: 24px;
        font-weight: 700;
    }
    .contact-section p {
        font-size: 16px;
    }
    .contact-section .list-unstyled {
        font-size: 16px;
        line-height: 2;
    }
    .contact-section .list-unstyled i {
        color: #007bff;
        margin-right: 10px;
    }
    .contact-section .form-control {
        border-radius: 5px;
        border: 1px solid #ced4da;
        padding: 10px 15px;
        font-size: 16px;
    }
    .contact-section .btn {
        font-size: 18px;
        padding: 10px 20px;
        border-radius: 5px;
    }
</style>

@endsection
