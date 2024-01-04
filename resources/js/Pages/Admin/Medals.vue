<template>
    <h1>Medals</h1>
    <a href="#"><button type="button" class="btn btn-success btn-lg" @click="createMedal()">Create Medal</button></a>
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
                    <button type="button" class="btn btn-warning" @click.prevent="editMedal(medal)"><i class="fa fa-solid fa-pencil me-1"></i>Edit</button>
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
<b-modal class="modal fade" id="edit-medal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">

    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="edit-medal" v-if="editing">Edit Medal</h1>
            <h1 class="modal-title fs-5" id="edit-medal" v-else>Add Medal</h1>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form>
                <div class="mb-3">
                    <label for="medal_title" class="col-form-label mb-1 mb-sm-0">Title</label>
                    <input for="medal_title" type="text" class="form-control" id="medal-title" placeholder="Medal Title">
                </div>
                <div>
                    <label for="medal_desc" class="form-label">Description</label>
                    <textarea for="medal_desc" class="form-control" id="medal-description" rows="3" placeholder="A short description about the award"></textarea>
                </div>
                <div class="mb-3">
                    <label for="medal_order" class="col-form-label mb-1 mb-sm-0">Order of Precedence</label>
                    <input for="medal_order" type="text" class="form-control" id="medal-oop" placeholder="Medal Order">
                </div>
                <!-- Select component -->
                <div class="mb-3">
                    <label for="medal_cat" class="form-label">Medal Category</label>
                    <select for="medal_cat" class="form-select" id="example-select-1">
                        <option selected>Select an option</option>
                        <option value="frontend">Title here</option>
                    </select>
                </div>
                <!-- File input -->
                <div class="mb-3">
                    <label for="medal_img" class="form-label">Upload image</label>
                    <input for="medal_img" class="form-control" type="file" id="medal-image">
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" for="medal_enabled" type="checkbox" role="switch" value="" id="medal-enabled">
                    <label class="form-check-label" for="medal_enabled">
                        Enabled
                    </label>
                </div>
                <div class="modal-footer">
                    <button type="submit" @submit.prevent="submit" class="btn btn-success d-block w-100">Submit</button>
                    <a href="#" class="btn btn-secondary d-block w-100 mt-2" data-bs-dismiss="modal">Cancel</a>
                </div>
            </form>
        </div>
    </div>
  </div>
</b-modal>
</template>

<script setup>
//import Pagination from '../../Shared/Pagination';
//import Link from '@inertiajs/inertia-vue3';
import { router, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';


const createMedal = () => {
    editing.value = false;
    this.$bvModal.show("modal");
}

const editMedal = (medal) => {
    editing.value = true;
    this.$bvModal.show("modal");
    formValues.value = 
    {
        id: medal.id,
        title: medal.title,
        enabled: medal.enabled,
        category_id: medal.category_id,
        position: medal.position,
        icon_path: medal.icon_path,
        description: medal.description
    }
        
};

const editing = ref(false);

function submit() {
    router.post('/admin/medals', form)
}

let props = defineProps({
    medals: Object
});

</script>