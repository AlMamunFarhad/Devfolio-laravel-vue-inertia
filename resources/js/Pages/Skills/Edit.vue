<template>
    <Head title="Edit Skill" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Edit Skill
            </h2>
        </template>
        <div class="py-12">
            <div class="mx-auto max-w-2xl sm:px-6 lg:px-8">
                <div class="bg-white p-8 shadow-md rounded-md">
                    <form @submit.prevent="submit">
                        <div class="mb-3">
                            <InputLabel for="name" value="name" />
                            <TextInput
                                id="name"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.name"
                            />
                            <InputError
                                class="mt-2"
                                :message="$page.props.errors.name"
                            />
                        </div>
                        <div>
                            <InputLabel for="image" value="image" />
                            <TextInput
                                id="image"
                                type="file"
                                class="mt-1 block w-full"
                                @input="form.image = $event.target.files[0]"
                            />

                            <InputError
                                class="mt-2"
                                :message="$page.props.errors.image"
                            />
                        </div>
                        <div class="mt-4 flex items-center justify-end">
                            <PrimaryButton
                                class="ms-4"
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing"
                            >
                                Update
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, useForm } from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    skill: Object,
});
const form = useForm({
    name: props.skill?.name,
    image: null,
});
// It sends a PUT request to the server with the form data
const submit = () => {
    Inertia.post(`/skills/${props.skill.id}`, {
        _method: "PUT",
        name: form.name,
        image: form.image,
    });
};
</script>
