<template>
<section id="about" class="section bg-light-secondary dark:bg-dark-secondary">
    <div class="container mx-auto" v-motion-fade-visible>
       <div class="flex flex-col xl:flex-row gap-24">
        <img :src="AboutImg" alt="about" class="object-cover h-full w-[566px] md:mx-auto lg:mx-0 rounded-2xl">
        <div class="flex flex-col items-center text-center lg:items-start lg:text-left">
            <div class="flex flex-col">
                <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3">
                    About Me
                </h2>
                <p class="mb-4 text-accent">Freelance Web Developer</p>
                <hr class="mb-8 opacity-90 dark:opacity-5">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quibusdam mollitia nam labore quisquam praesentium quaerat ea, quidem odio, eveniet quis officiis vel blanditiis? Nihil <br/><br/> voluptatum iure pariatur necessitatibus consequuntur, minus accusamus perspiciatis excepturi doloremque sit voluptas possimus ut consequatur, odio, qui ad neque perferendis! Quae nisi vero ipsam reprehenderit.</p>
            </div>
            <a href="" class="btn btn-md bg-accent text-light-tail-100 mt-7">Contact Me</a>
        </div>
       </div>
    </div>
</section>
</template>

<script setup>
import AboutImg from '/public/images/About.jpeg'
</script>

<style>

</style>