<template>
<div class="container-fluid">
    <div class="row">
        <h1 class="col-8">Guilds</h1>
        <form class="form-inline d-md-flex ml-auto" action="..." method="get">
            <input v-model="search" type="text" class="form-control align-middle" placeholder="Search..." />
        </form>
    </div>
</div>
    <table class="table table-bordered">
        <thead>
            <th>Guild Name</th>
            <th>Guild Colors</th>
            <th>Created Date</th>
            <th>Tier</th>
        </thead>
        <tbody> 
            <tr v-for="guild in guilds.data" :key="guild.guild_id">
                <td>{{ guild.guild_name }}</td>
                <td><span class="badge" :class="'badge-guild-' + guild.guild_primary_color">{{ guild.guild_primary_color }}</span> 
                <span class="badge" :class="'badge-guild-' + guild.guild_secondary_color">{{ guild.guild_secondary_color }}</span></td>
                <td>{{ guild.guild_created_date }}</td>
                <td>{{ guild.guild_tier }}</td>
            </tr>
        </tbody>
    </table>
    <div>
          <Pagination :links="guilds.links" />
    </div>
</template>

<script setup>
import Pagination from '../Shared/Pagination';
import { ref, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";

let props = defineProps({
    guilds: Object
});

let search = ref('');

watch(search, value => {
    Inertia.get('/guilds', { search: value }, {
        preserveState: true
    });
});
</script>