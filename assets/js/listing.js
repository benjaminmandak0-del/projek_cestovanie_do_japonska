// Tailwind config (run before Tailwind loads)
if (typeof tailwind !== 'undefined') {
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    'primary-purple': '#8b5cf6',
                    'primary-blue': '#3b82f6',
                }
            }
        }
    };
}

// Category tab switching
document.addEventListener('DOMContentLoaded', function() {
    const categoryButtons = document.querySelectorAll('[data-category]');
    const contentSections = document.querySelectorAll('[data-content]');
    const titles = document.querySelectorAll('.category-title');
    
    categoryButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            
            // Update active button
            categoryButtons.forEach(btn => btn.classList.remove('active-category'));
            button.classList.add('active-category');
            
            // Show content
            const target = button.dataset.category;
            contentSections.forEach(section => section.classList.add('hidden'));
            const targetSection = document.querySelector(`[data-content="${target}"]`);
            if (targetSection) targetSection.classList.remove('hidden');
            
            // Update title
            const newTitle = button.textContent.trim();
            titles.forEach(title => title.textContent = `${newTitle} in Japan`);
        });
    });
    
    // Filter demo
    const applyBtn = document.querySelector('.apply-filters');
    if (applyBtn) {
        applyBtn.addEventListener('click', () => {
            alert('Filters applied!');
        });
    }
    
    // Heart favorite toggle
    document.querySelectorAll('.heart').forEach(heart => {
        heart.addEventListener('click', () => {
            heart.classList.toggle('liked');
        });
    });
    
    // Slider demo (price range update value)
    const sliders = document.querySelectorAll('input[type="range"]');
    sliders.forEach(slider => {
        slider.addEventListener('input', () => {
            // Update display if needed
        });
    });
});
