@extends('layouts.dashboard')
@section('title') | Dashboard @endsection
@section('content')
    <div class="backend-content">
            <div class="jumbotron" style="background-color:#17a2b8; color:white;">
                    <h1 class="display-4">Witaj w systemie ITS CMS</h1>
                    <p class="lead">System ten pozwoli Ci zarządzać treścią całej strony www. Możesz dodawać nowe posty, portfolia, zarządzać ustawieniami witryny, zarządzać użytkownikami.</p>
                    <hr class="my-4">
                    <p>Jeśli brakuje Ci jakiejś funkcjonalności - w zakładce 'pomoc' znajdziesz formularz kontaktowy.</p>
                  </div>
        <div class="row">
            <div class="col-lg-2"><div class="card card-statistic">
                <i class="fa fa-user fa-4x" aria-hidden="true"></i>
                {{$users->count()}} Użytkowników
            </div>
            </div>
            <div class="col-lg-2"><div class="card card-statistic">
                <i class="fa fa-comment fa-4x" aria-hidden="true"></i>
                {{$comments->count()}} Komentarzy
            </div>
            </div>
            <div class="col-lg-2"><div class="card card-statistic">
                <i class="fa fa-tags fa-4x" aria-hidden="true"></i> 
                {{$tags->count()}} Tagów
            </div>
            </div>
            <div class="col-lg-2"><div class="card card-statistic">
                <i class="fa fa-th-list fa-4x" aria-hidden="true">
                </i> 
                {{$categories->count()}} Kategorii
                </div>
            </div>
            <div class="col-lg-2"><div class="card card-statistic">
                <i class="fa fa-file-text fa-4x" aria-hidden="true"></i> 
                {{$posts->count()}} Postów
            </div>
            </div>
            <div class="col-lg-2"><div class="card card-statistic">
                <i class="fa fa-laptop fa-4x" aria-hidden="true"></i>
                {{$portfolios->count()}} Portfolio
            </div>
            </div>
        </div>
        <div class="row m-t-30">
            <div class="col-lg-4">
                    <div class="card card-form">
                        <h4 class="card-header">Dodaj kategorię:</h4>
                            <div class="form-group input-group-sm">
                                {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
                                    {!! Form::label('name', 'Nazwa:') !!}
                                    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
                                    {!! Form::label('description', 'Opis', ['class' => ' m-t-10']) !!}
                                    {!! Form::textarea('description', null, ['class' => 'textarea form-control', 'rows' => '3']) !!}
                                    {!! Form::submit('Dodaj', ['class' => 'btn btn-success m-t-5']) !!}
                                {!! Form::close() !!}
                            </div>
                    </div>
                    <hr>
                    <div class="card card-form">
                            <h4 class="card-header">Dodaj tag:</h4>
                                <div class="form-group input-group-sm">
                                    {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
                                        {!! Form::label('name', 'Nazwa:') !!}
                                        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
                                        {!! Form::submit('Dodaj', ['class' => 'btn btn-success m-t-5']) !!}
                                    {!! Form::close() !!}
                                </div>
                        </div>
            </div>
            <div class="col-lg-8">
                    <div class="card card-form">
                        <h4 class="card-header">Dodaj szkic posta:</h4>
                        <div class="row">
                            <div class="col-lg-8">
                            <div class="form-group input-group-sm">
                            {!! Form::open(array('route' => 'posts.store', 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/form-data')) !!}
                                {!! Form::label('title', 'Tytuł:') !!}
                                {!! Form::text('title', null, array('class' => 'form-control', 'required' => '', )) !!}
                                {!! Form::label('slug', 'Slug:') !!}
                                {!! Form::text('slug', null, array('class' => 'form-control', 'required' => '', )) !!}
                                {!! Form::label('body', 'Treść:') !!}
                                {!! Form::textarea('body', null, array('class' => 'tinymce m-t-5')) !!}                     
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="category">Kategoria</label>
                                <select name="category_id" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach                        
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="tags[]">Tagi:</label>
                                    <select name="tags[]" multiple="multiple" id="tags" class="form-control select-multi"> 
                                            @foreach ($tags as $tag)
                                              <option value="{{$tag->id}}">{{$tag->name}}</option>
                                            @endforeach                  
                                    </select>  
                                </div>
                                <input id="post_image" name="post_image" type="file" class="file">
                                <button class="btn btn-lg btn-block btn-success m-t-15">Dodaj</button>
                        </div>
                        </div>
                    </div>
            </div>            
    </div>
    <div class="row m-t-30">
        <div class="col-lg-6">
            <div class="card">
                <h4 class="card-header">Najnowsze szkice postów:</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tytuł</th>
                            <th>Kategoria</th>
                            <th>Akcje</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($posts as $post)                          
                        <tr>
                            <td>{{$post->id}}</td>
                            <td><a href="{{route('posts.show', $post->id)}}"> {{$post->title}}</a></td>
                            <td>{{$post->Category->name}}</td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <a href="{{route('posts.edit', $post->id)}}" class="btn btn-sm btn-info">Edytuj</a>
                                    </div>
                                    <div class="col-sm-4">
                                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!} 
                                            <button class="btn btn-sm btn-danger">Usuń</button>                       
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-6">
                <div class="card">
                    <h4 class="card-header">Najnowsze komentarze:</h4>
                    <table class="table">
                            <thead>
                                <tr>
                                    <td>Autor</td>
                                    <td>Email</td>
                                    <td>Treść</td>
                                    <td>Akcje</td>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($comments as $comment)                          
                                    <tr>
                                        <td>{{$comment->author_name}}</td>
                                        <td>{{$comment->author_email}}</td>
                                        <td><a href="{{route('comments.show', $comment->id)}}"> {{$comment->comment}}</a></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <a href="{{route('comments.edit', $comment->id)}}" class="btn btn-sm btn-info">Edytuj</a>
                                                </div>
                                                <div class="col-sm-4">
                                                    {!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) !!} 
                                                        <button class="btn btn-sm btn-danger">Usuń</button>                       
                                                    {!! Form::close() !!}
                                                </div>
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
@endsection
@push('scripts')
<script src="/js/cendor/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select-multi').select2();
    });
</script>
<script>
        tinymce.init({
            selector: 'textarea.tinymce', 
            plugins: 'image imagetools code link',
            height: '230'
        });          
    </script>
@endpush