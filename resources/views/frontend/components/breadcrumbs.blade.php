<div id="breadcrumbs" class="full-width">
    <div class="container">
    @foreach($breadcrumbs as $key => $crumb)
    @if (!$crumb)
        {{$company_name}} ->
    @elseif ($key != sizeof($breadcrumbs) - 1)
        {{$crumb}} ->

    @else 
        {{$crumb}}

    @endif

    @endforeach

    </div>
</div>