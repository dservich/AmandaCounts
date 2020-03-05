<template>
    <v-app>
        <v-navigation-drawer app>
          <router-link :to="{name: 'add-movie'}">Add Movie</router-link>
          <router-link :to="{name: 'movies'}">Movies</router-link>
        </v-navigation-drawer>

        <v-app-bar app>
            <h1>Amanda's Item Counter</h1>
        </v-app-bar>

        <!-- Sizes your content based upon application components -->
        <v-content>

            <!-- Provides the application the proper gutter -->
            <v-container fluid>

                <!-- If using vue-router -->
                <router-view></router-view>
            </v-container>
        </v-content>

        <v-footer app>
            <h4>Creation by Dan 2020</h4>
        </v-footer>
    </v-app>
</template>

<script>
  export default {
    name: "App",
    data() {
      return {

      }
    }
  }
</script>

<style scoped>

</style>
