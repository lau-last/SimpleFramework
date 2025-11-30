export async function copyCode(codeId, button) {
    if (!codeId || !button) return;
    const code = document.getElementById(codeId);
    if (!code) return;

    const original = button.textContent;

    try {
        await navigator.clipboard.writeText(code.textContent);
        button.textContent = 'Copied!';
    } catch (err) {
        console.error('Failed to copy text: ', err);
        button.textContent = 'Failed to copy';
    } finally {
        setTimeout(() => { button.textContent = original; }, 1000);
    }
}
