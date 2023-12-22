<template>

    <h1>Medals</h1>
    <table class="table table-hover table-striped table-bordered">
        <thead>
            <th>Image</th>
            <th>Id</th>
            <th>Title</th>
            <th>Enabled</th>
            <th>Category</th>
            <th>Position</th>
            <th>Path</th>
            <th>Description</th>
            <th># Awarded</th>
        </thead>
        <tbody> 
            <tr v-for="medal in medals" :key="medal.id">
                <td><img :src="'/' +medal.icon_path" width="70"/></td>
                <td>{{ medal.id }}</td>
                <td>{{ medal.title }}</td>
                <td>{{ medal.enabled }}</td>
                <td>{{ medal.category_id }}</td>
                <td>{{ medal.position }}</td>
                <td>{{ medal.icon_path }}</td>
                <td>{{ medal.description }}</td>
                <td>{{ medal.award_count }}</td>
            </tr>
        </tbody>
    </table>

</template>

<script setup>
//import Pagination from '../../Shared/Pagination';
//import Link from '@inertiajs/inertia-vue3';
import { Inertia } from "@inertiajs/inertia";

let props = defineProps({
    medals: Object
});

</script>