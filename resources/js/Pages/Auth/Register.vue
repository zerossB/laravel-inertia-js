<template>
    <Layout>
        <div>
            <div>
                <p v-for="(error, index) in errors" :key="index">{{ error }}</p>
            </div>
            <form @submit.prevent="submit">
                <input v-model="form.name" placeholder="Seu Nome" type="text">
                <input v-model="form.email" placeholder="Seu Email" type="email">
                <input v-model="form.password" placeholder="Sua Senha" type="password">
                <button type="submit">Enviar Cadastro</button>
            </form>
        </div>
    </Layout>
</template>

<script>
import Layout from "../../Layouts/Layout";

export default {
    name: "Register",
    props: {
        errors: Object
    },
    data: () => {
        return {
            form: {
                name: null,
                email: null,
                password: null
            }
        }
    },
    methods: {
        submit() {
            this.$inertia.post('/auth/register', this.form);
        }
    },
    components: {
        Layout
    }
}
</script>

<style scoped>

</style>
