<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stunning Product Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-color: #f2f2f2;
        }
        .card {
            border: none;
        }
        .card-img-top {
            border-radius: 1rem;
            width: 100%;
            height: 450px;
            object-fit: cover; /* Keeps image aspect ratio */
        }
        .shadow-sm {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="/" class="btn btn-outline-primary mt-4"><i class="fas fa-arrow-left"></i> Back</a>

        <div class="row mt-4">
            <div class="col-md-6 mb-4">
                <div class="card">
                <img class="card-img-top rounded-lg"
          src="{{ $product->image ? asset('storage/' . $product->image) : asset('/images/no-image.png') }}"
          alt="{{ $product->title }}" />
                </div>
            </div>

            <div class="col-md-6">
                <div class="card p-4 shadow-sm rounded-lg bg-white">
                    <h3 class="card-title text-dark font-weight-bold mb-3">{{ $product->name }}</h3>

                    <div class="h5 mb-4">
                        Price: $<span id="price">{{ $product->price }}</span>
                    </div>

                    <hr class="border border-secondary mb-4">

                    <div>
                        <h3 class="text-dark font-weight-bold mb-3">Description</h3>
                        <p class="text-muted" id="description">{{ $product->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>