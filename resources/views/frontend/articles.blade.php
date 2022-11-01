@extends('layouts.main')
@section('content')
<div class="chakra-container css-153i0fw">
    <div class="css-tkjpxd">
        <div class="css-pw1me0">
            <h2 class="chakra-heading css-1b1ehjh">articles</h2>
        </div>
    </div>
</div>
<div class="chakra-container css-n759ug">
    <div class="css-1nu5w7e">
        @if (!empty($Article))
            @foreach ($Article as $item)
                <div class="css-1f4mlr5">
                    <div class="css-1ngmj15">
                        <a class="chakra-link css-spn4bz" href="{{ route('detail.article', Crypt::encrypt( $item->id )) }}">
                            <img alt="image" src="{{ $item->image }}" class="chakra-image css-w2dxya">
                        </a>
                    </div>
                    <div class="chakra-stack css-17vcp8c">
                        <h2 class="chakra-heading css-1pkdb2i">
                            <a class="chakra-link css-spn4bz" href="{{ route('detail.article', Crypt::encrypt( $item->id )) }}">{{ $item->title }}</a>
                        </h2>
                        <p class="chakra-text css-gprp6g">
                            <?php $jumlah_karakter =strlen($item->description); ?>
                            @if ($jumlah_karakter > 250)
                                {!! substr(strip_tags( $item->description), 0, 250) !!} ...
                            @else
                                {!! substr(strip_tags( $item->description), 0, 250) !!}
                            @endif
                        </p>
                        <a class="chakra-link css-1knvi0y" href="{{ route('detail.article', Crypt::encrypt( $item->id )) }}">Read More</a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <div class="css-xf8auz">
        <button type="button" class="chakra-button css-e5a8s0">Load More</button>
    </div>
</div>
@endsection