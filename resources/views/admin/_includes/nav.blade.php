<nav class="navbar navbar-admin navbar-expand-lg navbar-light bg-light" style="box-shadow: 0px 0px 4px #000000;">
		<a class="navbar-brand" href="{{route('frontend.index')}}">
			<!--brand section-->
		</a>
	
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbar">
			<ul class="navbar-nav mr-auto">				
				<li class="nav-item">
					<a class="nav-link" href="{{route('frontend.index')}}">Frontend</a>
				</li>
            </ul>
            
            @guest
            <ul class="navbar-nav mr-auto larva-links">
                <li><a href="{{ route('login') }}">Login</a></li>
                {{--  <li><a href="{{ route('register') }}">Register</a></li>  --}}
            </ul>
            @else  
            <div class="user-info row">              
				<div class="col-sm-3">
					<img class="user-img" src="{{asset('/img/users/' . Auth::user()->image)}}">
				</div>
				<div class="col-sm-8">
					<p class="user-name">
							{{Auth::user()->name}}
						<span class="badge badge-pill badge-info">5</span>
					</p> 
					<p class="user-role">Administrator</p>
				</div>	
					<ul class="dropdown user-menu">
						<li class="is-active user-menu-item">
								<a href="#"><i class="fa fa-user-o " aria-hidden="true"></i> Profil</a></li>
						<li class="is-active user-menu-item">
								<a href="#"><i class="fa fa-th-large" aria-hidden="true"></i> Dashboard</a></li>
						<li class="is-active user-menu-item">
								<a href="#"><i class="fa fa-bell" aria-hidden="true"></i> Powiadomienia</a></li>
						<li class="is-active user-menu-item">
								<a href="#"><i class="fa fa-cog " aria-hidden="true"></i> Ustawienia</a></li>
								<hr>
						<li class="is-active user-menu-item">
								<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out  " aria-hidden="true"></i> Logout</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>									
					</ul>	
			</div>
            @endguest
						
		</div>
	</nav>

@push('scripts')
<script>
        /*rozwijane menu użytkownika */ 
            $(document).ready(function(){
                $('.user-info').hover(function(){
                $('.user-menu').stop().slideToggle(300);
                });
                
            });	
</script>
@endpush