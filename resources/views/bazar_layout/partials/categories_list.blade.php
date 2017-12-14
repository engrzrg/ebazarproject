<div class="row categories-list">
    <div class="col-md-2">

    </div>
    @foreach($categories->chunk(4) as $item)
    <div class="col-md-3">

    <ul>
        @foreach($item as $cat)
        <li><a href="#">{{str_limit($cat->title,30)}}</a> <span class="text-muted">(1234)</span></li>
        @endforeach
    </ul>

    </div>
    @endforeach
</div>