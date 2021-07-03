import Main from './pages/main';
import Room from './pages/room';
import About from './pages/about';
import LoginPage from './pages/LoginPage';
import NotFound from './pages/notfound';

export default [
    { path: '/', component: Main },
    { path: '/room/:code', component: Room },
    { path: '/about', component: About },
    { path: '/login', component: LoginPage},
    { path: '*', component: NotFound }
];
