@extends('user.layouts.master')

@section('title', 'Ethio-Furnitures || About Us')

@section('content')
<div class="breadcrumbs py-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="font-weight-bold">About Us</h2>
            </div>
        </div>
    </div>
</div>

<div class="about-section py-5">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="https://images.pexels.com/photos/276583/pexels-photo-276583.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="img-fluid rounded" alt="About Us">
            </div>
            <div class="col-md-6">
                <h3 class="font-weight-bold">Our Mission</h3>
                <p>Our mission is to provide high-quality furniture products that meet the diverse needs of our customers. We strive for excellence in design, craftsmanship, and customer service.</p>
            </div>
        </div>

        <div class="row align-items-center mt-5">
            <div class="col-md-6 mb-4 mb-md-0">
                <h3 class="font-weight-bold">Our Values</h3>
                <ul class="list-unstyled">
                    <li><strong>Quality:</strong> We ensure the highest standards in our products.</li>
                    <li><strong>Customer Satisfaction:</strong> We prioritize customer needs and satisfaction.</li>
                    <li><strong>Innovation:</strong> We continuously innovate to stay ahead in the furniture industry.</li>
                    <li><strong>Community:</strong> We support and engage with our local community.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3 class="font-weight-bold">Why Choose Us?</h3>
                <p>We are committed to delivering furniture solutions that blend style, comfort, and functionality. Whether you are furnishing your home, office, or commercial space, we have the right products for you.</p>
            </div>
        </div>
    </div>
</div>
@endsection