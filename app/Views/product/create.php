<!-- En la vista create.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/products">Home</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="/product/create">Create</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <br>

    <div class="container">
        <?= form_open('product/store'); ?>
        
        <label for="name" class="form-label">Name:</label>
        <input type="text" name="name" class="form-control" required><br>

        <label for="quantity" class="form-label">Quantity:</label>
        <input type="number" name="quantity" class="form-control" required><br>

        <button type="submit" class="btn btn-primary">Send</button>

        <?= form_close(); ?>
    </div>
</body>
</html>