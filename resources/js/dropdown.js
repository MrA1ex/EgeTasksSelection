document.querySelectorAll('.dropdown').forEach(item => {
    item.addEventListener('click', event => {
        event.preventDefault();
        item.classList.toggle('is-active');
    });
});
