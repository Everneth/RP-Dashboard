<template>
<div class="container-fluid">
    <div class="row">
        <h1 class="col-8">Log</h1>
    </div>
</div>
    <table class="table table-hover table-striped table-bordered">
        <thead>
            <th>Severity</th>
            <th>Description</th>
            <th>Timestamp</th>
        </thead>
        <tbody> 
            <tr v-for="item in data" :key="item.timestamp">
                <td>{{ item.severity }}</td>
                <td>{{ item.description }}</td>
                <td>{{ item.timestamp }}</td>
            </tr>
        </tbody>
    </table>
    <div>
          <!--<Pagination :links="players.links" />-->
    </div>
</template>

<script>
import Layout from "/resources/js/Shared/Layout.vue";

export default {
    components: { Layout },
    props: { data: Array }
};
</script>