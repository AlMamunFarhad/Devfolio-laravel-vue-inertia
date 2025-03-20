<template>
  <section id="skills" class="bg-light-tail-100 dark:bg-dark-navy-500 py-16">
    <div class="container mx-auto" v-motion-fade-visible>
        <div class="grid grid-cols-8 md:grid-flew-col">
            <div class="flex items-center justify-center" v-for="skill in skills.data" :key="skill.id">
                <img :src="skill.image" :alt="skill.name" class="lg:h-20">
            </div>
        </div>
    </div>
  </section>
</template>

<script setup>
defineProps({
    skills: Object,
})
</script>

