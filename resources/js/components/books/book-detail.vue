<template>

    <div>

        <div class="row ml-3 mr-3">
            <div class="card col-12 col-md-6 col-lg-5  mb-5 mt-4">
                <div class="card-body">

                    <h5 v-if="book.id" class="display-4" v-html="cardTitleEdit"></h5>
                    <h5 v-else class="display-4" v-html="cardTitleNew"></h5>

                    <div>

                        <form method="post" action="/books/save">

                            <input type="hidden" name="_token" :value="csrf" />
                            <input v-if="book.id" type="hidden" name="id" :value="book.id" />


                            <div class="form-group">
                                <label for="title">Názov</label>
                                <input type="text" class="form-control" id="title" name="title"  placeholder="Názov" v-model="book.title"  required />
                            </div>

                            <div class="form-group">
                                <label for="author_id">Autor</label>
                                <select id="author_id" name="author_id" class="form-control" required>
                                    <option v-for="author in authors" :value="author.id" :selected="book.author_id == author.id">{{author.name}} {{author.surname}}</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="is_borrowed_chck">Požičaná</label>
                                <input type="checkbox" id="is_borrowed_chck" name="is_borrowed_chck" v-model="book.is_borrowed" :checked="book.is_borrowed" value="1"  />
                                <input hidden="is_borrowed" id="is_borrowed" name="is_borrowed"  :value="book.is_borrowed" />
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
        name: "book-detail",
        data() {
            return {
                csrf: window.csrfToken,
                cardTitleNew: 'Nová kniha',
                cardTitleEdit: 'Úprava knihy'
            }
        },
        computed: {
            book () {return this.$store.state.bookDetail.book},
            authors () {return this.$store.state.bookDetail.authors},
            cardTitle() {return ((typeof this.book.id !== undefined) ? 'Úprava knihy' : 'Nová kniha')}
        }

    }
</script>

<style scoped>

</style>
