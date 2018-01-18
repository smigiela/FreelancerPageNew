
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Daniel Śmigiela">
    <!--keywords-->
        @if(Request::is('/'))
            <meta name="keywords" content="Programowanie, tanie strony www opole, firmowa strona, IT Solutions, Daniel Śmigiela, opole">
        @else
            <meta name="keywords" content="@yield('keywords')">
        @endif
    
    <!--description-->        
        @if(Request::is('/'))
            <meta name="description" content="IT Solutions - Strona freelancera-programisty - Daniel Śmigiela - Oferta | Blog | Portfolio | Tanie strony">
        @else
            <meta name="description" content="@yield('keywords')">
        @endif  

    <!--Open Graph / fb / twitter-->        
        @if(Request::is('blog/post/*'))
            <meta property="fb:app_id" content="136499457029266">
            <meta property="twitter:card" content="summary">
            <meta property="twitter:site" content="@SmigielaDaniel">
            <meta property="og:type" content="article">
            <meta property="og:title" content="{{$post->title}}">
            <meta property="og:description" content="{{$post->meta_content}}">
            <meta property="og:image" content="{{asset('/img/blog/' . $post->image)}}">
            <meta property="og:url" content="{{route('posts.show', $post->id)}}">
        @elseif(Request::is('portfolio/*'))
            <meta property="fb:app_id" content="136499457029266">
            <meta property="twitter:card" content="summary">
            <meta property="twitter:site" content="@SmigielaDaniel">
            <meta property="og:type" content="article">
            <meta property="og:title" content="{{$portfolio->title}}">
            <meta property="og:description" content="{{$portfolio->meta_content}}">
            <meta property="og:image" content="{{asset('/img/portfolio/' . $portfolio->image)}}">
            <meta property="og:url" content="{{route('portfolio.show', $portfolio->id)}}">
        @else
            <meta property="fb:app_id" content="136499457029266">
            <meta property="twitter:card" content="summary">
            <meta property="twitter:site" content="@SmigielaDaniel">
            <meta property="og:type" content="article">
            <meta property="og:title" content="{{ config('app.name', 'Laravel') }} - Profesjonalne strony WWW">
            <meta property="og:description" content="IT Solutions - Strona freelancera-programisty - Daniel Śmigiela - Oferta | Blog | Portfolio | Tanie strony">
            <meta property="og:image" content="{{asset('/img/settings/logo.png')}}">
            <meta property="og:url" content="{{route('frontend.index')}}">
        @endif
        
    

    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if(Request::is('/'))
            <title>{{ config('app.name', 'Laravel') }} - Profesjonalne strony WWW - Najtańsze w rejonie: Opolskie</title>
    @else
        <title>{{ config('app.name', 'Laravel') }} @yield('title') </title>
    @endif    
    

    <!-- Styles -->
    <link href="{{ asset('/css/frontend.css') }}" rel="stylesheet">
</head>
