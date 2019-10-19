window.onload = () => {
   const adminProfileMenuToggle = document.getElementById('adminProfileMenuToggle'), // Admin avatar from the CMS
      adminProfileMenu = document.getElementById('adminProfileMenu'), // Admin profile from the CMS
      headerSearchForm = document.querySelectorAll('#headerSearchForm'), // Mobile search form
      headerSearchFormToggle = document.querySelectorAll('#headerSearchFormToggle'); // Mobile search form toggle

   // Toggling the CMS menu
   adminProfileMenuToggle.onclick = (el) => {
      el.stopPropagation();
      adminProfileMenu.classList.toggle('active');
      document.onclick = (event) => {
         if (event.target.closest('#adminProfileMenu')) return;
         adminProfileMenu.classList.remove('active');
      }
   }

   headerSearchFormToggle.forEach(element => {
      element.onclick = () => {
         console.log('clicked');
         element.classList.toggle('active');
         headerSearchForm.forEach(element => {
            element.classList.toggle('active');
         });
      }
   });
}