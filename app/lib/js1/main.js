//Import all the variables
import * as variable from './modules/variables.js.js.js';

//Import all menus
import * as menu from './modules/menus.js.js.js';

// Import all assets
import * as asset from './modules/assets.js.js.js';

window.onload = () => {

   // Initialize the page loader
   asset.loader();

   // Initialize all the menus
   menu.adminProfileMenu();
   menu.searchForm();

   /*
   *  View images with the [data-src] attribute
      once they scroll into view
   */
   const lazyLoad = (target) => {
      const io = new IntersectionObserver((entries, observer) => {
         entries.forEach(entry => {
            if (entry.isIntersecting) {
               const img = entry.target;
               const src = img.getAttribute('data-src');

               img.setAttribute('src', src);
               img.classList.add('loaded');

               observer.disconnect();
            }
         });
      });

      io.observe(target);
   }
   variable.dataSrc.forEach(lazyLoad);

   /*
   *  Fetch all elements with [data-bg] attribute and
      and set that as their background
   */
   variable.dataBg.forEach(element => {
      let src = element.getAttribute('data-bg');
      element.style.backgroundImage = `url(${src})`;
   });

   // Toggle the header search form
   variable.headerSearchFormToggle.forEach(element => {
      element.onclick = () => {
         element.classList.toggle('active');
         variable.headerSearchForm.forEach(element => {
            element.classList.toggle('active');
         });
      }
   });

   // Close the header search form
   variable.headerSearchFormClose.forEach(element => {
      element.onclick = () => {
         element.classList.remove('active');
         variable.headerSearchForm.forEach(element => {
            element.classList.remove('active');
         });
      }
   });

   /*
   *  All functions that take place when the
      window is scrolled
   */
   window.onscroll = () => {
      /*
      *  Add the scrolled class to the desktop and mobile
         headers once the body scrolls 50px
      */
      // Desktop nav
      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
         variable.desktopHeader.classList.add('scrolled');
      } else {
         variable.desktopHeader.classList.remove('scrolled');
      }
      // Mobile nav
      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
         variable.mobileHeader.classList.add('scrolled');
      } else {
         variable.mobileHeader.classList.remove('scrolled');
      }

      /*
      *  Display the back-to-top button once the
         window scrolls 500px
      */
      if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
         variable.back.classList.add('scrolled');
         variable.back.onclick = () => {
            window.scroll({ top: 0, left: 0, behavior: 'smooth' });
         }
      } else {
         variable.back.classList.remove('scrolled');
      }

      /*
      *  Add a parallax fx to the category title in the category page
      */
      scrollLength = document.documentElement.scrollTop;
      variable.title.style.transform = `translateY(${scrollLength}%)`;
      variable.title.style.transition = '0s';
   }


   /* 
   *  Add the active class to the `dropDownLink` 
      when the `dropDownMenu` is hovered on
   */
   for (let i = 0; i < variable.dropDownMenu.length; i++) {
      const element = variable.dropDownMenu[i];
      element.onmouseover = () => {
         for (let i = 0; i < variable.dropDownLink.length; i++) {
            variable.dropDownLink[i].classList.add('active');
         }
      }

      element.onmouseout = () => {
         for (let i = 0; i < variable.dropDownLink.length; i++) {
            variable.dropDownLink[i].classList.remove('active');
         }
      }
   }
   // Function responsible for toggling the categories
   for (var i = 0; i < variable.dropDownLink.length; i++) {
      variable.dropDownLink[i].addEventListener('click', () => {
         this.classList.toggle('active');
         var dropDownMenu = this.nextElementSibling;

         if (dropDownMenu.style.maxHeight) {
            dropDownMenu.style.maxHeight = null;
         } else {
            dropDownMenu.style.maxHeight = dropDownMenu.scrollHeight + 'px';
         }
      });
   }

   // Function responsible for toggling the mobile menu
   variable.mobileMenuToggle.onclick = (el) => {
      el.stopPropagation();
      variable.mobileMenu.classList.toggle('active');
      variable.mobileMenuItems.classList.toggle('active');
      variable.mobileMenuToggle.classList.toggle('active');
      document.onclick = (event) => {
         if (event.target.closest("#mobileMenuItems")) return;
         variable.mobileMenu.classList.remove('active');
         variable.mobileMenuItems.classList.remove('active');
         variable.mobileMenuToggle.classList.remove('active');
      }
   }

   variable.mobileMenuClose.onclick = () => {
      variable.mobileMenu.classList.remove('active');
      variable.mobileMenuItems.classList.remove('active');
      variable.mobileMenuToggle.classList.remove('active');
   }

   // Toggle the header modal form
   variable.modalFormToggle.forEach(element => {
      element.onclick = (el) => {
         el.stopPropagation();

         variable.modalShade.forEach(element => {
            element.classList.add('active');
         });

         variable.modalForm.forEach(element => {
            element.classList.add('active');
         });

         document.onclick = (event) => {
            if (event.target.closest('#headerModalForm')) return;

            variable.modalShade.forEach(element => {
               element.classList.remove('active');
            });

            variable.modalForm.forEach(element => {
               element.classList.remove('active');
            });
         }

         variable.modalFormClose.forEach(element => {
            element.onclick = () => {

               variable.modalShade.forEach(element => {
                  element.classList.remove('active');
               });

               variable.modalForm.forEach(element => {
                  element.classList.remove('active');
               });
            }
         });
      }
   });
}