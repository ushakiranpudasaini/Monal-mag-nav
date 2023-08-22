// Navigation toggle
window.addEventListener('load', function () {

      document.querySelector('#side-open-button').addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById("sidenav").classList.add('side-open');
            var closeMenu = document.getElementById("side-close-button");
            var menutrapper = document.getElementById("sidenav");
            closeMenu.focus();
            menutrapper.classList.add('focustrap');
            monal_mag_trap();
      });

      document.querySelector('#side-close-button').addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById("sidenav").classList.remove('side-open');
            var openBtn = document.getElementById("side-open-button");
            var menutrapper = document.getElementById("sidenav");
            openBtn.classList.add('visible');
            menutrapper.classList.remove('focustrap');
            openBtn.focus();
      });

      document.querySelector('#search-open-button').addEventListener('click', function (e) {
            e.preventDefault();
            const show = document.getElementById('search-box');
            const field = document.getElementById('search-input');
            show.classList.add('search-active');
            show.classList.add('focustrap');
            field.focus();
            monal_mag_trap();
      });

      document.querySelector('#search-close-button').addEventListener('click', function (e) {
            e.preventDefault();
            const show = document.getElementById('search-box');
            const searchbtn = document.getElementById('search-open-button');
            show.classList.remove('search-active');
            show.classList.remove('focustrap');
            searchbtn.focus();
      });



      /**
       * Main Navigation Support of TAB Keys
       *
       * Handles toggling the navigation menu for small screens and enables TAB key
       * navigation support for dropdown menus.
       */
      (function () {
            // const siteNavigation = document.getElementById('site-navigation');

            // MAin NAV
            const siteNavigation = document.querySelector('.ss-nav');

            // Return early if the navigation don't exist.
            if (!siteNavigation) {
                  return;
            }

            const menu = siteNavigation.getElementsByTagName('ul')[0];

            if (!menu.classList.contains('nav-menu')) {
                  menu.classList.add('nav-menu');
            }

            // Get all the link elements within the menu.
            const links = menu.getElementsByTagName('a');

            // Get all the link elements with children within the menu.
            const linksWithChildren = menu.querySelectorAll('.menu-item-has-children > a, .page_item_has_children > a');

            // Toggle focus each time a menu link is focused or blurred.
            for (const link of links) {
                  link.addEventListener('focus', toggleFocus, true);
                  link.addEventListener('blur', toggleFocus, true);
            }

            // Toggle focus each time a menu link with children receive a touch event.
            for (const link of linksWithChildren) {
                  link.addEventListener('touchstart', toggleFocus, false);
            }




            // SIDENAV
            const sidesiteNavigation = document.getElementById('sidenav');

            // Return early if the navigation don't exist.
            if (!sidesiteNavigation) {
                  return;
            }

            const sidemenu = sidesiteNavigation.getElementsByTagName('ul')[0];

            if (!sidemenu.classList.contains('nav-menu')) {
                  sidemenu.classList.add('nav-menu');
            }

            // Get all the link elements within the menu.
            const sidelinks = sidemenu.getElementsByTagName('a');

            // Get all the link elements with children within the menu.
            const sidelinksWithChildren = sidemenu.querySelectorAll('.menu-item-has-children > a, .page_item_has_children > a');

            // Toggle focus each time a menu link is focused or blurred.
            for (const link of sidelinks) {
                  link.addEventListener('focus', toggleFocus, true);
                  link.addEventListener('blur', toggleFocus, true);
            }

            // Toggle focus each time a menu link with children receive a touch event.
            for (const link of sidelinksWithChildren) {
                  link.addEventListener('touchstart', toggleFocus, false);
            }



            /**
             * Sets or removes .focus class on an element.
             */
            function toggleFocus() {
                  if (event.type === 'focus' || event.type === 'blur') {
                        let self = this;
                        // Move up through the ancestors of the current link until we hit .nav-menu.
                        while (!self.classList.contains('nav-menu')) {
                              // On li elements toggle the class .focus.
                              if ('li' === self.tagName.toLowerCase()) {
                                    self.classList.toggle('focus');
                              }
                              self = self.parentNode;
                        }
                  }

                  if (event.type === 'touchstart') {
                        const menuItem = this.parentNode;
                        event.preventDefault();
                        for (const link of menuItem.parentNode.children) {
                              if (menuItem !== link) {
                                    link.classList.remove('focus');
                              }
                        }
                        menuItem.classList.toggle('focus');
                  }
            }
            // SIDENAV
      }());


      function monal_mag_trap() {
            const focusableElements =
                  'button, [href], input:not([type=hidden]), select, textarea, [tabindex]:not([tabindex="-1"])';
            const modal = document.querySelector('.focustrap'); // select the modal by it's class

            if (modal) {
                  const firstFocusableElement = modal.querySelectorAll(focusableElements)[0]; // get first element to be focused inside modal
                  const focusableContent = modal.querySelectorAll(focusableElements);
                  const lastFocusableElement = focusableContent[focusableContent.length - 1]; // get last element to be focused inside modal


                  document.addEventListener('keydown', function (e) {
                        let isTabPressed = e.key === 'Tab' || e.keyCode === 9;

                        if (!isTabPressed) {
                              return;
                        }

                        if (e.shiftKey) { // if shift key pressed for shift + tab combination
                              if (document.activeElement === firstFocusableElement) {
                                    lastFocusableElement.focus(); // add focus for the last focusable element
                                    e.preventDefault();
                              }
                        } else { // if tab key is pressed
                              if (document.activeElement === lastFocusableElement) { // if focused has reached to last focusable element then focus first focusable element after pressing tab
                                    firstFocusableElement.focus(); // add focus for the first focusable element
                                    e.preventDefault();
                              }
                        }
                  });

                  firstFocusableElement.focus();
            }

      }


      var monal_mag_slider = document.querySelectorAll('.splide');
      for (i = 0; i < monal_mag_slider.length; ++i) {
            if (monal_mag_slider[i]) {
                  var no_posts = monal_mag_slider[i].getAttribute('data-typeId');
                  var splide = new Splide(monal_mag_slider[i], {
                        type: 'loop',
                        perPage: no_posts,
                        gap: 15,
                        breakpoints: {
                              640: {
                                    perPage: 1,
                                    gap: '.7rem',
                              },
                        },
                  });
                  splide.mount();
            }
      }

});