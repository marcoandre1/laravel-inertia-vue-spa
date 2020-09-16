<template>
    <div>
        <h1>About</h1>
        <p v-html="about.content"></p>
    </div>
</template>

<script>
    import Layout from './Layout'

    export default {
        layout: Layout,

        props: {
            about: Object,
        },
    }
</script>
