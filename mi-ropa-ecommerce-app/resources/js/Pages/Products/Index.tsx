import Authenticated from "@/Layouts/AuthenticatedLayout";
import InputError from "@/Components/InputError";
import PrimaryButton from "@/Components/PrimaryButton";
import { useForm, Head } from "@inertiajs/inertia-react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

const Index = () => {
    const { data, setData, post, processing, reset, errors } = useForm({
        name: "",
        description: "",
        price: "",
        stock: "",
        image: "",
        enable: "",
        category_id: "",
    });
    const handleSubmit = (e: React.FormEvent<HTMLFormElement>) => {
        e.preventDefault();
        post(route("products.store"), { onSuccess: () => reset() });
    };
    // const auth = {}; // Define the auth variable
    return (
        <AuthenticatedLayout header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Products</h2>}>
            <Head title="Products"></Head>
            {/* Formulario responsive con tailwind*/}
            <div className="container max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
                <div className="flex justify-center px-6 my-12">
                    {/* Row */}
                    <div className="w-full xl:w-3/4 lg:w-11/12 flex">
                        {/* Col */}
                        <div
                            className="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                            style={{
                                backgroundImage:
                                    "url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')",
                            }}
                        ></div>
                        {/* Col */}
                        <div className="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                            <h3 className="pt-4 text-2xl text-center">
                                Create a new product
                            </h3>
                            <form
                                className="px-8 pt-6 pb-8 mb-4 bg-white rounded"
                                onSubmit={handleSubmit}
                            >
                                <div className="mb-4">
                                    <label
                                        className="block mb-2 text-sm font-bold text-gray-700"
                                        htmlFor="name"
                                    >
                                        Name
                                    </label>
                                    <input
                                        className="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="name"
                                        type="text"
                                        value={data.name}
                                        placeholder="Product name"
                                        autoFocus
                                        onChange={(e) =>
                                            setData("name", e.target.value)
                                        }
                                    />
                                    {errors.name && (
                                        <p className="text-red-500 text-xs italic">
                                            {errors.name}
                                        </p>
                                    )}
                                    <InputError message={errors.name} />
                                </div>
                                <div className="mb-4">
                                    <label
                                        className="block mb-2 text-sm font-bold text-gray-700"
                                        htmlFor="description"
                                    >
                                        Description
                                    </label>
                                    <textarea
                                        className="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="description"
                                        value={data.description}
                                        placeholder="Product description"
                                        onChange={(e) =>
                                            setData("description", e.target.value)
                                        }
                                    >

                                    </textarea>
                                    <InputError message={errors.description} />
                                </div>
                                <div className="mb-4">
                                    <label
                                        className="block mb-2 text-sm font-bold text-gray-700"
                                        htmlFor="price"
                                    >
                                        Price
                                    </label>
                                    <input
                                        className="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="price"
                                        type="number"
                                        value={data.price}
                                        onChange={(e) =>
                                            setData("price", e.target.value)
                                        }
                                    />
                                    <InputError message={errors.price} />
                                </div>
                                <div className="mb-6">
                                    <label
                                        className="block mb-2 text-sm font-bold text-gray-700"
                                        htmlFor="stock"
                                    >
                                        Stock
                                    </label>
                                    <input
                                        className="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="stock"
                                        type="number"
                                        value={data.stock}
                                        onChange={(e) =>
                                            setData("stock", e.target.value)
                                        }
                                    />
                                    <InputError message={errors.stock} />
                                </div>
                                <div className="mb-6">
                                    <label
                                        className="block mb-2 text-sm font-bold text-gray-700"
                                        htmlFor="image"
                                    >
                                        Image
                                    </label>
                                    <input
                                        className="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="image"
                                        type="file"
                                        value={data.image}
                                        onChange={(e) =>
                                            setData("image", e.target.value)
                                        }
                                    />
                                    <InputError message={errors.image} />
                                </div>
                                <div className="mb-6">
                                    <label
                                        className="block mb-2 text-sm font-bold text-gray-700"
                                        htmlFor="enable"
                                    >
                                        Enable
                                    </label>
                                    <input
                                        className="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="enable"
                                        type="checkbox"
                                        value={data.enable}
                                        onChange={(e) =>
                                            setData("enable", e.target.value)
                                        }
                                    />
                                    <InputError message={errors.enable} />
                                </div>
                                <div className="mb-6">
                                    <label
                                        className="block mb-2 text-sm font-bold text-gray-700"
                                        htmlFor="category_id"
                                    >
                                        Category
                                    </label>
                                    <select
                                        className="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="category_id"
                                        value={data.category_id}
                                        onChange={(e) =>
                                            setData("category_id", e.target.value)
                                        }
                                    >
                                        <option value="1">Category 1</option>
                                        <option value="2">Category 2</option>
                                        <option value="3">Category 3</option>
                                    </select>
                                    <InputError message={errors.category_id} />
                                </div>
                                <div className="mb-6 text-center">
                                    <PrimaryButton type="submit"
                                    className="mt-4 w-full px-4 py-2 font-bold text-white bg-blue-500 bg-gradient-to-br to-indigo-600 from-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline focus:ring-4 focus:ring-blue-300 text-sm text-center"
                                        disabled={processing}
                                    >
                                        Create Product
                                    </PrimaryButton>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
};

export default Index;
