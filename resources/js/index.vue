<template>
    <div>
        <navbar></navbar>
        <div class="container mx-auto vue-body">
            <router-view></router-view>
        </div>
        <Footer></Footer>
    </div>
</template>

<script>
import Navbar from "./components/Navbar/Navbar";
import Footer from "./components/Footer/Footer";
export default {
    name: "index",
    components: {Footer, Navbar}
}
</script>

<style scoped>
.vue-body {
    min-height: 55vh;
}
</style>
