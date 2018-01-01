@extends('layouts.dashboard')
@section('title') | Edytuj post - $post->title @endsection
@section('content')
    <div class="backend-content">
        <div class="card card-form">
                <h2 class="card-header">Edytuj post</h2>
                {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true]) !!}
    
            <div class="row m-t-10">
                <div class="col-lg-8">
                    <div class="form-group">
                            {!! Form::label('title', 'Tytuł:') !!}
                            {!! Form::text('title', null, array('class' => 'form-control', 'required' => '', )) !!}
              
                            {!! Form::label('subtitle', 'Subtytuł:') !!}
                            {!! Form::text('subtitle', null, array('class' => 'form-control')) !!}
                            
                            {!! Form::label('slug', 'Slug:') !!}
                            {!! Form::text('slug', null, array('class' => 'form-control', 'required' => '', )) !!}
                            
                            {!! Form::label('body', 'Treść:') !!}
                            {!! Form::textarea('body', null, array('class' => 'tinymce m-t-5')) !!}    
                    </div>
                </div>    
                <div class="col-lg-4">
                    <div class="form-group">
                            {!! Form::label('keywords', 'Słowa kluczowe:') !!}
                            {!! Form::text('keywords', null, array('class' => 'form-control')) !!}
            
                            {!! Form::label('meta_content', 'Opis meta:', ['class' => 'label']) !!}
                            {!! Form::textarea('meta_content', null, array('class' => 'textarea form-control', 'rows' => 3)) !!}
                    </div>
                    <div class="form-group">
                        <label for="category">Kategoria</label>
                            {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
                    </div>
                        <div class="form-group">
                            <label for="tags[]">Tagi:</label>
                            {{ Form::select('tags[]', $tags, null, ['class' => 'form-control select-multi', 'multiple']) }}
                        </div>
                        <div class="form-group">
                            <label for="tags">Status:</label>
                            <select name="status" id="status" class="form-control">
                                <option value="draft">Szkic</option>
                                <option value="published">Opublikowano</option>
                                <option value="pending">Oczekuje</option>
                            </select>    
                        </div>
                        <div class="form-group">
                            <label for="post_image">Zdjęcie wyróżniające:</label><br>
                            <input id="post_image" name="post_image" type="file" class="file form-control">
                            {!! Form::label('alt_tag', 'seotag:') !!}
                            {!! Form::text('alt_tag', null, array('class' => 'form-control')) !!}
                        </div>  
                        {!! Form::submit('Zapisz', array('class' => 'btn btn-lg btn-success m-t-10', 'style' => 'width:100%')) !!}
                        {!! Form::close() !!} 
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
        height: '327'
    });          
</script>
<script src="/js/select2.min.js"></script>
<script type="text/javascript">
  $('.select2-multi').select2();
</script>
@endpush