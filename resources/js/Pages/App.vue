<script setup>

</script>

<template>
    <div id="app">
        <h1>Feedback app</h1>
        <p>
            <router-link to="/create" class="mr-2">New feedback</router-link>
            <router-link to="/about">Go to About</router-link>
        </p>
        <!-- route outlet -->
        <!-- component matched by the route will render here -->
        <router-view></router-view>
    </div>
</template>
