import Quill from "quill";
import "quill/dist/quill.snow.css";

const submitBtn = document.querySelector("#editorSubmit");
const editorEl = document.querySelector("#editor");
const form = document.querySelector("#quillForm");

const toolbarOptions = [
    [{ header: [1, 2, 3, 4, 5, 6, false] }],

    ["bold", "italic", "underline", "strike"],
    ["blockquote", "code-block"],

    [{ align: [] }],

    [{ list: "ordered" }, { list: "bullet" }],
    [{ script: "sub" }, { script: "super" }],

    [{ color: [] }, { background: [] }],

    ["clean"],
];

const quillEditor = new Quill(editorEl, {
    modules: {
        toolbar: toolbarOptions,
    },
    placeholder: "Lets get started",
    theme: "snow",
});

function setInput() {
    form.children[0].value = JSON.stringify(quillEditor.getContents());
}

quillEditor.on("editor-change", (eventName, ...args) => {
    console.log(eventName);
});

submitBtn.addEventListener("click", () => {
    setInput();
    form.submit();
});

const { value } = document.querySelector("#quillcontent");

if (value.length > 2) {
    console.log(value.length);
    const content = JSON.parse(value);
    if (typeof content == "object") {
        quillEditor.setContents(content);
    }
}
