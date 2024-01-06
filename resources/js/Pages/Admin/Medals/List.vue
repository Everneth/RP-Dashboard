<template>
    <h1>Medals</h1>
    <a href="create"><button type="button" class="btn btn-success btn-lg" @click="createMedal()">Create Medal</button></a>
    <table class="table table-hover table-striped table-bordered mt-2">
        <thead>
            <th>Action</th>
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
                <td style="vertical-align:middle;">
                    <a :href="medal.id + '/edit/'"><button type="button" class="btn btn-warning"><i class="fa fa-solid fa-pencil me-1"></i>Edit</button></a>
                    <a :href="'./delete/' + medal.id"><button type="button" class="btn btn-danger"><i
                                class="fa fa-solid fa-xmark me-1"></i>Delete</button></a>
                </td>
                <td><img :src="'/' + medal.icon_path" width="70" /></td>
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

    <!-- Offcanvas from right -->
    <!-- Vertically centered modal -->
</template>

<script>

export default {
    props: {
    medals: Object
    }
}

</script>