import Quill from "quill";
import "quill/dist/quill.snow.css";

const saveBtn = document.querySelector("#editorSave");
const editorEl = document.querySelector("#editor");
const form = document.querySelector("#quillForm");

const quillEditor = new Quill(editorEl, {
    placeholder: "Lets write on Quill",
    theme: "snow",
});

quillEditor.on("editor-change", (eventName, ...args) => {
    // @ts-ignore
    form.children[0].value = JSON.stringify(quillEditor.getContents());
    console.log(form.children);
});

saveBtn.addEventListener("click", () => form.submit());
