<template>
    <Layout>
        <p>Olá {{ user }}, essa é a Home Page do nosso site!</p>
    </Layout>
</template>

<script>

import Layout from "../Layouts/Layout";

export default {
    components: {
        Layout
    },
    props: {
        user: String
    }
}
</script>

<style scoped>

</style>
