@extends('layout')
@section('content')
<div class="columns is-mobile">
    <div class="column is-8 is-offset-2">
    <article class="message is-primary">
        <div class="message-body">
        This is a non-exhaustive list of all players who have connected to our server. Those without Discord IDs are not permitted to join for security reasons.
      </div>
    </article>
    <table class="table is-bordered is-striped is-hoverable is-fullwidth">
        <thead>
            <th>Player</th>
            <th>Minecraft ID</th>
            <th>Discord ID</th>
        </thead>
        <tbody>
            @foreach ($players as $player)
            <tr>
                <td>{{ $player->player_name }} &lt;<strong>Guild Tag PH</strong>&gt;</td>
                <td>{{ $player->player_uuid }}</td>
                <td>{{ $player->discord_id }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection