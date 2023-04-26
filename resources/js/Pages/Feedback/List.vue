<script setup>
import {Head} from '@inertiajs/vue3';
import {useStore} from "vuex";

const store = useStore()
console.log(store);

</script>

<template>
    <Head title="Feedback list"/>

    <div class="relative overflow-x-auto dark:bg-gray-900 antialiased min-h-screen">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Subject
                </th>
                <th scope="col" class="px-6 py-3">
                    Message
                </th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="request in store.state.request">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-white">
                    {{ request[0] }}
                </th>
                <td class="px-6 py-4">
                    {{ request[1] }}
                </td>
                <td class="px-6 py-4">
                    {{ request[2] }}
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</template>
