@extends('layouts.main')
@section('content')
    <div class="chakra-container css-153i0fw">
        <div class="css-tkjpxd">
            <div class="css-pw1me0">
                <h2 class="chakra-heading css-1b1ehjh">ABOUT US</h2>
            </div>
        </div>
    </div>
    @foreach ($About as $item)
        <div class="chakra-container css-n759ug">
            <div class="css-1bqt0w9">
                <div class="css-ldihrc">
                    <img alt="Screening Indonesia" src="{{ $item->image }}" class="chakra-image css-1p9qqnd">
                </div>
                <div class="chakra-stack css-1cfdqq0">
                    <div class="css-gmuwbf">
                        <h2 class="chakra-heading css-12d46le">{{ $item->title }}</h2>
                    </div>
                    <p class="chakra-text css-tpvos8" text-justify="inter-word">{!! $item->description !!}</p>
                </div>
            </div>
        </div>
    @endforeach
@endsection