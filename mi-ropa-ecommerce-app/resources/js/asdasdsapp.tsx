import "../css/app.css";
import "./bootstrap";

import { createInertiaApp } from "@inertiajs/react";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { createRoot } from "react-dom/client";
import { Route, BrowserRouter as Router, Routes } from "react-router-dom";
import ProductDetail from "./Components/products/ProductDetail";
import ProductList from "./Components/products/ProductList";

const appName = import.meta.env.VITE_APP_NAME || "Laravel";

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.tsx`,
            import.meta.glob("./Pages/**/*.tsx"),
        ),
    setup({ el, App, props }) {
        const root = createRoot(el);
        // const MyApp = ()=> {
        //     return (
        //         <Router>
        //             <Routes>
        //                 <Route path="/" element={<ProductList />} />
        //                 <Route
        //                     path="/products/:slug"
        //                     element={<ProductDetail />}
        //                 />
        //             </Routes>
        //         </Router>
        //     );
        // }
        root.render(<App {...props} />);
        // root.render(<MyApp />);
    },
    progress: {
        color: "#4B5563",
    },
});
