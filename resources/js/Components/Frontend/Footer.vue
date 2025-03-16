<template>
  <footer class="bg-light-secondary dark:bg-dark-secondary py-12">
     <div class="container mx-auto">
        <div class="flex flex-col md:flex-row space-y-6 lg:space-y-0 items-center justify-between">
          <div class="flex space-x-6 items-center justify-center">
            <img :src="Farhad" class="w-20" alt="Farhad">
          </div>
          <p class="text-paragraph opacity-80 text-[15px]">
            &copy; 2025 Farhad. All rights reserved
          </p>
        </div>
     </div>
  </footer>
</template>

<script setup>
import Farhad from '/public/images/Farhad.png'

</script>

<style>

</style>