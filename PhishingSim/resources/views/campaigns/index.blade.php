@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Phishing Campaigns</h2>
    <a href="{{route('campaigns.create')}}" class="btn btn-primary">Create Campaign</a>
    <ul>
        @foreach ($campaigns as $campaign)
            <li>{{$campaign->subject}} - <a href="{{$campaign->phishing_link}}">View Link</a></li>
        @endforeach
    </ul>
</div>
@endsection