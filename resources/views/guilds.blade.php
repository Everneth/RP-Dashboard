@extends('layout')
@foreach ($guilds as $guild)
<article>
    <h2>{{ $guild->guild_name }}</h2>
    <p>
        <strong>Score: </strong> {{ $guild->guild_score }}<br />
        <strong>Tier: </strong> {{$guild->guild_tier}}<br />
        <strong>Primary Color: </strong> {{$guild->guild_primary_color}}<br />
        <strong>Secondary Color: </strong> {{$guild->guild_secondary_color}}<br />
        <strong>Guild Leader: </strong> {{ $guild->guild_leader_id }} 
    </p>
    <i><small>Created: {{$guild->guild_created_date}}</small></i>
</article>
@endforeach
@section('content')
@endsection