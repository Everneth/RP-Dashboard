<template>
    <h1>Players</h1>
    <table class="table table-hover table-striped table-bordered">
        <thead>
            <th>Player</th>
            <th>Minecraft ID</th>
            <th>Discord ID</th>
        </thead>
        <tbody> 
            <tr v-for="player in players.data" :key="player.player_id">
                <td>{{ player.player_name }} <a href="#" class="badge">Guild Tag PH</a></td>
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