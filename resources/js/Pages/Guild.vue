<template>
<div class="container-fluid">
    <div class="row mb-15">
        <h1 class="col-8">{{ guild.guild_name }}</h1>
    </div>
<div class="row">
<div class="collapse-group w-500 col-lg-8 mw-full"> <!-- w-500 = width: 50rem (500px), mw-full = max-width: 100% -->
  <table class="table table-bordered">
        <thead>
            <th>Guild Name</th>
            <th>Guild Colors</th>
            <th>Created Date</th>
            <th>Tier</th>
        </thead>
        <tbody> 
            <tr>
                <td><a :href="'guilds/' + guild.guild_id">{{ guild.guild_name }}</a></td>
                <td><span class="badge" :class="'badge-guild-' + guild.guild_primary_color">{{ guild.guild_primary_color }}</span> 
                <span class="badge" :class="'badge-guild-' + guild.guild_secondary_color">{{ guild.guild_secondary_color }}</span></td>
                <td>{{ guild.guild_created_date }}</td>
                <td>{{ guild.guild_tier }}</td>
            </tr>
        </tbody>
    </table>
</div>
  <div class="w-400 col-lg-4 mw-full"> <!-- w-400 = width: 40rem (400px), mw-full = max-width: 100% -->
  <div class="card mt-0 p-0"> <!-- p-0 = padding: 0 -->
    <!-- Card header -->
    <div class="px-card py-10 border-bottom"> <!-- py-10 = padding-top: 1rem (10px) and padding-bottom: 1rem (10px), border-bottom: adds a border on the bottom -->
      <h2 class="card-title font-size-18 m-0"> <!-- font-size-18 = font-size: 1.8rem (18px), m-0 = margin: 0 -->
        Leadership
      </h2>
    </div>
    <!-- Content -->
    <div class="content">
      <p>Roles list PH</p>
    </div>
    <!-- Card footer -->
    <div class="px-card py-10 bg-light-lm bg-very-dark-dm rounded-bottom"> <!-- py-10 = padding-top: 1rem (10px) and padding-bottom: 1rem (10px), bg-light-lm = background-color: var(--gray-color-light) only in light mode, bg-very-dark-dm = background-color: var(--dark-color-dark) only in dark mode, rounded-bottom = rounded corners on the bottom -->
      <p class="font-size-12 m-0"> <!-- font-size-12 = font-size: 1.2rem (12px), m-0 = margin: 0 -->
        ID:  
      </p>
    </div>
  </div>
<div class="w-400 mw-full"> <!-- w-400 = width: 40rem (400px), mw-full = max-width: 100% -->
  <div class="card p-0"> <!-- p-0 = padding: 0 -->
    <!-- Card header -->
    <div class="px-card py-10 border-bottom"> <!-- py-10 = padding-top: 1rem (10px) and padding-bottom: 1rem (10px), border-bottom: adds a border on the bottom -->
      <h2 class="card-title font-size-18 m-0"> <!-- font-size-18 = font-size: 1.8rem (18px), m-0 = margin: 0 -->
        RP Info
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
import Pagination from '../Shared/Pagination';
import { ref, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";

let props = defineProps({
    guild: Object,
});

</script>