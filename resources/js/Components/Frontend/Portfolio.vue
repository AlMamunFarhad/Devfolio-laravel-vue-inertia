<template>
    <section
        id="portfolio"
        class="section bg-light-primary dark:bg-dark-primary min-h-[1400px]"
    >
        <div class="container mx-auto" v-motion-fade-visible>
            <div class="flex flex-col items-center text-center">
                <h2 class="section-title">My latest works</h2>
                <p class="section-subtitle">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Amet quis illo, possimus dolores delectus tempora?
                </p>
            </div>
        </div>
        <Projects :skills="skills" :projects="projects"/>
    </section>
</template>

<script setup>
import Projects from "./Projects.vue";

defineProps({
    skills: Object,
    projects: Object
})
</script>
