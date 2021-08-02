<template>
    <header>
        <nav>
            <ul>
                <li>
                    <!-- <a class="active" href="">Home</a> -->
                    <!-- <router-link to="/">Home</router-link>      !!!!!!!!!!! OPPURE !!!!!!!!!! -->
                    <router-link :to="{ name: 'home' }">Home</router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'blog' }">Blog</router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'about' }">About</router-link>
                </li>
            </ul>
        </nav>
    </header>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
    header {
        text-align: center;
        margin-top: 20px;
        li {
            display: inline-block;
            a {
                display: inline-block;
                text-decoration: none;
                padding: 5px 10px;
                
                &.active,
                &:hover {
                    background-color: #56f928;
                }
            }
        }
    }
    
    
</style>