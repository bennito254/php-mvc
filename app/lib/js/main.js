window.onload = () => {

   const content = document.getElementById('content'), // Thecontent container
      footer = document.getElementById('footer'), // The footer container

      dataSrc = document.querySelectorAll('[data-src]'), // All elements that have the [data-src] attribute
      dataBg = document.querySelectorAll('[data-bg]'), // All elements that have the [data-bg] attribute

      desktopHeader = document.getElementById('desktopNav'),
      mobileHeader = document.getElementById('mobileNav'),

      mobileMenu = document.getElementById('mobileMenu'), // Drop down menu
      mobileMenuToggle = document.getElementById('mobileMenuToggle'), // Menu toggle
      mobileMenuItems = document.getElementById('mobileMenuItems'), // Mobile menu items
      mobileMenuClose = document.getElementById('mobileMenuClose'), // Menu close btn

      headerSearchForm = document.querySelectorAll('#headerSearchForm'), // Mobile search form
      headerSearchFormToggle = document.querySelectorAll('#headerSearchFormToggle'), // Mobile search form toggle
      headerSearchFormClose = document.querySelectorAll('#headerSearchFormClose'), // Mobile search form close

      modalShade = document.querySelectorAll('#modalShade'), // Dark body overlay
      modalForm = document.querySelectorAll('#headerModalForm'), // Modal form
      modalFormToggle = document.querySelectorAll('#headerModalFormToggle'), // Modal form toggle
      modalFormClose = document.querySelectorAll('#modalFormClose'), // Modal clos btn

      back = document.getElementById('back'), // The back-to-top button

      title = document.getElementById('categoryTitle'); // Category title from the category page

   let dropDownMenu = document.getElementsByClassName('drop-down-menu'), // Drop down menu
      dropDownLink = document.getElementsByClassName('drop-down-link'); // Drop down menu


   /*
   *  View images with the [data-src] attribute
      once they scroll into view
   */
   function lazyLoad(target) {
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
   dataSrc.forEach(lazyLoad);

   /*
   *  Fetch all elements with [data-bg] attribute and
      and set that as their background
   */
   dataBg.forEach(element => {
      let src = element.getAttribute('data-bg');
      element.style.backgroundImage = `url(${src})`;
   });

   // Toggle the header search form
   headerSearchFormToggle.forEach(element => {
      element.onclick = () => {
         element.classList.toggle('active');
         headerSearchForm.forEach(element => {
            element.classList.toggle('active');
         });
      }
   });

   // Close the header search form
   headerSearchFormClose.forEach(element => {
      element.onclick = () => {
         element.classList.remove('active');
         headerSearchForm.forEach(element => {
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
         desktopHeader.classList.add('scrolled');
      } else {
         desktopHeader.classList.remove('scrolled');
      }
      // Mobile nav
      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
         mobileHeader.classList.add('scrolled');
      } else {
         mobileHeader.classList.remove('scrolled');
      }

      /*
      *  Display the back-to-top button once the
         window scrolls 500px
      */
      if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
         back.classList.add('scrolled');
         back.onclick = () => {
            window.scroll({ top: 0, left: 0, behavior: 'smooth' });
         }
      } else {
         back.classList.remove('scrolled');
      }

      /*
      *  Add a parallax fx to the category title in the category page
      */
      scrollLength = document.documentElement.scrollTop;
      title.style.transform = `translateY(${scrollLength}%)`;
      title.style.transition = '0s';
   }


   /* 
   *  Add the active class to the `dropDownLink` 
      when the `dropDownMenu` is hovered on
   */
   for (let i = 0; i < dropDownMenu.length; i++) {
      const element = dropDownMenu[i];
      element.onmouseover = () => {
         for (let i = 0; i < dropDownLink.length; i++) {
            dropDownLink[i].classList.add('active');
         }
      }

      element.onmouseout = () => {
         for (let i = 0; i < dropDownLink.length; i++) {
            dropDownLink[i].classList.remove('active');
         }
      }
   }
   // Function responsible for toggling the categories
   for (var i = 0; i < dropDownLink.length; i++) {
      dropDownLink[i].addEventListener('click', function () {
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
   mobileMenuToggle.onclick = (el) => {
      el.stopPropagation();
      mobileMenu.classList.toggle('active');
      mobileMenuItems.classList.toggle('active');
      mobileMenuToggle.classList.toggle('active');
      document.onclick = (event) => {
         if (event.target.closest("#mobileMenuItems")) return;
         mobileMenu.classList.remove('active');
         mobileMenuItems.classList.remove('active');
         mobileMenuToggle.classList.remove('active');
      }
   }

   mobileMenuClose.onclick = () => {
      mobileMenu.classList.remove('active');
      mobileMenuItems.classList.remove('active');
      mobileMenuToggle.classList.remove('active');
   }

   // Toggle the header modal form
   modalFormToggle.forEach(element => {
      element.onclick = function (el) {
         el.stopPropagation();

         modalShade.forEach(element => {
            element.classList.add('active');
         });

         modalForm.forEach(element => {
            element.classList.add('active');
         });

         document.onclick = function (event) {
            if (event.target.closest('#headerModalForm')) return;

            modalShade.forEach(element => {
               element.classList.remove('active');
            });

            modalForm.forEach(element => {
               element.classList.remove('active');
            });
         }

         modalFormClose.forEach(element => {
            element.onclick = function () {

               modalShade.forEach(element => {
                  element.classList.remove('active');
               });

               modalForm.forEach(element => {
                  element.classList.remove('active');
               });
            }
         });
      }
   });
}