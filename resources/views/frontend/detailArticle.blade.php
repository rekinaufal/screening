@extends('layouts.main')
@section('content-detail-article')
<div class="chakra-container css-bovigs">
    <div class="css-lkhuf5">
        <div class="chakra-stack css-n21gh5">
            <div class="css-w47i39">
                @if (!empty($ArticleDetail->image))
                    <img alt="" src="{{ $ArticleDetail->image }}" class="chakra-image css-1mpfvmt">
                @endif
            </div>
            <div class="css-agzex3">
                @if (!empty($ArticleDetail->title))
                    <h2 class="chakra-heading css-c64fw7">{{ $ArticleDetail->title }}</h2>
                @endif
                @if (!empty($ArticleDetail->description))
                    <p class="chakra-text markdown-styles_markdown__8Ahqd css-i3jkqk">
                        {!! $ArticleDetail->description !!}
                    </p>
                @endif
            </div>
        </div>
        <div class="css-0">
            <div class="chakra-stack css-5y4jzo">
                <div class="input-group mb-4 mt-4">
                    <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <h5 class="chakra-heading">Recent Post</h5>
                <ul role="list" class="css-1uqk1hg">
                    @if (!empty($ArticleRecent))
                        <?php $no = 1; ?>
                        @foreach ($ArticleRecent as $item)
                            <?php $no + 1; ?>
                            <li class="css-0 pb-3">
                                <a class="chakra-link css-spn4bz" href="{{ route('detail.article', Crypt::encrypt($item->id)) }}">
                                    <p class="pl-3">
                                        {{ $item->title }}
                                        <br>
                                        <small>{{ date('d F Y', strtotime($item->created_at)); }}</small>
                                    </p>
                                </a>
                            </li>
                            <?php $no++; ?>
                        @endforeach
                    @endif
                    {{-- <li class="css-0 pb-3">
                        <a class="chakra-link css-spn4bz pl-3" href="">
                            <p class="pl-3">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores adipisci, esse harum possimus magni mollitia voluptate. Ad, quidem expedita eveniet dicta ab iste natus sequi quibusdam! Culpa atque eveniet accusamus.
                            </p>
                        </a>
                        <div class="pl-3">
                            <small>20-11-1999</small>
                        </div>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection