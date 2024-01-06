<template>
    <h1>Medals - Create new</h1>
    <form>
        <div class="mb-3">
            <label for="medal_title" class="col-form-label mb-1 mb-sm-0">Title</label>
            <input for="medal_title" type="text" class="form-control" id="medal-title" placeholder="Medal Title">
        </div>
        <div>
            <label for="medal_desc" class="form-label">Description</label>
            <textarea for="medal_desc" class="form-control" id="medal-description" rows="3"
                placeholder="A short description about the award"></textarea>
        </div>
        <div class="mb-3">
            <label for="medal_order" class="col-form-label mb-1 mb-sm-0">Order of Precedence</label>
            <input for="medal_order" type="text" class="form-control" id="medal-oop" placeholder="Medal Order">
        </div>
        <!-- Select component -->
        <div class="mb-3">
            <label for="medal_cat" class="form-label">Medal Category</label>
            <select for="medal_cat" class="form-select" id="medal_cat">
                <option selected>Select an option</option>
                <option v-for="cat in medal_cats" :key="cat.id" :value="cat.friendly_name">{{cat.title}}</option>
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
            <button type="submit" class="btn btn-success d-block w-100">Submit</button>
            <a href="#" class="btn btn-secondary d-block w-100 mt-2">Cancel</a>
        </div>
    </form>
</template>
<script setup>
let props = defineProps({
        medal_cats: Object,
    });
</script>