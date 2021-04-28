var app = new Vue({
    el: '#app',
    data: {
        songs: [],
        authors: [],
        authorsinput: 'All',
    },
    mounted() {
        axios
            .get('http://localhost:8888/PHPdischi/partials/server.php')
            .then((result) => {

                // da notare che il percorso per accedere ai data, in questo caso, e' 'result.data'
                result.data.forEach(element => {
                    this.songs.push(element);
                });

                console.log(this.songs);
                this.addauthor();
                console.log("Authors:" + this.authors);
            });
    },
    methods: {
        addauthor() {

            for (let i = 0; i < this.songs.length; i++) {
                    
                var v = 0;
                var tmp2 = this.songs[i].author;

                for (ii = 0; ii < this.authors.length; ii++) {

                    if (tmp2 == this.authors[ii]) {
                        v = 1;
                    }

                }

                if (v == 0) {
                    this.authors.push(tmp2);
                }

            }

        }
    }
});
