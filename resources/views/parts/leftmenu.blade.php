@if( auth()->user()->role->slug === 'admin' )
    @include('parts.admin.leftmenu')
@elseif( auth()->user()->role->slug === 'editor' )
    @include('parts.editor.leftmenu')
@elseif( auth()->user()->role->slug === 'viewer' )
    @include('parts.viewer.leftmenu')    
@endif