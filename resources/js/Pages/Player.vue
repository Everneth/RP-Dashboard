<template>
    <div class="container-fluid" >
        <div class="row mb-15" style="background-image: url(/img/bg.jpg)">
          <div class="row">
            <img :src="'https://starlightskins.lunareclipse.studio/skin-render/default/' + player.player_uuid + '/full/'" style="width:130px;height:auto;" />
            <div class="col-2">
              <h1>{{ player.player_name }}</h1><br />
              <a href="#" class="badge">Guild Tag PH</a>
            </div>
            <p><small>{{ player.player_uuid }}</small></p>
          </div>
        </div>
      <div class="docks-card card mt-3">
      <div class="container-fluid mb-20">
        <div class="row mb-10">
          <div class="col-2">
            <strong>Roles</strong><br />
            <span
              class="badge"
              :class="badge-guild-pruple">
              Role 1</span>
            <span
              class="badge"
              :class="badge-guild-green"
              >Role 2</span
            >
          </div>
          <div class="col-2">
            <strong>Alt</strong><br />
            Alt
          </div>
          <div class="col-2">
            <strong>Tier</strong><br />
            1
          </div>
          <div class="col-2">
            <strong>Score</strong><br />
            1000
          </div>
        </div>
      <div class="row">
        <div class="col-12">
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
    </div>
    <div class="row mt-3">
      <div class="col-8">
        
        <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. Lorem Ipsum has been the industry's standard dummy text ever
          since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book. It has survived not only
          five centuries, but also the leap into electronic typesetting,
          remaining essentially unchanged. It was popularised in the 1960s with
          the release of Letraset sheets containing Lorem Ipsum passages, and
          more recently with desktop publishing software like Aldus PageMaker
          including versions of Lorem Ipsum.
        </p>
      
      </div>
      <div class="w-400 col-lg-4 mw-full"> <!-- w-400 = width: 40rem (400px), mw-full = max-width: 100% -->
      <div class="card mt-0 mb-2 mx-0 p-0"> <!-- p-0 = padding: 0 -->
        <!-- Card header -->
        <div class="px-card card-header py-10 border-bottom"> <!-- py-10 = padding-top: 1rem (10px) and padding-bottom: 1rem (10px), border-bottom: adds a border on the bottom -->
          <h4 class="card-title m-0"> <!-- font-size-18 = font-size: 1.8rem (18px), m-0 = margin: 0 -->
            Discord Profile
          </h4>
        </div>
        <!-- Content -->
        <div class="content p-3">
          <span class="badge badge-role"><i class="fa fa-solid fa-circle me-1 badge-role-king"></i>King</span>
        </div>
        <!-- Card footer -->
        <div class="px-card card-footer py-10 bg-light-lm bg-very-dark-dm rounded-bottom"> <!-- py-10 = padding-top: 1rem (10px) and padding-bottom: 1rem (10px), bg-light-lm = background-color: var(--gray-color-light) only in light mode, bg-very-dark-dm = background-color: var(--dark-color-dark) only in dark mode, rounded-bottom = rounded corners on the bottom -->
          <p class="font-size-12 m-0"> <!-- font-size-12 = font-size: 1.2rem (12px), m-0 = margin: 0 -->
            ID: {{ player.discord_id }}
          </p>
        </div>
      </div>
    
      <div class="card mt-0 mx-0 p-0"> <!-- p-0 = padding: 0 -->
        <!-- Card header -->
        <div class="px-card card-header py-10 border-bottom"> <!-- py-10 = padding-top: 1rem (10px) and padding-bottom: 1rem (10px), border-bottom: adds a border on the bottom -->
          <h4 class="card-title m-0"> <!-- font-size-18 = font-size: 1.8rem (18px), m-0 = margin: 0 -->
            Medals Case
          </h4>
        </div>
        <!-- Content -->
        <div class="content p-3">
          <p v-for="medal in medals" :key="medal.id"><img :src="'/' + medal.icon_path" :title='medal.title' width="50"/></p>
        </div>
        <!-- Card footer -->
        <div class="px-card card-footer py-10 bg-light-lm bg-very-dark-dm rounded-bottom"> <!-- py-10 = padding-top: 1rem (10px) and padding-bottom: 1rem (10px), bg-light-lm = background-color: var(--gray-color-light) only in light mode, bg-very-dark-dm = background-color: var(--dark-color-dark) only in dark mode, rounded-bottom = rounded corners on the bottom -->
          <p class="font-size-12 m-0"> <!-- font-size-12 = font-size: 1.2rem (12px), m-0 = margin: 0 -->
            Not all are shown.
          </p>
        </div>
      </div>
    </div>
    </div>
    <!--end row-->
    <div class="row">
      <div class="col-8">
        <!-- JavaScript tab plugin -->
<ul class="nav nav-tabs" id="js-tabs-1" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Activity</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="account-tab" data-bs-toggle="tab" data-bs-target="#account-tab-pane" type="button" role="tab" aria-controls="account-tab-pane" aria-selected="false">Social</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Stats</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link disabled" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Advancements</button>
  </li>
</ul>
<div class="tab-content" id="js-tabs-content-1">
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="account-tab-pane" role="tabpanel" aria-labelledby="account-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
</div>

      </div>
    </div>
    </div>
    </template>
    
    <script setup>
    import Pagination from '../Shared/Pagination';
    import { ref, watch } from "vue";
    import { Inertia } from "@inertiajs/inertia";
    
    let props = defineProps({
        player: Object,
        medals: Object,
        response_data: Object
    });
    
    </script>