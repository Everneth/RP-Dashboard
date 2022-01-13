<template>
    <section>
        <header>
            <h1>EverRP Dashboard</h1>
            <Nav />
        </header>
    </section>
    <section>
        <div>
            <slot />
        </div>
    </section>
</template>
<script>
import Nav from "./Nav";
import Link from '@inertiajs/inertia-vue3';

export default {
  components: { Nav, Link }  
};
</script>
