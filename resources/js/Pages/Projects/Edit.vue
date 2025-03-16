<template>
    <Head title="New Project" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                New Project
            </h2>
        </template>
        <div class="py-12">
            <div class="mx-auto max-w-2xl sm:px-6 lg:px-8">
                <div class="bg-white p-8 shadow-md rounded-md">
                    <form @submit.prevent="submit">
                        <div class="mb-3">
                            <InputLabel
                                for="skill_id"
                                value="Skill"
                                class="mb-1"
                            />
                            <select
                                v-model="form.skill_id"
                                name="skill_id"
                                id="skill_id"
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
                            >
                                <option
                                    v-for="skill in skills"
                                    :key="skill.id"
                                    :value="skill.id"
                                >
                                    {{ skill.name }}
                                </option>
                                <InputError
                                class="mt-2"
                                :message="$page.props.errors.skill.name"
                            />
                            </select>
                        </div>
                        <div class="mb-3">
                            <InputLabel for="name" value="name" />
                            <TextInput
                                id="name"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.name"
                                autocomplete="name"
                            />
                            <InputError
                                class="mt-2"
                                :message="$page.props.errors.name"
                            />
                        </div>
                        <div class="mb-3">
                            <InputLabel for="project_url" value="URL" />
                            <TextInput
                                id="project_url"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.project_url"
                                autocomplete="project_url"
                            />
                            <InputError
                                class="mt-2"
                                :message="$page.props.errors.project_url"
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
                            <PrimaryButton class="ms-4"
                            > Update </PrimaryButton>
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
    skills: Array,
    project: Object,
});
const form = useForm({
    name: props.project?.name,
    image: null,
    project_url: props.project?.project_url,
    skill_id: props.project?.skill_id,
});

const submit = () => {
    Inertia.post(`/projects/${props.project.id}`, {
        _method: "PUT",
        name: form.name,
        image: form.image,
        project_url: form.project_url,
        skill_id: form.skill_id,
    });
};
</script>
