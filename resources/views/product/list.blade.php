    @extends('layout')
    @section('title', 'Lista Productos')
    @section('word', 'Listado productos')
    @section('content')
    <a href="{{ route('product.form')}}" class="btn btn-primary">Nuevo producto</a>
    <a href="{{ route('welcome.hi')}}" class="btn btn-secondary">Volver</a>
    @if(Session::has('message'))
    <p class="text-danger">{{ Session::get('message') }}</p>
@endif

@if(Session::has('succesMessage'))
    <p class="text-success">{{ Session::get('succesMessage') }}</p>
@endif

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Cost</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Brand</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->cost}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->brand->name}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>
                        <a href="{{ route('product.form', ['id'=>$product->id])}}" class="btn btn-warning">Editar</a>
                        <a href="{{ route('product.delete', ['id'=>$product->id])}}" class="btn btn-danger">Borrar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection

    @push('name')

    @endpush

    @prepend('name')

    @endprepend
