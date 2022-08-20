<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Crud - Read</title>
    <link rel="stylesheet" href="{{ url('assets/css/styles.css') }}">
</head>
<body>
    <main>
        <header>
            <h1>SIMPLE CRUD</h1>
        </header>
        <section>
            <form>
                <div class="form-title">
                    <h2>Read Product</h2>
                </div>
                <div class="form-group">
                    <label class="form-label" for="product">Product: </label>
                    <input class="form-input" type="text" name="product" id="product" value="{{ $product->product }}" disabled>
                </div>
                <div class="form-group">
                    <label class="form-label" for="price">Price:</label>
                    <input class="form-input" type="text" name="price" id="price" value="U$ {{ $product->price }}" disabled>
                </div>
                <div class="form-controls">
                    <a class="btn button-cancel" href="{{route('index')}}">Cancel</a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>