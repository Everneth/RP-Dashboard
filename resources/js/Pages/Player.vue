<template>
    <div class="container-fluid" >
        <div class="row mb-15" style="background-image: url(/img/bg.jpg)">
          <div class="row mb-2">            
            <div class="col-2">
              <img :src="'https://starlightskins.lunareclipse.studio/skin-render/default/' + player.player_uuid + '/full/'" style="width:130px;height:auto;" />
            </div>
            <div class="col-2">
              <h1>{{ player.player_name }}</h1><br />
              <a href="#" class="badge badge-guild-purple">Alcoholics</a>
              <p><small>{{ player.player_uuid }}</small></p>
            </div>
            <div class="col-8 align-self-end ml-auto text-end">
              <button type="button" class="btn btn-primary ms-1"><i class="fa fas fa-sync me-1"></i>Sync</button>
              <button type="button" class="btn btn-success ms-1"><i class="fa fas fa-pencil-alt me-1"></i>Edit Profile</button>
            </div>
          </div>
        </div>
      <div class="docks-card card mt-3">
      <div class="container-fluid mb-20">
        <div class="row mb-10">
          <div class="col-2">
            <strong>Team</strong><br />
            <span
              class="badge badge-guild-blue">
              King</span>
          </div>
          <div class="col-2">
            <strong>Alt</strong><br />
            None
          </div>
          <div class="col-2">
            <strong>Tier</strong><br />
            1
          </div>
          <div class="col-2">
            <strong>Score</strong><br />
            1000
          </div>
          <div class="col-2">
            <strong>Last Seen</strong><br />
            10236 days ago
          </div>
        </div>
      <div class="row">
        <div class="col-12">
          <strong>About me</strong><br />

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
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
    <table class="table">
      <tbody>
      <tr>
        <td class="table-danger">[timestamp] Faceman has left the server</td>
      </tr>
      <tr>
        <td class="table-success">[timestamp] Faceman has joined the server</td>
      </tr>
      <tr>
        <td>[timestamp] Player profile updated.</td>
      </tr>
    </tbody>
    </table>
  </div>
  <div class="tab-pane fade" id="account-tab-pane" role="tabpanel" aria-labelledby="account-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
</div>

      <!--https://mainmap.hssrv.com/#world:-2074:54:-1051:88:3.12:0.94:0:0:perspective-->
      <!--                <iframe src="https://mainmap.hssrv.com/#world:0:1:0:296:0:0:0:0:perspective" style="border:0px #ffffff none;" name="mainmap" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="800px" width="100%" allowfullscreen></iframe>

      -->
      <div class="card mt-0 mb-2 mx-0 p-0"> <!-- p-0 = padding: 0 -->
        <!-- Card header -->
        <div class="px-card card-header py-10 border-bottom"> <!-- py-10 = padding-top: 1rem (10px) and padding-bottom: 1rem (10px), border-bottom: adds a border on the bottom -->
          <h4 class="card-title m-0"> <!-- font-size-18 = font-size: 1.8rem (18px), m-0 = margin: 0 -->
            Current Season Base
          </h4>
        </div>
        <!-- Content -->
        <div class="content p-3">
          <iframe src="https://mainmap.hssrv.com/#world:-2074:54:-1051:88:3.12:0.94:0:0:perspective" style="border:0px #ffffff none;" name="mainmap" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="400px" width="100%" allowfullscreen></iframe>
        </div>
        <!-- Card footer -->
        <div class="px-card card-footer py-10 bg-light-lm bg-very-dark-dm rounded-bottom"> <!-- py-10 = padding-top: 1rem (10px) and padding-bottom: 1rem (10px), bg-light-lm = background-color: var(--gray-color-light) only in light mode, bg-very-dark-dm = background-color: var(--dark-color-dark) only in dark mode, rounded-bottom = rounded corners on the bottom -->
          <p class="font-size-12 m-0"> <!-- font-size-12 = font-size: 1.2rem (12px), m-0 = margin: 0 -->
            X: -2074 Z: -1051
          </p>
        </div>
      </div>
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
    
      <div class="card mt-0 mx-0 p-0 mb-2"> <!-- p-0 = padding: 0 -->
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
      <div class="card mt-0 mx-0 p-0 mb-2"> <!-- p-0 = padding: 0 -->
        <!-- Card header -->
        <div class="px-card card-header py-10 border-bottom"> <!-- py-10 = padding-top: 1rem (10px) and padding-bottom: 1rem (10px), border-bottom: adds a border on the bottom -->
          <h4 class="card-title m-0"> <!-- font-size-18 = font-size: 1.8rem (18px), m-0 = margin: 0 -->
            RP Character
          </h4>
        </div>
        <!-- Content -->
        <div class="content p-3">
          No character created
        </div>
        <!-- Card footer -->
        <div class="px-card card-footer py-10 bg-light-lm bg-very-dark-dm rounded-bottom"> <!-- py-10 = padding-top: 1rem (10px) and padding-bottom: 1rem (10px), bg-light-lm = background-color: var(--gray-color-light) only in light mode, bg-very-dark-dm = background-color: var(--dark-color-dark) only in dark mode, rounded-bottom = rounded corners on the bottom -->
          <p class="font-size-12 m-0"> <!-- font-size-12 = font-size: 1.2rem (12px), m-0 = margin: 0 -->
            Currrent season: Not active
          </p>
        </div>
      </div>
      <div class="card mt-0 mx-0 p-0 mb-2"> <!-- p-0 = padding: 0 -->
        <!-- Card header -->
        <div class="px-card card-header py-10 border-bottom"> <!-- py-10 = padding-top: 1rem (10px) and padding-bottom: 1rem (10px), border-bottom: adds a border on the bottom -->
          <h4 class="card-title m-0"> <!-- font-size-18 = font-size: 1.8rem (18px), m-0 = margin: 0 -->
            Player History
          </h4>
        </div>
        <!-- Content -->
        <div class="content p-3">
          <!-- First dropdown -->
          <div class="dropdown">
            <button class="btn btn-light dropdown-toggle me-3 mb-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Season 1
            </button>
            <ul class="dropdown-menu">
              <li><h6 class="dropdown-header">Faeman's Season 1</h6></li>
              <li><a href="#" class="dropdown-item">Wiki page</a></li>
              <li><a href="#" class="dropdown-item">Builds</a></li>
              <li><a href="#" class="dropdown-item">Gallery</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item disabled">RP Season</a></li>
            </ul>
            <button class="btn btn-light dropdown-toggle me-3 mb-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Season 2
            </button>
            <ul class="dropdown-menu">
              <li><h6 class="dropdown-header">Faeman's Season 2</h6></li>
              <li><a href="#" class="dropdown-item">Wiki page</a></li>
              <li><a href="#" class="dropdown-item">Builds</a></li>
              <li><a href="#" class="dropdown-item">Gallery</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item disabled">RP Season</a></li>
            </ul>
            <button class="btn btn-light dropdown-toggle me-3 mb-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Season 3
            </button>
            <ul class="dropdown-menu">
              <li><h6 class="dropdown-header">Faeman's Season 3</h6></li>
              <li><a href="#" class="dropdown-item">Wiki page</a></li>
              <li><a href="#" class="dropdown-item">Builds</a></li>
              <li><a href="#" class="dropdown-item">Gallery</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item disabled">RP Season</a></li>
            </ul>
            <button class="btn btn-success dropdown-toggle me-3 mb-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Season 9
            </button>
            <ul class="dropdown-menu">
              <li><h6 class="dropdown-header">Faeman's Season 9</h6></li>
              <li><a href="#" class="dropdown-item">Wiki page</a></li>
              <li><a href="#" class="dropdown-item">Builds</a></li>
              <li><a href="#" class="dropdown-item">Gallery</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item disabled">RP Season</a></li>
            </ul>
          </div>
        </div>
        <!-- Card footer -->
        <div class="px-card card-footer py-10 bg-light-lm bg-very-dark-dm rounded-bottom"> <!-- py-10 = padding-top: 1rem (10px) and padding-bottom: 1rem (10px), bg-light-lm = background-color: var(--gray-color-light) only in light mode, bg-very-dark-dm = background-color: var(--dark-color-dark) only in dark mode, rounded-bottom = rounded corners on the bottom -->
          <p class="font-size-12 m-0"> <!-- font-size-12 = font-size: 1.2rem (12px), m-0 = margin: 0 -->
            
          </p>
        </div>
      </div>
    </div>
    </div>
    <!--end row-->
    <div class="row">
      
    </div>
    </div>
    </template>
    
    <script setup>
    import Pagination from '/resources/js/Shared/Pagination.vue';
    import { ref, watch } from "vue";
    
    let props = defineProps({
        player: Object,
        medals: Object,
        response_data: Object
    });
    
    </script>