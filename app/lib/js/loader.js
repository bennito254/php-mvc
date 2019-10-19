/*
*  Loader
*/
window.onbeforeunload = () => {
   document.getElementById('loaderMini').style.visibility = 'visible';
};