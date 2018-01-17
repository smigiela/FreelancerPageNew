
<div id="asside-admin-panel">
    <ul class="menu">
        <a href="{{route('backend.index')}}"><li class="asside-menu-item {{Request::is('admin') ? "active" : ""}}">
            <i class="fa fa-th-large" aria-hidden="true"></i> Dashboard</li></a>
            <a href="{{route('users.index')}}"><li id="users-submenu-dropdown"  class="asside-menu-item {{Request::is('admin/users/*', 'admin/users') ? "active" : ""}}">
            <i class="fa fa-user " aria-hidden="true"></i> Użytkownicy</li></a>
            
            {{--  @role('superadministrator')      --}}
            <ul id="users-submenu" class="submenu-list" style="{{Request::is('admin/users', 'admin/users/*', 'admin/permissions', 'admin/permissions/*', 'admin/roles', 'admin/roles/*') ? "display:block" : ""}}">
                    <a href=""><li class="asside-menu-item submenu-item {{Request::is('admin/roles', 'admin/roles/*') ? "active" : ""}}">
                        <i class="fa fa-tasks" aria-hidden="true"></i> Role</li></a>
                    <a href=""><li class="asside-menu-item submenu-item {{Request::is('admin/permissions', 'admin/permissions/*') ? "active" : ""}}">
                            <i class="fa fa-lock" aria-hidden="true"></i> Uprawnienia</li></a>    
                </ul> 
{{--  @endrole  --}}
        <a href=""><li class="asside-menu-item {{Request::is('admin/settings') ? "active" : ""}}">
            <i class="fa fa-cog " aria-hidden="true"></i> Ustawienia aplikacji</li></a>
        
        <a href="{{route('portfolios.index')}}"><li id="portfolio-submenu-dropdown" class="asside-menu-item {{Request::is('admin/portfolios', 'admin/portfolios/*') ? "active" : ""}}">
            <i class="fa fa-laptop" aria-hidden="true"></i> Portfolio</li></a>
             
        <a href="{{route('posts.index')}}"><li id="posts-submenu-dropdown" class="asside-menu-item {{Request::is('admin/posts', 'admin/posts/*/edit') ? "active" : ""}}">
                <i class="fa fa-file-text" aria-hidden="true"></i> Posty</li></a>
            
            <ul id="posts-submenu" class="submenu-list" style="{{Request::is('admin/posts', 'admin/posts/*', 'admin/tags', 'admin/tags/*', 'admin/categories', 'admin/categories/*', 'admin/comments', 'admin/comments/*') ? "display:block" : ""}}">            
                <a href="{{route('posts.create')}}"><li class="asside-menu-item submenu-item {{Request::is('admin/posts/create') ? "active" : ""}}">
                    <i class="fa fa-plus-square-o" aria-hidden="true"></i> Dodaj nowy</li></a>
                <a href="#"><li class="asside-menu-item submenu-item {{Request::is('admin/posts/comments') ? "active" : ""}}">
                    <i class="fa fa-comment" aria-hidden="true"></i> Komentarze</li></a>
                <a href="{{route('tags.index')}}"><li class="asside-menu-item submenu-item {{Request::is('admin/tags') ? "active" : ""}}">
                    <i class="fa fa-tags" aria-hidden="true"></i> Tagi</li></a>
                <a href="{{route('categories.index')}}"><li class="asside-menu-item submenu-item {{Request::is('admin/categories') ? "active" : ""}}"><i class="fa fa-th-list" aria-hidden="true">
                    </i> Kategorie</li></a>        
            </ul>
            <a href=""><li class="asside-menu-item {{Request::is('admin/help') ? "active" : ""}}">
                <i class="fa fa-question-circle-o" aria-hidden="true"></i> Pomoc</li></a>
            
            
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
            });	
</script>
<script>
    //slideoff left side panel
    const adminSlideoutButton = document.getElementById('admin-slideout-button')

    adminSlideoutButton.onclick = function (){
        this.classList.toggle('is-active');
        document.getElementById('asside-admin-panel').classList.toggle('is-active')
    }
</script>
@endpush