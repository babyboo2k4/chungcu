<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Apartment</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Add New Apartment</h1>
    <form action="{{ route('apartments.index') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Apartment Name</label>
            <input type="text" class="form-control" id="name" name="name" required minlength="10" maxlength="50">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="price_per_sqm">Price per sqm</label>
            <input type="number" class="form-control" id="price_per_sqm" name="price_per_sqm" required step="0.01">
        </div>
        <div class="form-group">
            <label for="info">Info</label>
            <input type="text" class="form-control" id="info" name="info" required>
        </div>
        <div class="form-group">
            <label for="details">Details</label>
            <input type="text" class="form-control" id="details" name="details" required>
        </div>
        <div class="form-group">
            <label for="image_url">Image URL</label>
            <input type="url" class="form-control" id="image_url" name="image_url" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="1">Available</option>
                <option value="2">Sold</option>
                <option value="3">Pending</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
</body>
</html>

