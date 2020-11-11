<template>

    <table class="table table-striped bg-white">

        <thead class="thead-dark">
            <tr>
                <th scope="col" colspan="4">Zoznam autorov</th>
                <th scope="col" colspan="1">
                    <input type="text" class="form-control float-right searchbox mb-1 mb-md-0" v-model="searchSurname"  placeholder="priezvisko..." />
                    <input type="text" class="form-control float-right searchbox" v-model="searchName"  placeholder="meno..." />
                </th>
            </tr>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Meno</th>
                <th scope="col">Priezvisko</th>
                <th scope="col">Počet kníh</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <tr v-for="(author, index) in filteredAuthors" :key="author.id">
                <th scope="row">{{index}}</th>
                <td>{{author.name}}</td>
                <td>{{author.surname}}</td>
                <td>{{author.book_count}}</td>
                <td align="right">
                    <a :href="'/authors/edit/'+author.id"><i class="fas fa-edit" role="button"></i></a>
                    <a :href="'#'"><i class="fas fa-skull-crossbones" @click="remove(author.id, index)" role="button"></i></a>
                </td>
            </tr>
        </tbody>

    </table>

</template>

<script>
    export default {
        name: "author-list",
        data() {
            return {
                searchName: "",
                searchSurname: ""
            }
        },
        computed: {
            authors() {return this.$store.state.authorList.authors},
            filteredAuthors() {
                return this.authors.filter(function (author) {
                    return author.name.toLowerCase().includes(this.searchName.toLowerCase()) && author.surname.toLowerCase().includes(this.searchSurname.toLowerCase())
                }.bind(this))
            }
        },
        methods: {

            remove(authorId, index) {
                if(confirm('Skutočne chcete vymazať tohto autora s jeho knihami?')){
                    axios.post('/authors/remove',{id:authorId}).then((r) => {
                        if(r.data.success == 1) {
                            this.authors.splice(index, 1);
                        }
                    });
                }
            }

        }
    }
</script>

<style scoped>

    .searchbox {
        max-width: 160px;
        margin-right: 2px;
    }

</style>
