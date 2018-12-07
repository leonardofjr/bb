    @foreach($main_pages as $main_pages_item)
        <li class="nav-item"><a href="{{url($main_pages_item['path_url'])}} "  class="nav-link {{ Request::path() === $main_pages_item['path_url'] ?  'active' : null }}">{{$main_pages_item['path_name']}} </a></li>
    @endforeach
