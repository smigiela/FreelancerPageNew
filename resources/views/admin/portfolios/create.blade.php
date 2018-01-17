@extends('layouts.dashboard')
@section('title') | Portfolio - dodawanie @endsection
@section('content')
    <div class="backend-content">
            <div class="row header">
                    <div class="col-lg-6">
                        <h2>Dodaj portfolio</h2>
                    </div>
                </div>
                <hr>
        <div class="card card-form">
                {!! Form::open(array('route' => 'portfolios.store', 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/form-data')) !!}
                {!! csrf_field() !!}
            <div class="row m-t-10">
                <div class="col-lg-8">
                    <div class="form-group">
                        {!! Form::label('title', 'Tytuł') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}

                        {!! Form::label('link', 'Link') !!}
                        {!! Form::text('link', null, ['class' => 'form-control']) !!}

                        {!! Form::label('slug') !!}
                        {!! Form::text('slug', null, ['class' => 'form-control']) !!}

                        {!! Form::label('body', 'Treść') !!}
                        {!! Form::textarea('body', null, ['class' => 'tinymce m-t-5']) !!}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        {!! Form::label('keywords', 'Słowa kluczowe') !!}
                        {!! Form::text('keywords', null, ['class' => 'form-control']) !!}
                        {!! Form::label('meta_content', 'Opis meta') !!}
                        {!! Form::textarea('meta_content', null, ['class' => 'textarea form-control', 'rows' => 3]) !!}
                    </div>
                    <div class="form-group">
                        <label for="image">Zdjęcie wyróżniające:</label><br>
                        {!! Form::file('image', ['class' => 'form-control file']) !!}
                        {!! Form::label('alt_tag', 'seotag:') !!}
                        {!! Form::text('alt_tag', null, array('class' => 'form-control')) !!}
                    </div> 
                    {!! Form::close() !!} 
                    {!! Form::submit('Dodaj', ['class' => 'btn btn-lg btn-success']) !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    tinymce.init({
        selector: 'textarea.tinymce', 
        plugins: 'image imagetools code link',
        height: '231'
    });
          
</script>
@endpush