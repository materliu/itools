<template>
    <div>
        <app-header></app-header>
        <app-body></app-body>
        <app-footer></app-footer>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('App Component mounted.')
        },
        components: {
            'app-body': require('./AppBody.vue'),
            'app-footer': require('./AppFooter.vue'),
            'app-header': require('./AppHeader.vue')
        }
    }
</script>

