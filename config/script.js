// SORTING LIST

$(document).ready(function(){
    $("#sortable").sortable({
      update: function (event, ui) {
        $(this).children().each(function() {
        saveNewPositions();
    }
});
});

function saveNewPositions() {
 var positions = [];
 $('.updated').each(function () {
    positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
    $(this).removeClass('updated');
 });

 $.ajax({
    url: 'index.php',
    method: 'POST',
    dataType: 'text',
    data: {
        update: 1,
        positions: positions
    }, success: function (response) {
         console.log(response);
    }
 });
}
  
// CKEDITOR SETUP
CKEDITOR.replace('article') && CKEDITOR.replace('article');

// LOGOUT TIMEOUT SCRIPT
if(document.title === 'Wylogowano'){
  setTimeout(() => window.location.href= '/',3000);
}else if(document.title === 'Zalogowano'){
  setTimeout(() => window.location.href= '/?p=admin&l=1',3000);
}
