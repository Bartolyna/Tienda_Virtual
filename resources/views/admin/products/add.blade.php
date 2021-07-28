@extends('admin.master')

@section('title', 'Productos')
    
@section('breadcrumb')   
<li class="breadcrumb-item">
    <a href="{{ url('/admin/products')}}" class="nav-link">
        <i class="fas fa-boxes"></i>Agregar Producto
    </a>
</li>
<li class="breadcrumb-item">
    <a href="{{ url('/admin/products/add')}}" class="nav-link">
        <i class="fas fa-folder-plus"></i> Agregar producto
    </a>
</li>
@endsection


@section('content')

<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fas fa-folder-plus"></i> Agregar producto
        </div>

        <div class="inside">
           {!! Form::open(['url' => '/admin/products/add']) !!}

            <div class="row">

                <div class="col-md-5">
                    <label for="name">Nombre del producto:</label>
                    <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-font"></i></span>
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="name">Categorìa:</label>
                </div>

                <div class="col-md-5">
                    <label for="name">Imagen destacada:</label>
                    <div class="custom-file">
                    {!! Form::file('img',  ['class' => 'form-control', 'id' => 'inputGroupFile02']) !!}                  
                    </div>
                </div>

            </div>

            <div class="row mtop16">
                
                <div class="col-md-3">                   
                    <label for="price">Precio:</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-dollar-sign"></i></span>
                        {!! Form::number('price', null, ['class' => 'form-control', 'min' => '0.00',
                        'step' => 'any']) !!}
                    </div>  
                </div>

                <div class="col-md-3">                   
                    <label for="indiscount">¿En Descuento?:</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-search-dollar"></i></span>
                        {!! Form::select('indiscount', ['0' => 'No', '1' => 'Si'], 0, ['class' => 'form-select']) !!}
                    </div>  
                </div>

                <div class="col-md-3">                   
                    <label for="discount">Descuento:</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-hand-holding-usd"></i></span>
                        {!! Form::number('discount', 0.00, ['class' => 'form-control', 'min' => '0.00',
                        'step' => 'any']) !!}
                    </div>  
                </div>

            </div>

            <div class="row mtop16">
                <div class="col-md-12">
                    <label for="content" >Descripcion</label>
                    {!! Form::textarea('content', null, ['class' => 'form-control', 'id' => 'editor']) !!}
                </div>
            </div>

            <div class="row mtop16">
                <div class="col-md-12">
                   {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                </div>
            </div>

           {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection