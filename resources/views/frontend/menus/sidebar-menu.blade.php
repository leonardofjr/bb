<ul>
    @foreach($services_pages as $services_item)
        <li><a href="{{url($services_item['path_url'])}}"  class="nav-link {{ Request::path() === $services_item['path_url'] ? 'active' : null }}">{{$services_item['path_name']}}</a></li>
    @endforeach
</ul>