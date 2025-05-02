document.addEventListener('DOMContentLoaded', function() {
    const dropdownBtn = document.getElementById('categoryDropdownBtn');
    const dropdown = document.getElementById('categoryDropdown');
    const dropdownArrow = document.getElementById('dropdownArrow');

    dropdownBtn.addEventListener('click', function() {
        if (dropdown.style.display === 'none' || dropdown.style.display === '') {
            dropdown.style.display = 'block';
            dropdownArrow.classList.add('rotate-180');
        } else {
            dropdown.style.display = 'none';
            dropdownArrow.classList.remove('rotate-180');
        }
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        if (!dropdownBtn.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.style.display = 'none';
            dropdownArrow.classList.remove('rotate-180');
        }
    });
});
