@extends('layouts.app')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Currículo - {{ $resume->name }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.resumes.index') }}">Currículo</a></li>
                    <li class="breadcrumb-item active">{{ $resume->name }}</li>
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
                        @include('admin.resumes.show_fields')
                        <a href="{{ route('admin.resumes.index') }}" class="btn btn-default">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
