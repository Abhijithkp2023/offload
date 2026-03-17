/**
 * Lenis Smooth Scroll Initialization
 * Initializes Lenis smooth scrolling for the entire website
 */

document.addEventListener('DOMContentLoaded', function() {
	// Check if Lenis is loaded
	if (typeof Lenis === 'undefined') {
		console.warn('Lenis library is not loaded');
		return;
	}

	// Skip smooth scrolling on touch, reduced motion, or low-end devices
	const prefersReducedMotion = window.matchMedia &&
		window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	const isTouchDevice = 'ontouchstart' in window || (navigator.maxTouchPoints || 0) > 0;
	const connection = navigator.connection || navigator.mozConnection || navigator.webkitConnection;
	const saveData = connection && connection.saveData;
	const deviceMemory = navigator.deviceMemory || 0;
	const isLowEndDevice = deviceMemory > 0 && deviceMemory <= 2;

	if (prefersReducedMotion || isTouchDevice || saveData || isLowEndDevice) {
		return;
	}

	// Initialize Lenis with premium smooth scroll settings
	const lenis = new Lenis({
		duration: 1.8,
		easing: (t) => 1 - Math.pow(1 - t, 3),
		direction: 'vertical',
		gestureDirection: 'vertical',
		smooth: true,
		mouseMultiplier: 0.6,
		smoothTouch: false,
		touchMultiplier: 1.2,
		infinite: false,
		wheelMultiplier: 0.8,
	});

	// Get scroll value
	let rafId = null;
	function raf(time) {
		lenis.raf(time);
		rafId = requestAnimationFrame(raf);
	}

	rafId = requestAnimationFrame(raf);

	// Make Lenis available globally if needed
	window.lenis = lenis;

	// Optional: Add scroll event listener
	lenis.on('scroll', ({ scroll, limit, velocity, direction, progress }) => {
		// Hook for scroll-based effects if needed
	});

	// Pause Lenis when the page is hidden to avoid jank
	document.addEventListener('visibilitychange', function() {
		if (document.hidden) {
			lenis.stop();
			if (rafId) {
				cancelAnimationFrame(rafId);
				rafId = null;
			}
			return;
		}
		lenis.start();
		if (!rafId) {
			rafId = requestAnimationFrame(raf);
		}
	});

	// Handle anchor links
	document.querySelectorAll('a[href^="#"]').forEach(anchor => {
		anchor.addEventListener('click', function(e) {
			const href = this.getAttribute('href');

			// Skip if it's just "#"
			if (href === '#' || href === '') {
				return;
			}

			const target = document.querySelector(href);

			if (target) {
				e.preventDefault();
				lenis.scrollTo(target, {
					offset: -80,
					duration: 2.2,
					easing: (t) => 1 - Math.pow(1 - t, 3),
				});
			}
		});
	});
});
