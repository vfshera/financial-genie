import Quill from "quill";

import ImageUploader from "quill-image-uploader";
import MagicUrl from "quill-magic-url";
import * as Emoji from "quill-emoji";
import "quill-emoji/dist/quill-emoji.css";

Quill.register("modules/emoji", Emoji);
Quill.register("modules/imageUploader", ImageUploader);
Quill.register("modules/magicUrl", MagicUrl);

const submitBtn = document.querySelector("#editorSubmit");
const editorEl = document.querySelector("#editor");
const form = document.querySelector("#quillForm");

const toolbarOptions = [
    [{ header: [1, 2, 3, 4, 5, 6, false] }],

    ["bold", "italic", "underline", "strike"],
    ["link", "blockquote", "code-block", "image"],

    [{ align: [] }],

    [{ list: "ordered" }, { list: "bullet" }],
    [{ script: "sub" }, { script: "super" }],

    [{ color: [] }, { background: [] }],

    ["clean"],
];

const quillEditor = new Quill(editorEl, {
    modules: {
        toolbar: toolbarOptions,

        imageUploader: {
            upload: (file) => {
                return new Promise((resolve, reject) => {
                    setTimeout(() => {
                        resolve("https://picsum.photos/seed/picsum/800/500");
                    }, 3500);
                });
            },
        },
        magicUrl: true,
        "emoji-toolbar": true,
        "emoji-textarea": true,
        "emoji-shortname": true,
    },
    placeholder: "Lets get started",
    theme: "snow",
});

function setInput() {
    form.children[0].value = JSON.stringify(quillEditor.getContents());
}

quillEditor.on("editor-change", (eventName, ...args) => {});

submitBtn.addEventListener("click", () => {
    setInput();
    form.submit();
});

const { value } = document.querySelector("#quillcontent");

if (value.length > 2) {
    const content = JSON.parse(value);
    if (typeof content == "object") {
        quillEditor.setContents(content);
    }
}
