<template>
    <div>
        <h1>Contact</h1>
        <div>
            <div>
                <label class="label" for="name">Name</label>
                <input class="input" id="name" />
            </div>
            <div>
                <label class="label" for="email">Email</label>
                <input class="input" id="email" />
            </div>
            <div>
                <label class="label" for="description">Description</label>
                <textarea class="input" id="description" type="text" />
            </div>
            <button>
                <span>Send</span>
            </button>
        </div>
    </div>
</template>

<script>
    import Layout from './Layout'

    export default {
        layout: Layout,
    }
</script>
