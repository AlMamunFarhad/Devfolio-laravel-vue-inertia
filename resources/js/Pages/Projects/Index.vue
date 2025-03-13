<template>
    <Head title="Projects Index" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Projects Index
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="flex justify-end">
                        <Link
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-[10px] px-4 rounded"
                            :href="route('projects.create')"
                            >Add a new project</Link
                        >
                    </div>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
                    <table
                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                    >
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                        >
                            <tr>
                                <th scope="col" class="px-6 py-3">Id</th>
                                <th scope="col" class="px-6 py-3">Name</th>
                                <th scope="col" class="px-6 py-3">Skill</th>
                                <th scope="col" class="px-6 py-3">Image</th>
                                <th scope="col" class="px-6 py-3">
                                    <span>Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="project in projects.data" :key="project.id"
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600"
                            >
                                <td class="px-6 py-4">{{ project.id }}</td>
                                <td class="px-6 py-4">{{ project.name }}</td>
                                <td class="px-6 py-4">{{ project.skill.name }}</td>
                                <td class="px-6 py-4">
                                    <img :src="project.image" alt="" class="w-28 h-20 rounded">
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a
                                        href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                        >Edit</a
                                    >
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    projects: Object,
});
</script>
