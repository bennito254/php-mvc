// Toggling the CMS menu
export const adminProfileMenu = () => {
   variable.adminProfileMenuToggle.onclick = (el) => {
      el.stopPropagation()
      variable.adminProfileMenu.classList.toggle('active')
      document.onclick = (event) => {
         if (event.target.closest('#adminProfileMenu')) return
         variable.adminProfileMenu.classList.remove('active')
      }
   }
}

export const searchForm = () => {
   variable.headerSearchFormToggle.forEach(element => {
      element.onclick = () => {
         console.log('clicked')
         element.classList.toggle('active')
         variable.headerSearchForm.forEach(element => {
            element.classList.toggle('active')
         })
      }
   })
}