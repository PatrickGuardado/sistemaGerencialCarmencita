<template>
    <div class="login">
        <h2>Login</h2>
        <form @submit.prevent="login">
            <div>
                <label for="email">Correo:</label>
                <input type="email" v-model="email" required>
            </div>
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" v-model="password" required>
            </div>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</template>

<script>
import apiClient from '../axios';

export default {
    data() {
        return {
            email: '',
            password: '',
        };
    },
    methods: {
        async login() {
            try {
                const response = await apiClient.post('/login', {
                    email: this.email,
                    password: this.password,
                });
                localStorage.setItem('auth_token', response.data.access_token);
                this.$router.push('/profile');
            } catch (error) {
                console.error('Login failed', error);
            }
        },
    },
};
</script>
