<div class="row">
    <div class="form-group col-12 col-sm-12">
        {!! Form::label('created_at', 'Currículo enviado em:') !!}
        <span>{{ ucfirst($resume->created_at->formatLocalized('%A, %d de %B de %Y às %Hh%M')) }}</span>

    </div>

    <div class="form-group col-12 col-sm-4">
        {!! Form::label('name', 'Nome:') !!}
        <p>{{ $resume->name }}</p>
    </div>

    <div class="form-group col-12 col-sm-4">
        {!! Form::label('email', 'E-mail:') !!}
        <p>{{ $resume->email }}</p>
    </div>

    <div class="form-group col-12 col-sm-4">
        {!! Form::label('phone', 'Telefone:') !!}
        <p>{{ $resume->phone }}</p>
    </div>

    <div class="form-group col-12 col-sm-4">
        {!! Form::label('url_cv', 'Currículo:') !!}
        <p><a href="{{ $resume->url_cv }}" target="_blank">{{ $resume->url_cv }}</a></p>
    </div>

    <div class="form-group col-12 col-sm-12">
        {!! Form::label('observations', 'Observações:') !!}
        <p class="text-justify">{{ $resume->observations }}</p>
    </div>
</div>
