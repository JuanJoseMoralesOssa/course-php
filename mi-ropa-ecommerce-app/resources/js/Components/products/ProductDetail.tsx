import React, { useEffect, useState } from "react";
import { useParams } from "react-router-dom";
import axios from "axios";
import { Product } from "@/interfaces/Product";


const ProductDetail = () => {
    const { slug } = useParams();
    const [product, setProduct] = useState<Product | null>(null);

    useEffect(() => {
        axios
            .get(`/api/products/${slug}`)
            .then((response) => {
                setProduct(response.data);
            })
            .catch((error) => {
                console.error("Error fetching product:", error);
            });
    }, [slug]);

    if (!product) return <p>Cargando...</p>;

    return (
        <div className="container">
            <h1>{product.name}</h1>
            <p>{product.description}</p>
            <p>Precio: ${product.price}</p>
            <p>Stock: {product.stock}</p>
            <a href="/" className="btn btn-secondary">
                Volver a productos
            </a>
        </div>
    );
};

export default ProductDetail;
