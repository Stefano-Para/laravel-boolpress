<template>
    <header>
        <nav>
            <ul>
                <li>
                    <a class="active" href="">Home</a>
                </li>
                <li>
                    <a href="">Blog</a>
                </li>
                <li>
                    <a href="">Chi Siamo</a>
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