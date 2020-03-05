<template>
  <v-card>
    <v-card-title>
      Movies
      <v-spacer></v-spacer>
      <v-text-field
        v-model="search"
        append-icon="mdi-magnify"
        label="Search"
        single-line
        hide-details
      ></v-text-field>
    </v-card-title>

    <v-data-table
      :items="movies"
      :headers="headers"
      :search="search">

      <template v-slot:item.rating="{ item }">
        <v-chip :color="getColor(item.rating)" dark>{{ item.rating }}</v-chip>
      </template>

    </v-data-table>
  </v-card>
</template>

<script>
  export default {
    data() {
      return {
        movies: [],
        headers: [
          {
            text: 'Movie Title', value: 'title'
          },
          {
            text: 'Genre', value: 'genre'
          },
          {
            text: 'Date Watched', value: 'date_watched'
          },
          {
            text: 'Rating', value: 'rating'
          },
          {
            text: 'Comments', value: 'comments'
          },
        ],
        search: ''
      }
    },
    mounted() {
      this.fetchMovies();
    },
    methods: {
      fetchMovies: function() {
        axios.get('/api/movies')
        .then(response => {
          this.movies = response.data;
        })
        .catch(error => {
          console.log(error);
        })
      },
      getColor (rating) {
        if (rating < 4) return 'red'
        else if (rating < 8) return 'orange'
        else return 'green'
      },
    }
  }
</script>

<style scoped>

</style>
