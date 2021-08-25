@extends('layout')
    @section('title', 'Lista Categorías')
    @section('word', 'Listado Categorías')
    @section('content')
    <a href="{{ route('category.form')}}" class="btn btn-primary">Nueva Categoría</a>
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
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list as $categorylist)
                <tr>
                    <td>{{$categorylist->name}}</td>
                    <td>{{$categorylist->description}}</td>
                    <td>
                        <a href="{{ route('category.form', ['id'=>$categorylist->id])}}" class="btn btn-warning">Editar</a>
                        <a href="{{ route('productCategory.delete', ['id'=>$categorylist->id])}}" class="btn btn-danger">Borrar</a>
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
