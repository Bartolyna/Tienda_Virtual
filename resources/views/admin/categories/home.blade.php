@extends('admin.master')

@section('title', 'Categorias')
    
@section('breadcrumb')   
<li class="breadcrumb-item">
    <a href="{{ url('/admin/products')}}" class="nav-link">
        <i class="fas fa-folder-open"></i>Categorias
    </a>
</li>
@endsection


@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="panel shadow">
                <div class="header">
                    <h2 class="title"><i class="fas fa-folder-plus"></i> Agregar Categoria</h2>
                </div>
        
                <div class="inside">
                    {!! Form::open(['url' => '/admin/category/add']) !!}

                        <label for="name">Nombre de la categoria:</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-font"></i></span>
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>

                        <label for="module" class="mtop16">Moduló:</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-file-alt"></i></span>
                            {!! Form::select('module', getModuleArray(), 0, ['class' => 'form-select']) !!}
                        </div>

                        <label for="icon" class="mtop16">Ícono:</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-icons"></i></span>
                            {!! Form::text('icon', null, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit('Guardar', ['class' => 'btn btn-success mtop16']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection