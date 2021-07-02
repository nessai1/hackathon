import Main from './pages/main';
import About from './pages/about';
import NotFound from './pages/notfound';

export default [
    { path: '/', component: Main },
    { path: '/about', component: About },
    { path: '*', component: NotFound }
];
