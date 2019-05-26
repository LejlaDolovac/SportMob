@extends('ads')

@section('main')

<div>

    @if (count($ads) > 0)
    @foreach ($ads as $ad)
    <h1>{{ $ad->title }}</h1>
    <h3>Rank: {{ $ad->rank }}</h3>
    <p>{{ $ad->text }}</p>
    <img src="{{ $ad->img }}" alt="">
    @endforeach
    @endif
</div>
@endsection
