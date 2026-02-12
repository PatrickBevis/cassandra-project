import React from "react";
import { createRoot } from "react-dom/client";
import App from "../react/App";

const el = document.getElementById("main-app");

if(el) {
    const root = createRoot(el);
    root.render(<App />)
}
