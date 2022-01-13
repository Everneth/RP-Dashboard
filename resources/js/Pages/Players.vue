<template>
    <h1 class="">Players</h1>
    <table class="table is-bordered is-striped is-hoverable is-fullwidth">
        <thead>
            <th>Player</th>
            <th>Minecraft ID</th>
            <th>Discord ID</th>
        </thead>
        <tbody> 
            <tr v-for="player in players.data" :key="player.player_id">
                <td>{{ player.player_name }} &lt;<strong>Guild Tag PH</strong>&gt;</td>
                <td>{{ player.player_uuid }}</td>
                <td>{{ player.discord_id }}</td>
            </tr>
        </tbody>
    </table>
    <div>
          <Pagination :links="players.links" />
    </div>
</template>

<script setup>
import Pagination from '../Shared/Pagination';
let props = defineProps({
    players: Object
});
</script>