<template>
    <div title="Welcome">
        <h1>Welcome</h1>
        <p>{{ home.title }}</p>
    </div>
</template>

<script>
    import Layout from './Layout'

    export default {
        layout: Layout,

        props: {
            home: Object,
        },
    }
</script>
