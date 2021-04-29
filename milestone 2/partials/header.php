<header>
    <div class="logo">
        <img src="https://upload.wikimedia.org/wikipedia/commons/7/71/Spotify.png" alt="">
    </div>
    <div class="select">
        <label>Select by author:</label>
        <select v-model='authorsinput' name="select by author" @change='selectauthor'>
            <option>All</option>
            <option v-for="author in authors">{{author}}</option>
        </select>
    </div>
</header>