// SORTING LIST

$(document).ready(function(){
    $("#sortable").sortable();
    $("#sortable").disableSelection();
  });

// CKEDITOR SETUP
CKEDITOR.replace('article');


// LOGOUT TIMEOUT SCRIPT
if(window.location.pathname === '/?p=login&a=logout'){
setTimeout(function () {
  window.location.href= '/';
},3000);
}

console.log(window.location.pathname)
