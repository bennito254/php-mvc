/*
*  Tabs  
*/
let
   tabLinks = document.getElementsByClassName('tablinks'), // Tablinks
   tabContent = document.getElementsByClassName('tabcontent'); // Tab content

function openTab(evt, tabName) {
   for (i = 0; i < tabContent.length; i++) {
      tabContent[i].style.display = "none";
   }
   for (i = 0; i < tabLinks.length; i++) {
      tabLinks[i].className = tabLinks[i].className.replace(` active`, "");
   }
   document.getElementById(tabName).style.display = "block";
   evt.currentTarget.className += ` active`;
}
document.getElementById("defaultOpen").click();