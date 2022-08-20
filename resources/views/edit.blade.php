<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Crud - Update</title>
    <link rel="stylesheet" href="{{ url('assets/css/styles.css') }}">
</head>
<body>
    <main>
        <header>
            <h1>SIMPLE CRUD</h1>
        </header>
        <section>
            <form action="{{route('update',$product->id)}}" method="POST">
                {{ @csrf_field() }}
                @if($errors->any())
                <div class="message message-danger">
                    <ul>
                    @foreach( $errors->all() as $error )
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                    <a id="closeMessage" href="javascript:void(0);" class="close"></a>
                </div>
                @endif
                <div class="form-title">
                    <h2>Update Product</h2>
                </div>
                <div class="form-group">
                    <label class="form-label" for="product">Product:</label>
                    <input class="form-input" type="text" name="product" id="product" value="{{ $product->product }}" maxlength="50">
                </div>
                <div class="form-group">
                    <label class="form-label" for="price">Price:</label>
                    <input class="form-input" type="text" name="price" id="price" value="{{ $product->price }}" maxlength="5">
                </div>
                <div class="form-controls">
                    <button class="btn button-confirm" type="submit">Confirm</button>
                    <a class="btn button-cancel" href="{{route('index')}}">Cancel</a>
                </div>
            </form>
        </section>
    </main>
</body>
    <script src="{{url('assets/js/scripts.js')}}"></script>
</html>