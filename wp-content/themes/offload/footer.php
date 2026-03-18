<?php
/**
 * The template for displaying the footer
 *
 * @package tasheel
 */
?>

<footer id="colophon" class="site-footer footer">
	<div class="footer-top pt_100 pb_100">
		<div class="wrap footer-top__inner">
			<h2 class="section-title footer-title">GET IN TOUCH</h2>

			<div class="footer-contact">
				<form class="footer-form" action="#" method="post">
					<div class="footer-form__field">
						<input class="footer-form-input" type="text" name="name" placeholder="Name" />
					</div>
					<div class="footer-form__field">
						<input class="footer-form-input" type="email" name="email" placeholder="Email" />
					</div>
					<div class="footer-form__field">
						<textarea class="footer-form-input" name="message" placeholder="Your Message" rows="3" maxlength="150"></textarea>
					</div>
					<div class="footer-form__meta">
						<span class="footer-form-count">0/150</span>
						<button class="footer-form-submit" type="submit" aria-label="Send message">
							<svg width="33" height="33" viewBox="0 0 33 33" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path
									d="M32.1667 0.5L14.75 17.9167M32.1667 0.5L21.0833 32.1667L14.75 17.9167M32.1667 0.5L0.5 11.5833L14.75 17.9167"
									stroke="white" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</button>
					</div>
				</form>

				<div class="footer-info">
					<p class="footer-info-row">
						<span class="footer-info-key">Email:</span>
						<span class="footer-info-value">info@offloadmedia.com</span>
					</p>
					<p class="footer-info-row">
						<span class="footer-info-key">Phone:</span>
						<span class="footer-info-value">+974 4433 6100</span>
					</p>
					<p class="footer-info-row">
						<span class="footer-info-key">Address:</span>
						<span class="footer-info-value">Al Emadi Financial Square<br />Building 1, Floor 1, Office 7,
							P.O. Box 3284<br />Doha, Qatar</span>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-bottom">
		<div class="wrap footer-bottom__inner">
			<p class="footer-copy">Copyright © 2026 Offload | All Rights Reserved</p>
			<div class="footer-social">
				<a class="footer-social__link" href="#" aria-label="Instagram">
					<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M19.875 6.125H19.8875M6.75 0.5H19.25C22.7018 0.5 25.5 3.29822 25.5 6.75V19.25C25.5 22.7018 22.7018 25.5 19.25 25.5H6.75C3.29822 25.5 0.5 22.7018 0.5 19.25V6.75C0.5 3.29822 3.29822 0.5 6.75 0.5ZM18 12.2125C18.1543 13.2528 17.9766 14.3153 17.4922 15.2488C17.0078 16.1823 16.2414 16.9393 15.302 17.4121C14.3626 17.8849 13.2981 18.0495 12.2597 17.8824C11.2214 17.7153 10.2622 17.2251 9.51855 16.4815C8.7749 15.7378 8.28466 14.7786 8.11758 13.7403C7.9505 12.7019 8.11508 11.6374 8.58791 10.698C9.06073 9.75857 9.81773 8.99218 10.7512 8.5078C11.6847 8.02343 12.7472 7.84574 13.7875 8C14.8487 8.15736 15.8311 8.65183 16.5896 9.41038C17.3482 10.1689 17.8426 11.1513 18 12.2125Z"
							stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round" />
					</svg>

				</a>
				<a class="footer-social__link" href="#" aria-label="Facebook">
					<svg width="16" height="28" viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M15.1667 0.5H11.1667C9.39856 0.5 7.70286 1.20238 6.45262 2.45262C5.20238 3.70286 4.5 5.39856 4.5 7.16667V11.1667H0.5V16.5H4.5V27.1667H9.83333V16.5H13.8333L15.1667 11.1667H9.83333V7.16667C9.83333 6.81304 9.97381 6.47391 10.2239 6.22386C10.4739 5.97381 10.813 5.83333 11.1667 5.83333H15.1667V0.5Z"
							stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round" />
					</svg>

				</a>
			</div>
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>