import CreateMovie from './views/movies/Create';
import Movies from './views/movies/Index';

export default {
  mode: 'history',
  routes: [
    {
      path: '/movies',
      component: Movies,
      name: 'movies'
    },
    {
      path: '/movies-add',
      component: CreateMovie,
      name: 'add-movie'
    }
  ]

}


