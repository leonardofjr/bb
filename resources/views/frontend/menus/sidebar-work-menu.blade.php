    <ul>
    @foreach ($work_pages as $work_item) 
       <li><a href="{{url($work_item['path_url'])}}"  class="nav-link {{ Request::path() === $work_item['path_url'] ? 'active' : null }}">{{$work_item['path_name']}}</a></li>
    
    @endforeach
</ul>