<template>
<div class="container-fluid">
    <div class="row">
        <h1 class="col-8">{{ player.player_name }} <a href="#" class="badge">Guild Tag PH</a></h1>
        <p><small>{{ player.player_uuid }}</small></p>
    </div>
</div>
<div class="collapse-group w-500 mw-full"> <!-- w-500 = width: 50rem (500px), mw-full = max-width: 100% -->
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
</template>

<script setup>
import Pagination from '../Shared/Pagination';
import { ref, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";

let props = defineProps({
    player: Object,
    response_data: Object
});

</script>