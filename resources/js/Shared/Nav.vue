<template>
    <!-- Navbar start -->
        <nav class="navbar">
            <div class="navbar-content">
                <button id="toggle-sidebar-btn" class="btn btn-action" type="button" @toggleSidebar="toggleSidebar()">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>
            <a href="#" class="navbar-brand ml-10 ml-sm-20">
                <span class="d-none d-sm-flex">Logo PH</span>
            </a>
            <div class="navbar-content ml-auto">
                <button class="btn btn-action mr-5" type="button" @toggleDarkMode="toggleDarkMode()">
                    <i class="far fa-moon" aria-hidden="true"></i>
                    <span class="sr-only">Toggle dark mode</span>
                </button>
                <a href="#" class="btn btn-primary" role="button">Login</a>
            </div>
        </nav>
        <!-- Navbar end -->
</template>
<script>
import { Link } from '@inertiajs/inertia-vue3';
export default {
    components: { Link },
};
</script>