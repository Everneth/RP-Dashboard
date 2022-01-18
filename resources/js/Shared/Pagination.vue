<template>
  <div class="p-10">
    <ul class="pagination text-center">
      <li class="page-item" :class="{ 'text-gray-500': ! link.url, 'page-item active' : link.active }" v-for="link in links" :key="link.url">
        <a :href="link.url"
        v-html="link.label"
        class="page-link"
        />
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: {
    links: Array
  }
};
</script>