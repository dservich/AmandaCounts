<template>
  <v-card>
    <v-card-title>Add a Movie</v-card-title>

    <v-text-field
      label="Movie Title"
      v-model="title"></v-text-field>

    <v-select
      :items="genreOptions"
      label="Genre(s)"
      :multiple="true"
      v-model="genre"></v-select>

    <v-menu
      v-model="date_watched"
      :close-on-content-click="false"
      :nudge-right="40"
      transition="scale-transition"
      offset-y
      min-width="290px"
    >
      <template v-slot:activator="{ on }">
        <v-text-field
          v-model="date"
          label="When did you watch this movie?"
          readonly
          v-on="on"
        ></v-text-field>
      </template>
      <v-date-picker v-model="date" @input="date_watched = false"></v-date-picker>
    </v-menu>

    <v-select
      :items="ratingOptions"
      label="Rating"
      v-model="rating"></v-select>

    <v-textarea
      v-model="comments"
      label="Comments"></v-textarea>

    <v-btn block color="secondary" dark @click="storeMovie" :disabled="submitted">Add Movie</v-btn>
    <v-btn block color="secondary" light @click="resetForm" v-show="submitted">Add Another Movie</v-btn>
  </v-card>
</template>

<script>
  export default {
    data() {
      return {
        title: '',
        genre: '',
        date: '',
        date_watched: false,
        rating: '',
        comments: '',
        ratingOptions: [
          { text: '10', value: '10' },
          { text: '9', value: '9' },
          { text: '8', value: '8' },
          { text: '7', value: '7' },
          { text: '6', value: '6' },
          { text: '5', value: '5' },
          { text: '4', value: '4' },
          { text: '3', value: '3' },
          { text: '2', value: '2' },
          { text: '1', value: '1' },
        ],
        genreOptions: [
          { text: 'Action', value: 'Action' },
          { text: 'Comedy', value: 'Comedy' },
          { text: 'Documentary', value: 'Documentary' },
          { text: 'Drama', value: 'Drama' },
          { text: 'Fantasy', value: 'Fantasy' },
          { text: 'Horror', value: 'Horror' },
          { text: 'Kids', value: 'Kids' },
          { text: 'Musical', value: 'Musical' },
          { text: 'Mystery', value: 'Mystery' },
          { text: 'Romance', value: 'Romance' },
          { text: 'Sci-Fi', value: 'Sci-Fi' },
          { text: 'Superhero', value: 'Superhero' },
          { text: 'Thriller', value: 'Thriller' },
        ],
        submitted: false
      }
    },
    mounted() {

    },
    methods: {
      storeMovie: function () {
        axios.post('/api/movies',
          {
            title: this.title,
            genre: this.genre,
            date_watched: this.date,
            rating: this.rating,
            comments: this.comments,
          })
        .then(response => {
          this.submitted = true;
          console.log(response);
        })
        .catch(error => {
          console.log(error);
        })
      },
      resetForm: function() {
        this.title = '';
        this.genre = null;
        this.date = null;
        this.rating = null;
        this.comments = '';

        this.submitted = false;
      }
    }
  }
</script>

<style scoped>

</style>
