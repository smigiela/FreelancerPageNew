
<div id="asside-admin-panel">
    <ul class="menu">
        <a href="{{url('http://localhost:8000/admin/home')}}"><li class="asside-menu-item {{Request::is('admin/home') ? "active" : ""}}">
            <i class="fa fa-th-large" aria-hidden="true"></i> Dashboard</li></a>
        <li id="users-submenu-dropdown"  class="asside-menu-item {{Request::is('admin/home/users/*', 'admin/home/users') ? "active" : ""}}">
            <i class="fa fa-user " aria-hidden="true"></i> Użytkownicy</li>
            <ul id="users-submenu" class="submenu-list" style="{{Request::is('admin/home/users', 'adminhome/users-+/*') ? "display:block" : ""}}">
                <a href="{{url('http://localhost:8000/home/users')}}"><li class="asside-menu-item submenu-item">
                    <i class="fa fa-users" aria-hidden="true"></i> Wszyscy</li></a>
                <a href=""><li class="asside-menu-item submenu-item">
                    <i class="fa fa-plus-square-o" aria-hidden="true"></i> Dodaj</li></a>
                <a href=""><li class="asside-menu-item submenu-item">
                    <i class="fa fa-tasks" aria-hidden="true"></i> Role</li></a>
            </ul>    

        <a href="#"><li class="asside-menu-item">
            <i class="fa fa-cog " aria-hidden="true"></i> Ustawienia aplikacji</li></a>
        
        <li id="portfolio-submenu-dropdown" class="asside-menu-item {{Request::is('admin/home/portfolio', 'admin/home/portfolio/*') ? "active" : ""}}">
            <i class="fa fa-laptop" aria-hidden="true"></i> Portfolio</li>
            <ul id="portfolio-submenu" class="submenu-list" style="{{Request::is('admin/home/portfolio', 'admin/home/portfolio/*') ? "display:block" : ""}}">
                <a href=""><li class="asside-menu-item submenu-item"></li>
                    <i class="fa fa-users" aria-hidden="true"></i> Wszystkie</li></a>
                <a href="{{url('http://localhost:8000/home/portfolio/create')}}"><li class="asside-menu-item submenu-item">
                    <i class="fa fa-plus-square-o" aria-hidden="true"></i> Dodaj</li></a>
                </ul>
             
        <li id="posts-submenu-dropdown" class="asside-menu-item {{Request::is('admin/home/posts', 'admin/home/posts/*') ? "active" : ""}}">
                <i class="fa fa-file-text" aria-hidden="true"></i> Posty</li>
            
            <ul id="posts-submenu" class="submenu-list" style="{{Request::is('admin/home/posts', 'admin/home/posts/*') ? "display:block" : ""}}">
                <a href="{{route('posts.index')}}"><li class="asside-menu-item submenu-item">
                    <i class="fa fa-folder" aria-hidden="true"></i> Wszystkie</li></a>
                <a href="{{route('posts.create')}}"><li class="asside-menu-item submenu-item">
                    <i class="fa fa-plus-square-o" aria-hidden="true"></i> Dodaj nowy</li></a>
                <a href="#"><li class="asside-menu-item submenu-item">
                    <i class="fa fa-comment" aria-hidden="true"></i> Komentarze</li></a>
                <a href="{{route('tags.index')}}"><li class="asside-menu-item submenu-item">
                    <i class="fa fa-tags" aria-hidden="true"></i> Tagi</li></a>
                <a href="{{route('categories.index')}}"><li class="asside-menu-item submenu-item"><i class="fa fa-th-list" aria-hidden="true">
                    </i> Kategorie</li></a>        
            </ul>            
    </ul>
</div>

@push('scripts')
<script>
        /*rozwijane menu po boku */ 
            $(document).ready(function(){
                $('#posts-submenu-dropdown').click(function(){
                    $('#posts-submenu').stop().slideToggle(300);
                });
                $('#users-submenu-dropdown').click(function(){
                    $('#users-submenu').stop().slideToggle(300);
                });
                $('#portfolio-submenu-dropdown').click(function(){
                    $('#portfolio-submenu').stop().slideToggle(300);
                });             
            });	
</script>
@endpush