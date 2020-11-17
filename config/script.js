// SORTING LIST

// $(document).ready(function(){
//     $("#sortable").sortable();
//     $("#sortable").disableSelection();
//   });

// CKEDITOR SETUP
// CKEDITOR.replace('article');

// LOGOUT TIMEOUT SCRIPT
if(document.title === 'Wylogowano'){
  setTimeout(() => window.location.href= '/',3000);
}else if(document.title === 'Zalogowano'){
  setTimeout(() => window.location.href= '/?p=admin&l=1',3000);
}
