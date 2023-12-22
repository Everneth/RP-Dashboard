<template>

  <!-- Sidebar -->
  <nav class="sidebar offcanvas-start offcanvas-md" tabindex="-1" id="sidebar-example">
    <div class="offcanvas-header border-bottom border-secondary border-opacity-25">
      <a class="sidebar-brand" href="#">
        <img src="/img/logo.png" alt="Logo" width="200px" class="d-inline-block align-text-top">
        <!--Everneth Dashboard-->
      </a>
      <button type="button" class="btn-close d-md-none" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#sidebar-example"></button>
    </div>
    <div class="offcanvas-body">
      <div class="mt-2 mb-3">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <ul class="sidebar-nav">
        <li>
          <h6 class="sidebar-header">Dashboard</h6>
        </li>
        <li><hr class="sidebar-divider"></li>
        <li class="nav-item">
          <a class="nav-link active" href="/" aria-current="page">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/leaderboards">Leaderboards</a>
        </li>
        <li class="mt-3">
          <h6 class="sidebar-header">Main Menu</h6>
        </li>
        <li><hr class="sidebar-divider"></li>
        <li class="nav-item">
          <a class="nav-link" href="/characters">Characters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/players">Players</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/guilds">Guilds</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/map">Map</a>
        </li>
      </ul>
    </div>
  </nav>
 
  <!-- Sidebar toggle -->
  <button type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar-example" class="btn btn-secondary d-md-none">
    <i class="fa-light fa-sidebar me-1"></i> Sidebar
  </button>
    <!-- Sidebar end -->
    
        <!-- Content wrapper start -->
        <div class="bg-body overflow-hidden ps-md-sbwidth">
            <slot />
        </div>
        <!-- Content wrapper end -->
</template>
<script>
import Nav from "./Nav";
import Link from '@inertiajs/inertia-vue3';
import halfmoon from 'halfmoon';

export default {
  components: { Nav, Link }, 
  methods: {
    toggleDarkMode: function()
      {
        halfmoon.toggleDarkMode();
      },
    toggleSidebar: function()
      {
        halfmoon.toggleSidebar();
      }
 }
};
</script>