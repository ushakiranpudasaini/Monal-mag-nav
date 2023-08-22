(() => {
  // resources/js/app.js
  window.addEventListener("load", function() {
    document.querySelector("#side-open-button").addEventListener("click", function(e) {
      e.preventDefault();
      document.getElementById("sidenav").classList.add("side-open");
      var closeMenu = document.getElementById("side-close-button");
      var menutrapper = document.getElementById("sidenav");
      closeMenu.focus();
      menutrapper.classList.add("focustrap");
      monal_mag_trap();
    });
    document.querySelector("#side-close-button").addEventListener("click", function(e) {
      e.preventDefault();
      document.getElementById("sidenav").classList.remove("side-open");
      var openBtn = document.getElementById("side-open-button");
      var menutrapper = document.getElementById("sidenav");
      openBtn.classList.add("visible");
      menutrapper.classList.remove("focustrap");
      openBtn.focus();
    });
    document.querySelector("#search-open-button").addEventListener("click", function(e) {
      e.preventDefault();
      const show = document.getElementById("search-box");
      const field = document.getElementById("search-input");
      show.classList.add("search-active");
      show.classList.add("focustrap");
      field.focus();
      monal_mag_trap();
    });
    document.querySelector("#search-close-button").addEventListener("click", function(e) {
      e.preventDefault();
      const show = document.getElementById("search-box");
      const searchbtn = document.getElementById("search-open-button");
      show.classList.remove("search-active");
      show.classList.remove("focustrap");
      searchbtn.focus();
    });
    (function() {
      const siteNavigation = document.querySelector(".ss-nav");
      if (!siteNavigation) {
        return;
      }
      const menu = siteNavigation.getElementsByTagName("ul")[0];
      if (!menu.classList.contains("nav-menu")) {
        menu.classList.add("nav-menu");
      }
      const links = menu.getElementsByTagName("a");
      const linksWithChildren = menu.querySelectorAll(".menu-item-has-children > a, .page_item_has_children > a");
      for (const link of links) {
        link.addEventListener("focus", toggleFocus, true);
        link.addEventListener("blur", toggleFocus, true);
      }
      for (const link of linksWithChildren) {
        link.addEventListener("touchstart", toggleFocus, false);
      }
      const sidesiteNavigation = document.getElementById("sidenav");
      if (!sidesiteNavigation) {
        return;
      }
      const sidemenu = sidesiteNavigation.getElementsByTagName("ul")[0];
      if (!sidemenu.classList.contains("nav-menu")) {
        sidemenu.classList.add("nav-menu");
      }
      const sidelinks = sidemenu.getElementsByTagName("a");
      const sidelinksWithChildren = sidemenu.querySelectorAll(".menu-item-has-children > a, .page_item_has_children > a");
      for (const link of sidelinks) {
        link.addEventListener("focus", toggleFocus, true);
        link.addEventListener("blur", toggleFocus, true);
      }
      for (const link of sidelinksWithChildren) {
        link.addEventListener("touchstart", toggleFocus, false);
      }
      function toggleFocus() {
        if (event.type === "focus" || event.type === "blur") {
          let self = this;
          while (!self.classList.contains("nav-menu")) {
            if (self.tagName.toLowerCase() === "li") {
              self.classList.toggle("focus");
            }
            self = self.parentNode;
          }
        }
        if (event.type === "touchstart") {
          const menuItem = this.parentNode;
          event.preventDefault();
          for (const link of menuItem.parentNode.children) {
            if (menuItem !== link) {
              link.classList.remove("focus");
            }
          }
          menuItem.classList.toggle("focus");
        }
      }
    })();
    function monal_mag_trap() {
      const focusableElements = 'button, [href], input:not([type=hidden]), select, textarea, [tabindex]:not([tabindex="-1"])';
      const modal = document.querySelector(".focustrap");
      if (modal) {
        const firstFocusableElement = modal.querySelectorAll(focusableElements)[0];
        const focusableContent = modal.querySelectorAll(focusableElements);
        const lastFocusableElement = focusableContent[focusableContent.length - 1];
        document.addEventListener("keydown", function(e) {
          let isTabPressed = e.key === "Tab" || e.keyCode === 9;
          if (!isTabPressed) {
            return;
          }
          if (e.shiftKey) {
            if (document.activeElement === firstFocusableElement) {
              lastFocusableElement.focus();
              e.preventDefault();
            }
          } else {
            if (document.activeElement === lastFocusableElement) {
              firstFocusableElement.focus();
              e.preventDefault();
            }
          }
        });
        firstFocusableElement.focus();
      }
    }
    var monal_mag_slider = document.querySelectorAll(".splide");
    for (i = 0; i < monal_mag_slider.length; ++i) {
      if (monal_mag_slider[i]) {
        var no_posts = monal_mag_slider[i].getAttribute("data-typeId");
        var splide = new Splide(monal_mag_slider[i], {
          type: "loop",
          perPage: no_posts,
          gap: 15,
          breakpoints: {
            640: {
              perPage: 1,
              gap: ".7rem"
            }
          }
        });
        splide.mount();
      }
    }
  });
})();


