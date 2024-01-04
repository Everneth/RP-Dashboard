<template>
  <div class="container-fluid">
    <div class="row mb-15">
      <h1 class="col-8">{{ guild.guild_name }}</h1>
    </div>
    <h4>Guild Info</h4>
    <div class="container-fluid mb-20 border">
      <div class="row mb-10">
        <div class="col-2">
          <strong>Colors</strong><br />
          <span
            class="badge"
            :class="'badge-guild-' + guild.guild_primary_color"
            >{{ guild.guild_primary_color }}</span
          >
          <span
            class="badge"
            :class="'badge-guild-' + guild.guild_secondary_color"
            >{{ guild.guild_secondary_color }}</span
          >
        </div>
        <div class="col-2">
          <strong>Created Date</strong><br />
          {{ guild.guild_created_date }}
        </div>
        <div class="col-2">
          <strong>Tier</strong><br />
          {{ guild.guild_tier }}
        </div>
        <div class="col-2">
          <strong>Score</strong><br />
          {{ guild.guild_score }}
        </div>
      </div>
      <div class="row">
        <div class="col-12 border">
          <strong>Description</strong><br />

          Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. Lorem Ipsum has been the industry's standard dummy text ever
          since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book. It has survived not only
          five centuries, but also the leap into electronic typesetting,
          remaining essentially unchanged. It was popularised in the 1960s with
          the release of Letraset sheets containing Lorem Ipsum passages, and
          more recently with desktop publishing software like Aldus PageMaker
          including versions of Lorem Ipsum.
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 mw-full">
        <!-- w-500 = width: 50rem (500px), mw-full = max-width: 100% -->
        <table class="table table-hover table-striped table-bordered">
          <thead>
            <th>Player</th>
            <th>Rank</th>
          </thead>
          <tbody>
            <tr
              v-for="guild_member in guild_members.data"
              :key="guild_member.player_id"
            >
              <td>
                <a :href="'../players/' + guild_member.player_uuid">{{
                  guild_member.player_name
                }}</a>
              </td>
              <td>{{ guild_member.guild_rank }}</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="w-400 col-lg-4 mw-full">
        <!-- w-400 = width: 40rem (400px), mw-full = max-width: 100% -->
        <div class="card mt-0 p-0">
          <!-- p-0 = padding: 0 -->
          <!-- Card header -->
          <div class="px-card py-10 border-bottom">
            <!-- py-10 = padding-top: 1rem (10px) and padding-bottom: 1rem (10px), border-bottom: adds a border on the bottom -->
            <h2 class="card-title font-size-18 m-0">
              <!-- font-size-18 = font-size: 1.8rem (18px), m-0 = margin: 0 -->
              Leadership
            </h2>
          </div>
          <!-- Content -->
          <div class="content">
            <strong>Guild Leader</strong>
            <p
              v-for="guild_member in guild_members.data"
              :key="guild_member.player_id"
            >
              <span v-if="guild_member.guild_rank === 1">{{
                guild_member.player_name
              }}</span>
            </p>
            <strong>Guild Officers</strong>
            <p
              v-for="guild_member in guild_members.data"
              :key="guild_member.player_id"
            >
              <span v-if="guild_member.guild_rank === 2">{{
                guild_member.player_name
              }}</span>
            </p>
          </div>
          <!-- Card footer -->
          <div class="px-card py-10 bg-light-lm bg-very-dark-dm rounded-bottom">
            <!-- py-10 = padding-top: 1rem (10px) and padding-bottom: 1rem (10px), bg-light-lm = background-color: var(--gray-color-light) only in light mode, bg-very-dark-dm = background-color: var(--dark-color-dark) only in dark mode, rounded-bottom = rounded corners on the bottom -->
            <p class="font-size-12 m-0">
              <!-- font-size-12 = font-size: 1.2rem (12px), m-0 = margin: 0 -->
              Recruitment info on how to join this guild should go here.
            </p>
          </div>
        </div>
        <div class="w-400 mw-full">
          <!-- w-400 = width: 40rem (400px), mw-full = max-width: 100% -->
          <div class="card p-0">
            <!-- p-0 = padding: 0 -->
            <!-- Card header -->
            <div class="px-card py-10 border-bottom">
              <!-- py-10 = padding-top: 1rem (10px) and padding-bottom: 1rem (10px), border-bottom: adds a border on the bottom -->
              <h2 class="card-title font-size-18 m-0">
                <!-- font-size-18 = font-size: 1.8rem (18px), m-0 = margin: 0 -->
                RP Info
              </h2>
            </div>
            <!-- Content -->
            <div class="content">
              <p>Lolno</p>
            </div>
            <!-- Card footer -->
            <div
              class="px-card py-10 bg-light-lm bg-very-dark-dm rounded-bottom"
            >
              <!-- py-10 = padding-top: 1rem (10px) and padding-bottom: 1rem (10px), bg-light-lm = background-color: var(--gray-color-light) only in light mode, bg-very-dark-dm = background-color: var(--dark-color-dark) only in dark mode, rounded-bottom = rounded corners on the bottom -->
              <p class="font-size-12 m-0">
                <!-- font-size-12 = font-size: 1.2rem (12px), m-0 = margin: 0 -->
                Not all are shown.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end row-->
</template>

<script setup>
import Pagination from "/resources/js/Shared/Pagination.vue";
import { ref, watch } from "vue";

let props = defineProps({
  guild: Object,
  guild_members: Object,
});
</script>