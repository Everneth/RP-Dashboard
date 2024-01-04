<template>

  <!-- Sidebar -->
  <nav class="sidebar offcanvas-start offcanvas-md" tabindex="-1" id="sidebar-example">
    <div class="offcanvas-header border-bottom border-secondary border-opacity-25 d-flex justify-content-center text-center">
      <a class="sidebar-brand" href="#">
        <img src="/img/logo.png" alt="Logo" width="200px" class="d-inline-block align-text-top">
        <!--Everneth Dashboard-->
      </a>
      <button type="button" class="btn-close d-md-none" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#sidebar-example"></button>
    </div>
    <div class="offcanvas-body">
      <a href="#" class="btn btn-discord">Login with Discord <i class="fa fab fa-discord"></i></a>
      <div class="mt-2 mb-3">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <ul class="sidebar-nav">
        <li>
          <h6 class="sidebar-header">Dashboard</h6>
        </li>
        <li><hr class="sidebar-divider"></li>
        <li class="nav-item">
          <a class="nav-link" href="/" :class="{'active': $page.component == 'Home'}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="/leaderboards">Leaderboards</a>
        </li>
        <li class="mt-3">
          <h6 class="sidebar-header">Main Menu</h6>
        </li>
        <li><hr class="sidebar-divider"></li>
        <li class="nav-item">
          <a class="nav-link disabled" href="/characters">Characters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/players" :class="{'active': $page.component == 'Players'}">Players</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/guilds" :class="{'active': $page.component == 'Guilds'}">Guilds</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/map" :class="{'active': $page.component == 'Map'}">Map</a>
        </li>
        <li class="mt-3">
          <h6 class="sidebar-header">Admin</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/medals" :class="{'active': $page.component == 'Admin/Medals'}">Medals</a>
        </li>
      </ul>
    </div>
  </nav>

    <!-- Sidebar end -->
    
        <!-- Content wrapper start -->
        <div class="bg-body overflow-hidden ps-md-sbwidth m-3">
            <slot />
        </div>
        <!-- Content wrapper end -->
</template>
<script>

</script>