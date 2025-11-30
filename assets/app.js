import SyntaxHighlighter from "./js/custom/highlighter.js";
import { copyCode } from "./js/custom/copy-code.js";
import "./js/simple-css.min.js";

window.copyCode = copyCode;

document.addEventListener('DOMContentLoaded', () => {
    new SyntaxHighlighter();
});
