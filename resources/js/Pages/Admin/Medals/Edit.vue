<template>
    <h1>Medals - Edit {{ medal.title }}</h1>
    <form @submit.prevent="update">
        <div class="mb-3">
            <label class="col-form-label mb-1 mb-sm-0">Title</label>
            <input v-model="form.title" type="text" class="form-control" placeholder="Medal Title">
        </div>
        <div>
            <label class="form-label">Description</label>
            <textarea v-model="form.description" class="form-control" rows="3"
                placeholder="A short description about the award"></textarea>
        </div>
        <div class="mb-3">
            <label class="col-form-label mb-1 mb-sm-0">Order of Precedence</label>
            <input v-model="form.position" type="text" class="form-control" placeholder="Medal Order">
        </div>
        <!-- Select component -->
        <div class="mb-3">
            <label class="form-label">Medal Category</label>
            <select v-model="form.category_id" class="form-select">
                <option v-for="cat in medal_cats" :key="cat.id" :value="cat.id">{{cat.title}}</option>
            </select>
        </div>
        <!-- File input -->
        <div class="mb-3">
            <label class="form-label">Upload image</label>
            <input class="form-control" type="file">
        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" v-model="form.enabled" type="checkbox" role="switch">
            <label class="form-check-label">
                Enabled
            </label>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success d-block w-100">Submit</button>
            <a href="#" class="btn btn-secondary d-block w-100 mt-2">Cancel</a>
        </div>
    </form>
</template>
<script>
export default {
    props: {
        medal: Object,
        medal_cats: Array,
    },
    remember: 'form',
  data() {
    return {
      form: this.$inertia.form({
        title: this.medal.title,
        enabled: this.medal.enabled,
        category_id: this.medal.category_id,
        position: this.medal.position,
        icon_path: this.medal.icon_path,
        description: this.medal.description,
        award_count: this.medal.award_count,
      }),
    }
  },
  methods: {
    update() {
      this.form.put(`/admin/medals/${this.medal.id}`)
    },
  }
}
</script>