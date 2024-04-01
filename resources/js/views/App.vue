<script>
import { defineComponent } from "vue";
import AppLayout from "../layout/AppLayout.vue"

export default defineComponent({
    components: { AppLayout },
});
</script>
<template>
    <router-view />
<!--    <h1>Hello World</h1>-->
</template>
<style scoped lang="scss"></style>
