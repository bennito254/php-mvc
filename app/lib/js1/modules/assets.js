/*
*  Loader
*/
const loader = () => {
   window.onbeforeunload = () => {
      document.getElementById('loaderMini').style.visibility = 'visible';
   }
}

export default loader;

/*
*  Tabs  
*/
export const tab = (evt, tabName) => {
   for (i = 0; i < variable.tabContent.length; i++) {
      variable.tabContent[i].style.display = "none";
   }
   for (i = 0; i < tabLinks.length; i++) {
      variable.tabLinks[i].className = tabLinks[i].className.replace(` active`, "");
   }
   document.getElementById(tabName).style.display = "block";
   evt.currentTarget.className += ` active`;
}

/*
 *  Disqus integration
 */
export const disqus = () => {
   /**
   *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
   *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
   /*
   var disqus_config = function () {
   this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
   this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
   };
   */
   (function () { // DON'T EDIT BELOW THIS LINE
      var d = document, s = d.createElement('script');
      s.src = 'https://ace-5.disqus.com/embed.js';
      s.setAttribute('data-timestamp', +new Date());
      (d.head || d.body).appendChild(s);
   })();
}

export const tinyMce = () => {
   tinymce.init({
      selector: '#editor',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker lists checklist media mediaembed pageembed permanentpen powerpaste tinycomments tinydrive tinymcespellchecker emoticons',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter insertfile pageembed permanentpen emoticons',
      toolbar_drawer: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      theme: 'silver',
      mobile: {
         theme: 'mobile',
         plugins: ['autosave', 'lists', 'autolink'],
         toolbar: ['undo', 'redo', 'bold', 'italic', 'link', 'emoticons', 'styleselect']
      }
   });
}