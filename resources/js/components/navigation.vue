<template>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="navbar-collapse" id="navbarText">

            <ul class="navbar-nav mr-auto">

                <li v-for="menuItem in menu">
                    <a class="nav-link" v-bind:class="{ active: menuItem.url == activeMenuItem }" v-bind:href="menuItem.url">
                        <i v-if="menuItem.icon" class="fas ml-2 mr-2 ml-md-0 mr-md-0" :class="menuItem.icon"></i>
                        <span class="d-none d-md-inline-block">{{menuItem.name}}</span>
                    </a>
                </li>

            </ul>

            <span class="navbar-text d-none d-lg-inline-block">
                 Library
            </span>
        </div>
    </nav>
</template>

<script>
    export default {
        name: "navigation",
        data: function() {
            return  {
                menu: [
                    {name: "Dashboard", url:"/", 'icon': 'fa-home'},
                    {name: "Zoznam kníh", url:"/books", 'icon': 'fa-book'},
                    {name: "Nová kniha", url:"/books/create", 'icon': 'fa-book-medical'},
                    {name: "Zoznam autorov", url:"/authors", 'icon': 'fa-user-friends'},
                    {name: "Nový autor", url:"/authors/create", 'icon': 'fa-user-plus'}
                ],
                activeMenuItem: window.location.pathname
            }
        }
    }
</script>

<style scoped>

    .navbar {
        padding: 0rem 0.8rem 0rem 0.8rem;
    }

    .nav-link {
        padding: 0.8rem 1rem;
    }

    .nav-link:hover {
        color: #242424 !important;
        background: #fdfdfe;
    }

    .active {
        color: #242424;
        background: #2a9055;
    }

</style>
