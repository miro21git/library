<template>

    <div>

        <div class="row ml-3 mr-3">
            <div class="card col-12 col-md-6 col-lg-5  mb-5 mt-4">
                <div class="card-body">

                    <h5 v-if="id" class="display-4">{{cardTitleEdit}} <br> <strong>{{name}} {{surname}}</strong></h5>
                    <h5 v-else class="display-4" v-html="">{{cardTitleNew}}</h5>

                    <div>

                        <div v-if="msg" class="alert alert-success mt-2" role="alert">
                            {{msg}}
                        </div>

                        <form method="post" action="/authors/save">

                            <input type="hidden" name="_token" :value="csrf">

                            <input v-if="id" type="hidden" name="id" :value="id" />

                            <div class="form-group">
                                <label for="name">Meno</label>
                                <input type="text" class="form-control" id="name" name="name"  placeholder="Meno" :value="name" required />
                            </div>
                            <div class="form-group">
                                <label for="surname">Priezvisko</label>
                                <input type="text" class="form-control" id="surname" name="surname" placeholder="Priezvisko" :value="surname" required />
                            </div>

                            <button type="submit" class="btn btn-success">Vytvoriť</button>

                        </form>

                    </div>

                </div>
            </div>
        </div>

    </div>

</template>

<script>

    export default {
        name: "author-detail",
        data() {
            return {
                csrf: window.csrfToken,
                cardTitleNew: 'Nový autor',
                cardTitleEdit: 'Úprava autora'
            }
        },
        computed: {
            msg () {return this.$store.state.authorDetail.msg},
            id() {return this.$store.state.authorDetail.id},
            name() {return this.$store.state.authorDetail.name},
            surname() {return this.$store.state.authorDetail.surname}
        }


    }
</script>

<style scoped>

</style>
