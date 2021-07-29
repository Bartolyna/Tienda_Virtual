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

        <div class="col-md-8">
            <div class="panel shadow">
                <div class="header">
                    <h2 class="title"><i class="fas fa-folder-open"></i>Categorias</h2>
                </div>
        
                <div class="inside">

                    <nav class="nav nav-pills nav-fill">
                        @foreach (getModuleArray() as $m => $i)
                            <a href="{{ url('/admin/categories/'.$m)}}" class="nav-link"><i class="fas fa-list"></i>{{$i}}</a>
                        @endforeach
                    </nav>

                <table class="table mtop16">
                    
                    <thead>
                        <tr>  
                            <td width="15"></td>                       
                            <td>Nombre</td>
                            <td>Editar/Eliminar</td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($cats as $cat)
                        <tr>
                            <td>{!! htmlspecialchars_decode($cat->icon) !!}</td>
                            <td>{{$cat->name}}</td>
                            <td>
                                <div class="opts" >
                                    <a href="{{ url('/admin/category/'.$cat->id.'/edit')}}" data.toggle="tooltip" data-bs-placement="top" title="Editar">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a href="{{ url('/admin/category/'.$cat->id.'/delete')}}" data.toggle="tooltip" data-bs-placement="top" title="Eliminar">
                                        <i class="fas fa-minus-square"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody> 
                </table> 

                </div>
            </div>
        </div>
    </div>
</div>

@endsection