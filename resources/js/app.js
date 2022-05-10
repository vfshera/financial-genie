require("./bootstrap");
// import "quill/dist/quill.snow.css";

import Alpine from "alpinejs";
// import Quill from "quill";
// import "highlight.js";
// import "highlight.js/styles/github.css";
import EditorJS from "@editorjs/editorjs";
import header from "@editorjs/header";
import list from "@editorjs/list";
import link from "@editorjs/link";
import table from "@editorjs/table";
import embed from "@editorjs/embed";
import delimiter from "@editorjs/delimiter";
import code from "@editorjs/code";
import inline_code from "@editorjs/inline-code";
import underline from "@editorjs/underline";
import quote from "@editorjs/quote";
import raw from "@editorjs/raw";
import paragraph from "@editorjs/paragraph";
import nested_list from "@editorjs/nested-list";
import image_tool from "@editorjs/image";
import checklist from "@editorjs/checklist";
import attaches from "@editorjs/attaches";

window.Alpine = Alpine;
Alpine.start();
// const mainNav = document.querySelector(".main-navbar");

// EDITOR

const saveBtn = document.querySelector("#editorSave");
const editor = new EditorJS({
    holder: "editor",
    placeholder: "Lets get writing...!",
    inlineToolbar: ["link", "marker", "bold", "italic"],
    tools: {
        header,
        list,
        link,
        table,
        embed,
        delimiter,
        code,
        inline_code,
        underline,
        quote,
        raw,
        paragraph,
        nested_list,
        image_tool,
        checklist,
        attaches,
    },
});

saveBtn.addEventListener("click", () => {
    editor
        .save()
        .then((outputData) => {
            console.log("Article data: ", outputData);
        })
        .catch((error) => {
            console.log("Saving failed: ", error);
        });
});
