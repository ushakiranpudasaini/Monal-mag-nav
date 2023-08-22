/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

(function ($) {
	// Site title and description.
	// wp.customize('blogname', function (value) {
	// 	value.bind(function (to) {
	// 		$('.site-title a').text(to);
	// 	});
	// });
	// wp.customize('blogdescription', function (value) {
	// 	value.bind(function (to) {
	// 		$('.site-description').text(to);
	// 	});
	// });

	// Header text color.
	wp.customize('header_textcolor', function (value) {
		value.bind(function (to) {
			if ('blank' === to) {
				$('.site-title, .site-description').css({
					clip: 'rect(1px, 1px, 1px, 1px)',
					position: 'absolute',
					display: 'none'
				});
			} else {
				$('.site-title, .site-description').css({
					clip: 'auto',
					position: 'relative',
					display: 'block'
				});
				$('.site-title a, .site-description').css({
					color: to,
				});
			}
		});
	});

	// Navbar Container Width
	wp.customize('nav_width_container', function (value) {
		value.bind(function (to) {
			$('.nav-container').css({
				maxWidth: to + 'px',
			});
		});
	});

	// Hide Search Button
	wp.customize('search_visibility', function (value) {
		value.bind(function (to) {
			if (true === to) {
				$('.edu-search').css({
					display: 'block'
				});
				$('.hamburger').css({
					marginRight: '45px'
				});
			} else {
				$('.edu-search').css({
					display: 'none'
				});
				$('.hamburger').css({
					marginRight: '0px'
				});
			}
		});
	});
	//Hide Heart Button
	wp.customize('heart_visibility', function (value) {
		value.bind(function (to) {
			if (true === to) {
				$('.heart-search').css({
					display: 'block'
				});
				$('.hamburger').css({
					marginRight: '45px'
				});
				
			} else {
				$('.heart-search').css({
					display: 'none'
				});
				$('.hamburger').css({
					marginRight: '0px'
				});
			}
		});
	});
	

	// Top Bar Visibility
	wp.customize('topbar_visibility', function (value) {
		value.bind(function (to) {
			if (true === to) {
				$('.top-bar').css({
					display: 'block'
				});
			} else {
				$('.top-bar').css({
					display: 'none'
				});
			}
		});
	});

	// Hide Copyright Section
	wp.customize('copyright_display', function (value) {
		value.bind(function (to) {
			if ('hide' === to) {
				$('.copyright').css({
					display: 'none'
				});
			} else {
				$('.copyright').css({
					display: 'block'
				});
			}
		});
	});


	// Copyright Text
	wp.customize('copyright_text_footer', function (value) {
		value.bind(function (to) {
			$('.copyright p').text(to);
		});
	});


	// Navigation Colors 

	// Navbar Background
	wp.customize('header_background', function (value) {
		value.bind(function (to) {
			$('.nav-main').css({
				background: to,
			});
		});
	});

	// Button Background
	wp.customize('button_background_color ', function (value) {
		value.bind(function (to) {
			$('.custom-buttons').css({
				background: to,
			});
		});
	});


	// Button Text Color
	wp.customize('button_text_color', function (value) {
		value.bind(function (to) {
			$('.custom-buttons').css({
				color: to,
			});
		});
	});
		// Button Border Color
		wp.customize('button_border_color', function (value) {
			value.bind(function (to) {
				$('.custom-buttons').css({
					border: to,
				});
			});
		});

	// Navbar Text Color
	wp.customize('header_text_color', function (value) {
		value.bind(function (to) {
			$('.navbar .navbar-links>ul>li a').css({
				color: to,
			});
			
			$('.edu-search').css({
				color: to,
			});
			$('.font-big').css({
				color: to,
			});
			$('.font-small').css({
				color: to,
			});
		});
	});

	// Navbar Text Hover
	wp.customize('header_hover_color', function (value) {
		value.bind(function (to) {
			$('.navbar .navbar-links>ul>li').hover(function () {
				$(this).css({
					borderColor: to,
				});
			}, function () {
				$(this).removeAttr('style');
			});
		});
	});

	// Dropdown Bckground
	wp.customize('dropdown_background', function (value) {
		value.bind(function (to) {
			$('.navbar .navbar-links>ul>li .sub-menu>li').css({
				background: to,
			});
		});
	});

	// Dropdown Text
	wp.customize('dropdown_color', function (value) {
		value.bind(function (to) {
			$('.navbar .navbar-links>ul>li .sub-menu>li>a').css({
				color: to,
			});
		});
	});

	// Navbar Logo Width 
	wp.customize('logo_width', function (value) {
		value.bind(function (to) {
			$('.custom-logo-link img').css({
				width: to + 'px',
			});
		});
	});

	// HEading Sizes 

	// Heading One 
	wp.customize('edu_heading_one_size', function (value) {
		value.bind(function (to) {
			$('.main-content h1').css({
				fontSize: to + 'px',
			});
		});
	});

	// Heading Two
	wp.customize('edu_heading_two_size', function (value) {
		value.bind(function (to) {
			$('.main-content h2').css({
				fontSize: to + 'px',
			});
		});
	});

	// Heading THree
	wp.customize('edu_heading_three_size', function (value) {
		value.bind(function (to) {
			$('.main-content h3').css({
				fontSize: to + 'px',
			});
		});
	});
	// Heading Four
	wp.customize('edu_heading_four_size', function (value) {
		value.bind(function (to) {
			$('.main-content h4').css({
				fontSize: to + 'px',
			});
		});
	});
		// Heading Five
		wp.customize('edu_heading_five_size', function (value) {
			value.bind(function (to) {
				$('.main-content h5').css({
					fontSize: to + 'px',
				});
			});
		});

		// Heading Six
		wp.customize('edu_heading_six_size', function (value) {
			value.bind(function (to) {
				$('.main-content h6').css({
					fontSize: to + 'px',
				});
			});
		});
	// Paragraph
	wp.customize('edu_paragraph_size', function (value) {
		value.bind(function (to) {
			$('.main-content p').css({
				fontSize: to + 'px',
			});
		});
	});

	// Meta Size 
	wp.customize('edu_meta_size', function (value) {
		value.bind(function (to) {
			$('.entry-meta').css({
				fontSize: to + 'px',
			});
		});
	});

	// Widget Title
	wp.customize('edu_widget_title_size', function (value) {
		value.bind(function (to) {
			$('.widget h2').css({
				fontSize: to + 'px',
			});
		});
	});

	// Body Container Width
	wp.customize('body_width_container', function (value) {
		value.bind(function (to) {
			$('.body-container').css({
				maxWidth: to + 'px',
			});
		});
	});

	// Top Bar Visibility
	wp.customize('topbar_visibility', function (value) {
		value.bind(function (to) {
			if (true === to) {
				$('.top-bar').css({
					display: 'block'
				});
			} else {
				$('.top-bar').css({
					display: 'none'
				});
			}
		});
	});
	
//Hero Section

wp.customize('hero_text', function(value) {
	value.bind(function(new_val) {
		$('.hero-section .hero-text').text(new_val);
	});
});
wp.customize('hero_content', function(value) {
	value.bind(function(new_val) {
		$('.hero-section .hero-content').text(new_val);
	});
});
wp.customize('hero_text', function(value) {
	value.bind(function(new_val) {
		$('.hero-section .hero-text').text(new_val);
	});
});

wp.customize('hero_image', function(value) {
	value.bind(function(new_val) {
		$('.hero-section').css('background-image', 'url(' + new_val + ')');
	});
});
wp.customize('hero_button_text', function(value) {
	value.bind(function(new_val) {
		$('.hero-section .hero-button').text(new_val);
	});
});

wp.customize('hero_button_url', function(value) {
	value.bind(function(new_val) {
		$('.hero-section .hero-button').attr('href', new_val);
	});
});



}(jQuery));





