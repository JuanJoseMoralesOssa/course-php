import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, useForm } from '@inertiajs/react';
import React from 'react'

const Put = ({ project }) => {

    const { data, setData, post, processing, errors, reset } = useForm({
        project_name: '',
        project_description: '',
        project_color: '#DDFFBB',
    })

    const submit = (e) => {
        e.preventDefault()
        post(route('projects.store'), {
            onFinish: () => reset('project_name', 'project_description', 'project_color'),
        })
    }

    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Update a project
                </h2>
            }
        >
            <Head title="Update a project" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900">


                            <form onSubmit={submit}
                                className='space-y-6'>

                                <div>
                                    <InputLabel htmlFor="project_name" value="Project Name" />

                                    <TextInput
                                        id="project_name"
                                        name="project_name"
                                        type="text"
                                        value={data.project_name}
                                        isFocused={true}
                                        className="mt-1 block w-full"
                                        autoComplete="project_name"
                                        onChange={(e) => setData('project_name', e.target.value)}
                                        required
                                    />

                                    <InputError message={errors.project_name} className="mt-2" />
                                </div>


                                <div>
                                    <InputLabel htmlFor="project_description" value="Project Description" />

                                    <TextInput
                                        id="project_description"
                                        name="project_description"
                                        type="text"
                                        value={data.project_description}
                                        className="mt-1 block w-full"
                                        autoComplete="project_description"
                                        onChange={(e) => setData('project_description', e.target.value)}
                                    />

                                    <InputError message={errors.project_description} className="mt-2" />
                                </div>

                                <div>
                                    <InputLabel htmlFor="project_color" value="Project Color" />

                                    <TextInput
                                        id="project_color"
                                        name="project_color"
                                        type="color"
                                        value={data.project_color}
                                        className="mt-1 block w-full"
                                        autoComplete="project_color"
                                        onChange={(e) => setData('project_color', e.target.value)}
                                        required
                                    />

                                    <InputError message={errors.project_color} className="mt-2" />
                                </div>

                                <div className="mx-6">
                                    <div className="mt-4 flex items-center ">
                                        <PrimaryButton className="ms-4 flex justify-center w-full" disabled={processing}>
                                            Create Project
                                        </PrimaryButton>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}

export default Put
