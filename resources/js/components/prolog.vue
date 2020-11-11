<template>

    <div>

        <img class="card-img-top" src="/images/library.jpg" alt="Card image cap">


            <div class="row ml-3 mr-3">
                <div class="card col-12 col-md-8 mb-5 mt-4">
                    <div class="card-body">

                        <h5 class="display-4">Knižnica</h5>

                        <div class="properties">
                            <p class="card-text">Laravel 8</p>
                            <p class="card-text">Vue&Vuex&Axios</p>
                            <p class="card-text">Bootstrap 4</p>
                            <p class="card-text">FontAwesome</p>
                            <p class="card-text">Responzívny dizajn</p>
                            <p class="card-text">Zoznam kníh</p>
                            <p class="card-text">Zoznam autorov</p>
                            <p class="card-text">Vytvorenie/úprava knihy</p>
                            <p class="card-text">Vytvorenie/uprava autora</p>
                            <p class="card-text">Úprava stavu výpožičky</p>
                            <p class="card-text">Filtre autorov a kníh</p>
                        </div>

                        <p class="card-text text-right">
                            <small class="text-muted author">@Miroslav Brezina</small>
                        </p>

                    </div>
                </div>
            </div>


    </div>

</template>

<script>
    export default {
        name: "prolog",
        data: function() {
            return  {
            }
        }
    }
</script>

<style scoped>

    .properties p {
        font-size: large;
    }

    .properties p::before {
        color:#2a9055;
        content: '✓ ';
    }

    .content {
        margin:10px;
    }

</style>
