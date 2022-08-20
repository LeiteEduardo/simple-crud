<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Crud - Index</title>
    <link rel="stylesheet" href="{{ url('assets/css/styles.css') }}">
</head>
<body>
    <main>
        <header>
            <h1>SIMPLE CRUD</h1>
        </header>
        <section>
            @if( session('message') )
                <div class="message message-success">
                    {{session('message')}}
                    <a id="closeMessage" href="javascript:void(0);" class="close"></a>
                </div>
            @endif
            @if($errors->any())
            <div class="message message-danger">
                @foreach( $errors->all() as $error )
                    {{ $error }}
                    <a id="closeMessage" href="javascript:void(0);" class="close"></a>
                @endforeach
            </div>
            @endif
            <div class="index-title">
                <h2>Products</h2>
            </div>
            <div class="product-header">
                <a class="btn button-create" href="{{url('/create')}}">Create</a>
                <span><b>Total of product:</b> {{ $products->total() }}</span>
            </div>
            <div class="main">
                <table>
                    <thead>
                        <tr>
                            <th style="width: 10%">ID:</th>
                            <th style="width: 35%">Product:</th>
                            <th style="width: 20%">Price:</th>
                            <th style="width: 35%">Actions:</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $products as $product )
                            <tr>
                                <td class="no-wrap">{{$product->id}}</td>
                                <td class="no-wrap">{{$product->product}}</td>
                                <td class="no-wrap">U$ {{$product->price}}</td>
                                <td class="action-table no-wrap">
                                    <a class="btn button-read" href="{{route('show',$product->id)}}">Read</a>
                                    <a class="btn button-update" href="{{route('edit',$product->id)}}">Update</a>
                                    <a class="btn button-cancel" href="{{route('destroy',$product->id)}}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="table-controls">
                    @if ( $products->onFirstPage() )
                    <a class="link disabled" href="javascript:void(0);" >< Previous</a>   
                    @else
                    <a class="link" href="{{ $products->previousPageUrl() }}" >< Previous</a>   
                    @endif


                    
                    @if ( $products->hasMorePages() )
                    <a class="link" href="{{ $products->nextPageUrl() }}" >Next ></a>                
                    @else
                    <a class="link disabled" href="javascript:void(0);" disabled>Next ></a>                
                    @endif
                </div>
            </div>
        </section>
    </main>
</body>
    <script src="{{url('assets/js/scripts.js')}}"></script>
</html>