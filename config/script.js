// SORTING LIST

if(document.title === "Panel admina - Edytuj menu"){
function saveMenu() {
  // zapisanie zmian do POST
  let positions = [];
  $('.updated').each(function () {
     positions.push([$(this).attr('data-id'), $(this).attr('data-position')]);
     $(this).removeClass('updated');
  });

  $.ajax({
     url: 'index.php',
     method: 'POST',
     dataType: 'text',
     data: {positions},
      success: function (response) {
          console.log(response);
     },
  })
}

function updateMenu(){
  // update atrybutu data position
  $(this).children().each(function (index) {
  if($(this).attr('data-position') != (index+1)){
    $(this).attr('data-position', (index+1)).addClass('updated')
    }
  });
  saveMenu();
}

$(document).ready(function(){
  // po każdej zmianie działa funkcja updateMenu()
    $("#sortable").sortable({update: updateMenu});
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

// MAIN PAGE CHECKBOX CLEAR
const checkbox = $("#isMain")[0];
const urlInput = $("#url")[0];

function clearInput(){
  if(checkbox.checked){
    urlInput.required = false;
    urlInput.disabled = true;
    urlInput.placeholder = `nie można ustawić dla strony głównej`;
  } else{
    urlInput.required = true;
    urlInput.disabled = false;
    urlInput.placeholder = ``;
  }
}
checkbox.addEventListener("change", clearInput)
clearInput();
