import React from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter } from "react-router-dom";
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import App from "./App";
const root = ReactDOM.createRoot(document.getElementById('asad'));
root.render(
   <BrowserRouter>
        <App />
    </BrowserRouter>
);
