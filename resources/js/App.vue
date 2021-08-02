<template>
    <div class="container">

        <Header />

        <main>
            <!-- component matched by route will rendere here  -->
            <router-view>

            </router-view>
        </main>

        <Footer />

    </div>
</template>

<script>
// import axios from 'axios';     // questo è un import locale
// import WorkInProgress from './components/WorkInProgress';
import Header from './components/Header';
import Footer from './components/Footer';

export default {
    name: 'App',
    components: {
        Header,
        Footer,
    }
}
</script>

<style lang="scss">
    @import '../sass/front.scss';
</style>