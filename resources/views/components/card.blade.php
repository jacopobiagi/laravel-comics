
    @foreach ($comics as $item)
        <div class="content-series" >
            <div class="series">
                <img src="{{$item['thumb']}}" alt="img" class="">
            </div>
            <span>{{ $item['title'] }}</span>
        </div>
    @endforeach
