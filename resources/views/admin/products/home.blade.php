@extends('admin.master')

@section('title', 'Productos')
    
@section('breadcrumb')   
<li class="breadcrumb-item">
    <a href="{{ url('/admin/products')}}" class="nav-link">
        <i class="fas fa-boxes"></i>Productos
    </a>
</li>
@endsection


@section('content')

<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fas fa-boxes"></i>Productos</h2>
        </div>

        <div class="inside">
            <div class="botones">
                <a href="{{ url('/admin/products/add')}}" class="btn btn-primary">
                    <i class="fas fa-folder-plus"></i> Agregar producto
                </a>
            </div>

            <table class="table">

            </table>
        </div>
    </div>
</div>

@endsection