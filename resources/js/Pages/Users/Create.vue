<script setup>
    import { ref } from 'vue';
    import { Inertia } from '@inertiajs/inertia';
    import { Link, useForm } from '@inertiajs/inertia-vue3';
    import ActionMessage from '@/Components/ActionMessage.vue';
    import FormSection from '@/Components/FormSection.vue';
    import InputError from '@/Components/InputError.vue';
    import InputLabel from '@/Components/InputLabel.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import SecondaryButton from '@/Components/SecondaryButton.vue';
    import TextInput from '@/Components/TextInput.vue';
    import AppLayout from '@/Layouts/AppLayout.vue';
                
    const form = useForm({
        _method: 'POST',
        name: '',
        email: ''
    });

    const createUser = () =>
    {
        Inertia.post('/users/create', form)        
    }

</script>
<template>        
    <AppLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create User
            </h2>
        </template>
        <div>            
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <FormSection @submitted="createUser">
                    <template #header>
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            Register
                        </h2>
                    </template>
                    <template #title>
                        User Information
                    </template>

                    <template #description>
                        Enter the user's details.
                    </template>

                    <template #form>
                        <div class="col-span-6 sm:col-span-4">
                            <InputLabel for="name" value="Name" />
                            <TextInput
                                id="name"
                                v-model="form.name"
                                type="text"
                                class="mt-1 block w-full"
                                autocomplete="name"
                            />
                            <InputError :message="form.errors.name" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <InputLabel for="email" value="Email" />
                            <TextInput
                                id="email"
                                v-model="form.email"
                                type="text"
                                class="mt-1 block w-full"
                                autocomplete="email"
                            />
                            <InputError :message="form.errors.name" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing" @click="createUser">
                                Save
                            </PrimaryButton>
                        </div>
                    </template>                    
                </FormSection>
            </div>
        </div>
    </AppLayout>
</template>