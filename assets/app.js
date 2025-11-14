import EventManager from "./js/component/event_manager.js";
import Ajax from "./js/component/ajax.js";
import Alert from "./js/component/alert.js";
import Aside from "./js/component/aside.js";
import Collapse from "./js/component/collapse.js";
import Dialog from "./js/component/dialog.js";
import Dropdown from "./js/component/dropdown.js";
import Tab from "./js/component/tab.js";

import SyntaxHighlighter from "./js/custom/highlighter.js";
import { copyCode } from "./js/custom/copy_code.js";


window.copyCode = copyCode;

document.addEventListener('DOMContentLoaded', () => {
    new Ajax();
    new Alert();
    new Aside();
    new Collapse();
    new Dialog();
    new Dropdown();
    new Tab();

    new SyntaxHighlighter();
    console.log(EventManager.listeners);
});
