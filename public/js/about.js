const toggleBtn = document.getElementById('toggleStoryBtn');
const moreStory = document.getElementById('moreStory');

if (toggleBtn && moreStory) {
    toggleBtn.addEventListener('click', () => {
        const isHidden = moreStory.hasAttribute('hidden');
        if (isHidden) {
            moreStory.removeAttribute('hidden');
            toggleBtn.textContent = 'Read Less';
        } else {
            moreStory.setAttribute('hidden', '');
            toggleBtn.textContent = 'Read More';
        }
    });
}

document.querySelectorAll('.counter').forEach(counter => {
    const target = Number(counter.dataset.target || 0);
    let current = 0;
    const step = Math.max(1, Math.ceil(target / 40));

    const timer = setInterval(() => {
        current += step;
        if (current >= target) {
            counter.textContent = target;
            clearInterval(timer);
        } else {
            counter.textContent = current;
        }
    }, 30);
});