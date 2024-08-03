<!-- resources/views/apartments/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartment Listings</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Apartment Listings</h1>
    <a href="{{ route('apartments.create') }}" class="btn btn-primary mb-4">Add New Apartment</a>
    <div class="row">
        @foreach($apartments as $apartment)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $apartment->image_url }}" class="card-img-top" alt="Apartment Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $apartment->name }}</h5>
                        <p class="card-text">{{ $apartment->address }}</p>
                        <p class="card-text">Price: {{ $apartment->price_per_sqm }} triệu/m2</p>
                        <p class="card-text">{{ $apartment->info }}</p>
                        <p class="card-text">{{ $apartment->details }}</p>
                        <p class="card-text">Status: {{ $apartment->status }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $apartments->links() }}
</div>
</body>
</html>

