import { createRouter, createWebHistory } from 'vue-router'
import Dashboard from '../views/Dashboard.vue'
import Login from '../views/Login.vue';
import Profile from '../views/Profile.vue';
import VentasPProducto from '../views/VentasPProducto.vue';
import AusentismoLaboralSemanal from '../views/AusentismoLaboralSemanal.vue';
import CicloVidaProducto from '../views/CicloVidaProducto.vue';
import ClasificacionPuestosT from '../views/ClasificacionPuestosT.vue';
import AreaRPersonal from '../views/AreaRPersonal.vue';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/AboutView.vue')
    },
    {
      path: '/login',
      name: 'Login',
      component: Login,
    },
    {
      path: '/reporte-ventas',
      name: 'Ventas por producto',
      component: VentasPProducto,
      meta: { requiresAuth: true },
    },
    {
      path: '/',
      name: 'Menú principal',
      component: Dashboard,
      meta: { requiresAuth: true },
    },
    {
      path: '/reporte-rotacion-personal',
      name: 'Área de rotación del personal',
      component: AreaRPersonal,
      meta: { requiresAuth: true },
    },
    {
      path: '/reporte-clasificacion-puestos',
      name: 'Clasificación de puestos trimestral',
      component: ClasificacionPuestosT,
      meta: { requiresAuth: true },
    },
    {
      path: '/reporte-ciclo-vida',
      name: 'ciclo de vida de producto',
      component: CicloVidaProducto,
      meta: { requiresAuth: true },
    },
    {
      path: '/reporte-ausentismo',
      name: 'Ausentismo laboral semanal',
      component: AusentismoLaboralSemanal,
      meta: { requiresAuth: true },
    },
    {
        path: '/profile',
        name: 'Profile',
        component: Profile,
        meta: { requiresAuth: true },
    },
  ]
})

// Se agrega la siguiente función para proteger las rutas que requieren autenticación
router.beforeEach((to, from, next) => {

  // Se obtiene el valor de la propiedad requiresAuth de la ruta a la que se intenta acceder
  const requiresAuth = to.matched.some(record => record.meta.requiresAuth);
  const isAuthenticated = !!localStorage.getItem('auth_token');

  // Si se intenta acceder a una ruta que requiere autenticación y el usuario no está autenticado, se redirige a la ruta de login
  if (requiresAuth && !isAuthenticated) {
      next('/login');
  } else {
      next();
  }
});

export default router