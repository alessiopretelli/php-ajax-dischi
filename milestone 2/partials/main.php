<main>
    <div :class="((song.author == authorsinput) || (authorsinput == 'All')) ? 'block' : 'none'" class="card" v-for="song in songs">
        <img :src="song.poster" alt="">
        <h3>{{song.title}}</h3>
        <p>{{song.author}}</p>
        <p>{{song.year}}</p>
    </div>
</main>