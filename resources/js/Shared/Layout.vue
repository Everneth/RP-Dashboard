<template>
  <!-- Modals go here -->
  <!-- Reference: https://www.gethalfmoon.com/docs/modal -->

  <!-- Page wrapper start -->
  <div class="page-wrapper with-navbar with-sidebar" data-sidebar-type="full-height overlayed-sm-and-down">
    <!-- Sticky alerts (toasts), empty container -->
    <!-- Reference: https://www.gethalfmoon.com/docs/sticky-alerts-toasts -->
    <div class="sticky-alerts"></div>
            <Nav />
    <!-- Sidebar overlay -->
    <div class="sidebar-overlay" onclick="halfmoon.toggleSidebar()"></div>

    <!-- Sidebar start -->
    <div class="sidebar">
      <!-- Reference: https://www.gethalfmoon.com/docs/sidebar -->
  <div class="sidebar-menu">
    <h5 class="sidebar-title">RP Dashboard</h5>
    <div class="sidebar-divider"></div>
    <a href="#" class="sidebar-link sidebar-link-with-icon">
      <span class="sidebar-icon bg-transparent justify-content-start mr-0"> <!-- bg-transparent = background-color: transparent, justify-content-start = justify-content: flex-start, mr-0 = margin-right: 0 -->
        <i class="fas fa-tachometer-alt" aria-hidden="true"></i>
      </span>
      Dashboard
    </a>
    <a href="#" class="sidebar-link sidebar-link-with-icon">
      <span class="sidebar-icon bg-transparent justify-content-start mr-0"> <!-- bg-transparent = background-color: transparent, justify-content-start = justify-content: flex-start, mr-0 = margin-right: 0 -->
        <i class="fas fa-trophy" aria-hidden="true"></i>
      </span>
      Leaderboards
    </a>
    <br />
    <h5 class="sidebar-title">Resources</h5>
    <div class="sidebar-divider"></div>
    <a href="/guilds" class="sidebar-link sidebar-link-with-icon">
      <span class="sidebar-icon bg-primary text-white rounded-circle"> <!-- bg-primary = background-color: var(--primary-color), text-white = color: white, rounded-circle = border-radius: 50% --> 
        <i class="fab fa-fort-awesome" aria-hidden="true"></i>
      </span>
      Guilds
    </a>
    <a href="#" class="sidebar-link sidebar-link-with-icon">
      <span class="sidebar-icon bg-success text-dark rounded-circle"> <!-- bg-success = background-color: var(--success-color), text-dark = color: var(--lm-base-text-color), rounded-circle = border-radius: 50% -->
        <i class="fas fa-users" aria-hidden="true"></i>
      </span>
      Players
    </a>
    <a href="#" class="sidebar-link sidebar-link-with-icon">
      <span class="sidebar-icon bg-secondary text-dark rounded-circle"> <!-- bg-secondary = background-color: var(--secondary-color), text-dark = color: var(--lm-base-text-color), rounded-circle = border-radius: 50% -->
        <i class="fas fa-map-marked-alt" aria-hidden="true"></i>
      </span>
      Map
    </a>
    <a href="#" class="sidebar-link sidebar-link-with-icon">
      <span class="sidebar-icon bg-danger text-white rounded-circle"> <!-- bg-danger = background-color: var(--danger-color), text-white = color: white, rounded-circle = border-radius: 50% -->
        <i class="fas fa-chevron-left" aria-hidden="true"></i>
      </span>
      Back to Everneth.com
    </a>
  </div>
    </div>
    <!-- Sidebar end -->
    
        <!-- Content wrapper start -->
        <div class="content-wrapper">
            <slot />
        </div>
        <!-- Content wrapper end -->
    
    </div>
    <!-- Page wrapper end -->
</template>
<script>
import Nav from "./Nav";
import Link from '@inertiajs/inertia-vue3';

export default {
  components: { Nav, Link }  
};
</script>