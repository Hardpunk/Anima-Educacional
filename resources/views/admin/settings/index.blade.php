@extends('layouts.app')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Configurações</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Configurações</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('flash::message')
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('admin.settings.show_fields')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
