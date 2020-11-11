<template>

    <div>

        <div v-if="borrowSaveSuccess" class="alert alert-success alert-absolute" role="alert">
            Úspešne uložené!!!
        </div>

        <table class="table table-striped bg-white">

            <thead class="thead-dark">
                <tr>
                    <th scope="col" colspan="3">Zoznam kníh</th>
                    <th scope="col" colspan="2">
                        <input type="text" class="form-control float-right searchbox mb-1 mb-md-0" v-model="searchTitle"  placeholder="názov..." />
                        <input type="text" class="form-control float-right searchbox" v-model="searchAuthor"  placeholder="autor..." />
                        <span class="float-right mr-3"><span>Iba prečítané </span><input type="checkbox" v-model="searchOnlyBorrowed"></span>
                    </th>
                </tr>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Názov</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Prečítaná</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <tr v-for="(book, index) in filteredBooks" :key="book.id">
                    <th scope="row">{{index}}</th>
                    <td>{{book.title}}</td>
                    <td>{{book.author.name}} {{book.author.surname}}</td>
                    <td>
                        <input type="checkbox" v-model="book.is_borrowed" @change="changeBorrowStatus(book)" name="is_borrowed" />
                    </td>
                    <td align="right">
                        <a :href="'/books/edit/'+book.id"><i class="fas fa-edit" role="button"></i></a>
                        <a :href="'#'"><i class="fas fa-skull-crossbones" @click="remove(book.id, index)" role="button"></i></a>
                    </td>
                </tr>
            </tbody>

        </table>

    </div>

</template>

<script>
    export default {
        name: "book-list",
        data() {
            return {
                borrowSaveSuccess:false,
                searchTitle: "",
                searchAuthor: "",
                searchOnlyBorrowed: 0
            }
        },
        computed: {
            books() {return this.$store.state.bookList.books},
            filteredBooks() {
                return this.books.filter(function (book) {
                    return book.title.toLowerCase().includes(this.searchTitle.toLowerCase()) &&
                        (book.author.name.toLowerCase().includes(this.searchAuthor.toLowerCase()) ||
                        book.author.surname.toLowerCase().includes(this.searchAuthor.toLowerCase())) &&
                        ((this.searchOnlyBorrowed && book.is_borrowed == this.searchOnlyBorrowed) || !this.searchOnlyBorrowed)

                }.bind(this));
            }
        },
        methods: {
            changeBorrowStatus(book) {
                axios.post('/books/save',{
                    'id': book.id,
                    'is_borrowed': book.is_borrowed
                }).then((r) => {
                    if(r.data.success == 0) {
                        return;
                    }
                    this.borrowSaveSuccess = true;
                    setTimeout(function () {
                        this.borrowSaveSuccess = false;
                    }.bind(this),1500);

                });
            },
            remove(bookId, index) {
                if(confirm('Skutočne chcete vymazať túto knihu?')){
                    axios.post('/books/remove',{id:bookId}).then((r) => {
                        if(r.data.success == 1) {
                            this.books.splice(index, 1);
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
