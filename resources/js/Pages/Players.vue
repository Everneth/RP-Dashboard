<template>
<div class="container-fluid">
    <div class="row">
        <h1 class="col-8 pl-10">Players</h1>
        <form class="form-inline d-md-flex ml-auto" action="..." method="get">
            <input v-model="search" type="text" class="form-control align-middle" placeholder="Search..." />
        </form>
    </div>
</div>
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
import { ref, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";

let props = defineProps({
    players: Object
});

let search = ref('');

watch(search, value => {
    Inertia.get('/players', { search: value }, {
        preserveState: true
    });
});
</script>