import React, { useEffect, useState } from "react";
import axios from "axios";
import { Category } from "@/interfaces/Category";


const ProductList = () => {
    const [categories, setCategories] = useState<Category[]>([]);

    useEffect(() => {
        // Realiza una solicitud a la API para obtener las categorías y productos
        axios
            .get("/api/products")
            .then((response) => {
                setCategories(response.data);
            })
            .catch((error) => {
                console.error("Error fetching products:", error);
            });
    }, []);

    return (
        <div className="container">
            <h1 className="my-4">Productos Disponibles</h1>
            {categories.map((category) => (
                <div key={category.id}>
                    <h2>{category.name}</h2>
                    <div className="row">
                        {category.products.map((product) => (
                            <div className="col-md-4" key={product.id}>
                                <div className="card mb-4">
                                    <div className="card-body">
                                        <h5 className="card-title">
                                            {product.name}
                                        </h5>
                                        <p className="card-text">
                                            {product.description}
                                        </p>
                                        <p className="card-text">
                                            Precio: ${product.price}
                                        </p>
                                        <p className="card-text">
                                            Stock: {product.stock}
                                        </p>
                                        <a
                                            href={`/products/${product.slug}`}
                                            className="btn btn-primary"
                                        >
                                            Ver Producto
                                        </a>
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            ))}
        </div>
    );
};

export default ProductList;
