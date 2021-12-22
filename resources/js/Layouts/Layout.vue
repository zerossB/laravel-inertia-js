<template>
    <div>
        <Link href="/">Home</Link>
        <Link href="/about">Sobre</Link>
        <Link href="/auth/register">Registre-se</Link>
        <hr>
        <div>
            <slot/>
        </div>

        <b-alert v-model="showDismissibleAlert" dismissible variant="danger">
            Dismissible Alert!
        </b-alert>
        <div v-if="flash">
            {{ flash.success }}
        </div>
    </div>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue'

export default {
    props: {
        flash: Object
    },
    data() {
        return {
            showDismissibleAlert: true
        }
    },
    components: {
        Link,
    }
}
</script>

<style scoped>

</style>
