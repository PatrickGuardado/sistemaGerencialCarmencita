<template>
    <div class="profile">
        <h2>Perfil de Usuario</h2>
        <div v-if="user">
            <p><strong>Nombre:</strong> {{ user.name }}</p>
            <p><strong>Correo:</strong> {{ user.email }}</p>
            <p><strong>Rol:</strong> {{ user.role }}</p>
            <button @click="logout">Cerrar Sesión</button>
        </div>
    </div>
</template>

<script>
import apiClient from '../axios';

export default {
    data() {
        return {
            user: null,
        };
    },
    async created() {
        try {
            const response = await apiClient.get('/user');
            this.user = response.data;

            // Obtener el nombre del rol basado en el role_id
            const roleResponse = await apiClient.get(`/role/${this.user.role_id}`);
            this.user.role = roleResponse.data.role;
            
        } catch (error) {
            console.error('Failed to fetch user data', error);
        }
    },
    methods: {
        logout() {
            localStorage.removeItem('auth_token');
            this.$router.push('/login');
        },
    },
};
</script>
