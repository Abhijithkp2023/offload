/**
 * Main JavaScript File
 * Global initialization and utilities
 */

// This file can be used for any global initialization if needed.
// Component-specific scripts are loaded via functions.php with proper dependencies.

document.addEventListener('DOMContentLoaded', function () {
	const messageField = document.querySelector('.footer-form-input[name="message"]');
	const countEl = document.querySelector('.footer-form-count');

	if (!messageField || !countEl) {
		return;
	}

	const max = parseInt(messageField.getAttribute('maxlength') || '150', 10);

	const updateCount = function () {
		const length = messageField.value.length;
		countEl.textContent = `${length}/${max}`;
	};

	messageField.addEventListener('input', updateCount);
	updateCount();
});
