/*
*  All variables
*/
export const content = document.getElementById('content'), // Thecontent container
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

   adminProfileMenuToggle = document.getElementById('adminProfileMenuToggle'), // Admin avatar from the CMS
   adminProfileMenu = document.getElementById('adminProfileMenu'), // Admin profile from the CMS

   back = document.getElementById('back'), // The back-to-top button

   title = document.getElementById('categoryTitle'), // Category title from the category page
   defaultTab = document.getElementById("defaultOpen").click(); // Default tab

export let dropDownMenu = document.getElementsByClassName('drop-down-menu'), // Drop down menu
   dropDownLink = document.getElementsByClassName('drop-down-link'), // Drop down menu

   tabLinks = document.getElementsByClassName('tablinks'), // Tablinks
   tabContent = document.getElementsByClassName('tabcontent'); // Tab content