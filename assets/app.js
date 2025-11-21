import SyntaxHighlighter from "./js/custom/highlighter.js";
import { copyCode } from "./js/custom/copy_code.js";

window.copyCode = copyCode;

document.addEventListener('DOMContentLoaded', () => {
    new SyntaxHighlighter();
});
