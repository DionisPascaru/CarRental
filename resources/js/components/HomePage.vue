<template>
    <div>
        <h1>HomePage</h1>
        <alert type="primary">Test</alert>
        <alert type="success">Test</alert>
        <alert type="danger">Test</alert>
    </div>
</template>

<script>
import Alert from './Alert.vue'

export default {
    components: { Alert },
    name: 'Books'
}
</script>

<style scoped>

</style>
