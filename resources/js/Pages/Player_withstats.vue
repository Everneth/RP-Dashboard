<template>
<div class="container-fluid">
    <div class="row mb-15">
        <img :src="'https://crafatar.com/avatars/' + player.player_uuid + '?size=82&overlay'" />
        <h1 class="col-8">{{ player.player_name }} <a href="#" class="badge">Guild Tag PH</a></h1>
        <p><small>{{ player.player_uuid }}</small></p>
    </div>
<div class="row">
<div class="collapse-group w-500 col-lg-8 mw-full"> <!-- w-500 = width: 50rem (500px), mw-full = max-width: 100% -->
  <!-- First collapse panel (open by default) -->
  <details class="collapse-panel">
    <summary class="collapse-header">
      <strong>Misc Stats</strong>
    </summary>
    <div class="collapse-content">
          <table class="table table-hover table-striped table-bordered">
        <thead>
            <th>Stat name</th>
            <th>Value</th>
        </thead>
        <tbody> 
            <tr v-for="(value, name, index) in response_data.stats['minecraft:custom']" :key="index">
                <td>{{ name }}</td>
                <td>{{ value }}</td>
            </tr>
        </tbody>
    </table>
    </div>
  </details>
  <details class="collapse-panel">
    <summary class="collapse-header">
      <strong>Broken Items</strong>
    </summary>
    <div class="collapse-content">
          <table class="table table-hover table-striped table-bordered">
        <thead>
            <th>Stat name</th>
            <th>Value</th>
        </thead>
        <tbody> 
            <tr v-for="(value, name, index) in response_data.stats['minecraft:broken']" :key="index">
                <td>{{ name }}</td>
                <td>{{ value }}</td>
            </tr>
        </tbody>
    </table>
    </div>
  </details>
  <details class="collapse-panel">
    <summary class="collapse-header">
      <strong>Dropped Items</strong>
    </summary>
    <div class="collapse-content">
          <table class="table table-hover table-striped table-bordered">
        <thead>
            <th>Stat name</th>
            <th>Value</th>
        </thead>
        <tbody> 
            <tr v-for="(value, name, index) in response_data.stats['minecraft:dropped']" :key="index">
                <td>{{ name }}</td>
                <td>{{ value }}</td>
            </tr>
        </tbody>
    </table>
    </div>
  </details>
  <details class="collapse-panel">
    <summary class="collapse-header">
      <strong>Mobs Killed</strong>
    </summary>
    <div class="collapse-content">
          <table class="table table-hover table-striped table-bordered">
        <thead>
            <th>Stat name</th>
            <th>Value</th>
        </thead>
        <tbody> 
            <tr v-for="(value, name, index) in response_data.stats['minecraft:killed']" :key="index">
                <td>{{ name }}</td>
                <td>{{ value }}</td>
            </tr>
        </tbody>
    </table>
    </div>
  </details>
  <details class="collapse-panel">
    <summary class="collapse-header">
      <strong>Used Items</strong>
    </summary>
    <div class="collapse-content">
          <table class="table table-hover table-striped table-bordered">
        <thead>
            <th>Stat name</th>
            <th>Value</th>
        </thead>
        <tbody> 
            <tr v-for="(value, name, index) in response_data.stats['minecraft:used']" :key="index">
                <td>{{ name }}</td>
                <td>{{ value }}</td>
            </tr>
        </tbody>
    </table>
    </div>
  </details>
  <details class="collapse-panel">
    <summary class="collapse-header">
      <strong>Killed By</strong>
    </summary>
    <div class="collapse-content">
          <table class="table table-hover table-striped table-bordered">
        <thead>
            <th>Stat name</th>
            <th>Value</th>
        </thead>
        <tbody> 
            <tr v-for="(value, name, index) in response_data.stats['minecraft:killed_by']" :key="index">
                <td>{{ name }}</td>
                <td>{{ value }}</td>
            </tr>
        </tbody>
    </table>
    </div>
  </details>
  <details class="collapse-panel">
    <summary class="collapse-header">
      <strong>Mined Items</strong>
    </summary>
    <div class="collapse-content">
          <table class="table table-hover table-striped table-bordered">
        <thead>
            <th>Stat name</th>
            <th>Value</th>
        </thead>
        <tbody> 
            <tr v-for="(value, name, index) in response_data.stats['minecraft:mined']" :key="index">
                <td>{{ name }}</td>
                <td>{{ value }}</td>
            </tr>
        </tbody>
    </table>
    </div>
  </details>
  <details class="collapse-panel">
    <summary class="collapse-header">
      <strong>Items Picked Up</strong>
    </summary>
    <div class="collapse-content">
          <table class="table table-hover table-striped table-bordered">
        <thead>
            <th>Stat name</th>
            <th>Value</th>
        </thead>
        <tbody> 
            <tr v-for="(value, name, index) in response_data.stats['minecraft:picked_up']" :key="index">
                <td>{{ name }}</td>
                <td>{{ value }}</td>
            </tr>
        </tbody>
    </table>
    </div>
  </details>
</div>
  <div class="w-400 col-lg-4 mw-full"> <!-- w-400 = width: 40rem (400px), mw-full = max-width: 100% -->
  <div class="card mt-0 p-0"> <!-- p-0 = padding: 0 -->
    <!-- Card header -->
    <div class="px-card py-10 border-bottom"> <!-- py-10 = padding-top: 1rem (10px) and padding-bottom: 1rem (10px), border-bottom: adds a border on the bottom -->
      <h2 class="card-title font-size-18 m-0"> <!-- font-size-18 = font-size: 1.8rem (18px), m-0 = margin: 0 -->
        Discord Profile
      </h2>
    </div>
    <!-- Content -->
    <div class="content">
      <p>Roles list PH</p>
    </div>
    <!-- Card footer -->
    <div class="px-card py-10 bg-light-lm bg-very-dark-dm rounded-bottom"> <!-- py-10 = padding-top: 1rem (10px) and padding-bottom: 1rem (10px), bg-light-lm = background-color: var(--gray-color-light) only in light mode, bg-very-dark-dm = background-color: var(--dark-color-dark) only in dark mode, rounded-bottom = rounded corners on the bottom -->
      <p class="font-size-12 m-0"> <!-- font-size-12 = font-size: 1.2rem (12px), m-0 = margin: 0 -->
        ID: {{ player.discord_id }}
      </p>
    </div>
  </div>
<div class="w-400 mw-full"> <!-- w-400 = width: 40rem (400px), mw-full = max-width: 100% -->
  <div class="card p-0"> <!-- p-0 = padding: 0 -->
    <!-- Card header -->
    <div class="px-card py-10 border-bottom"> <!-- py-10 = padding-top: 1rem (10px) and padding-bottom: 1rem (10px), border-bottom: adds a border on the bottom -->
      <h2 class="card-title font-size-18 m-0"> <!-- font-size-18 = font-size: 1.8rem (18px), m-0 = margin: 0 -->
        Medals Case
      </h2>
    </div>
    <!-- Content -->
    <div class="content">
      <p>Lolno</p>
    </div>
    <!-- Card footer -->
    <div class="px-card py-10 bg-light-lm bg-very-dark-dm rounded-bottom"> <!-- py-10 = padding-top: 1rem (10px) and padding-bottom: 1rem (10px), bg-light-lm = background-color: var(--gray-color-light) only in light mode, bg-very-dark-dm = background-color: var(--dark-color-dark) only in dark mode, rounded-bottom = rounded corners on the bottom -->
      <p class="font-size-12 m-0"> <!-- font-size-12 = font-size: 1.2rem (12px), m-0 = margin: 0 -->
        Not all are shown.
      </p>
    </div>
  </div>
  </div>
</div>
</div>
<!--end row-->
</div>
</template>

<script setup>
import Pagination from '/resources/js/Shared/Pagination.vue';
import { ref, watch } from "vue";
import { router } from "@inertiajs/vue3";

let props = defineProps({
    player: Object,
    response_data: Object
});

</script>