import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import React from 'react'

const Index = ({ projects }) => {

    // const projects = props.projects

    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Projects
                </h2>
            }
        >
            <Head title="Projects" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900 overflow-x-auto">
                            <table className="min-w-full divide-y divide-gray-200">
                                <thead className="bg-gray-50">
                                    <tr>
                                        <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                        <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                        <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                        <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Color</th>
                                    </tr>
                                </thead>
                                <tbody className="bg-white divide-y divide-gray-200">
                                    {projects.map((project) => (
                                        <tr key={project.id_project}>
                                            <td className="px-6 py-4 whitespace-nowrap">{project.id_project}</td>
                                            <td className="px-6 py-4 whitespace-nowrap">{project.project_name}</td>
                                            <td className="px-6 py-4 whitespace-nowrap">{project.project_description}</td>
                                            <td className="px-6 py-4 whitespace-nowrap flex justify-center gap-2">
                                                <p>{project.project_color}</p>
                                                <div className="w-6 h-6 rounded-full" style={{ backgroundColor: project.project_color }}></div>
                                            </td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>
                        </div>

                        <div>
                            <a
                                href={route('projects.create')}
                                className="p-2 rounded-lg block w-full py-3 text-center text-white bg-blue-500 hover:bg-blue-600">
                                Create Project
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}

export default Index
