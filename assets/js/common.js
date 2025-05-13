// 通常のjs
console.log('common.js');

window.addEventListener('load', () => {
    const typebox = document.querySelector('#typeboX1');
    const categorybox = document.querySelector('#categorybox1');

    if (typebox && categorybox) {
        const updateHeight = () => {
            const typeboxHeight = typebox.offsetHeight;
            categorybox.style.height = `${typeboxHeight}px`;
        };

        const observer = new MutationObserver(updateHeight);
        observer.observe(typebox, { attributes: true, childList: true, subtree: true });

        updateHeight();
        window.addEventListener('resize', updateHeight);
    }
});

window.addEventListener('load', () => {
    const typebox = document.querySelector('#typeboX2');
    const categorybox = document.querySelector('#categorybox2');

    if (typebox && categorybox) {
        const updateHeight = () => {
            const typeboxHeight = typebox.offsetHeight;
            categorybox.style.height = `${typeboxHeight}px`;
        };

        const observer = new MutationObserver(updateHeight);
        observer.observe(typebox, { attributes: true, childList: true, subtree: true });

        updateHeight();
        window.addEventListener('resize', updateHeight);
    }
});