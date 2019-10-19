tinymce.init({
   selector: '#editor',

   theme: 'silver',

   height: 500,

   menubar: true,

   plugins: [
      'advlist autolink lists link image charmap print preview anchor',
      'searchreplace visualblocks advcode fullscreen',
      'insertdatetime media table contextmenu powerpaste tinymcespellchecker a11ychecker linkchecker mediaembed',
      'wordcount formatpainter permanentpen pageembed checklist'
   ],

   toolbar: 'undo redo | insert | styleselect | bold italic formatpainter permanentpen pageembed | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | advcode spellchecker a11ycheck | code | checklist',
   toolbar_drawer: 'floating',

   table_toolbar: "tableprops cellprops tabledelete | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol",

   tinycomments_mode: 'embedded',
   tinycomments_author: 'Author name',

   spellchecker_language: 'en',
   spellchecker_dialog: true,

   mobile: {
      theme: 'mobile',
      plugins: ['autosave', 'lists', 'autolink'],
      toolbar: ['undo', 'redo', 'bold', 'italic', 'link', 'emoticons', 'styleselect']
   }
});
