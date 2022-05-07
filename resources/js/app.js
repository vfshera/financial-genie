require("./bootstrap");
import "quill/dist/quill.snow.css";

import Alpine from "alpinejs";
import Quill from "quill";
import "highlight.js";
import "highlight.js/styles/github.css";

window.Alpine = Alpine;
Alpine.start();
// const mainNav = document.querySelector(".main-navbar");

// EDITOR

const editor = document.querySelector("#editor");

if (editor) {
    const TOOLBAR_OPTIONS = [
        [{ header: [1, 2, 3, 4, 5, 6, false] }],
        [{ font: [] }],
        [{ list: "ordered" }, { list: "bullet" }],
        ["bold", "italic", "underline"],
        [{ color: [] }, { background: [] }],
        [{ script: "sub" }, { script: "super" }],
        [{ align: [] }],
        ["image", "blockquote", "code-block"],
        ["clean"],
    ];
    new Quill(editor, {
        placeholder: "Lets get started!",
        theme: "snow",
        modules: { toolbar: TOOLBAR_OPTIONS },
    });
}
