// SORTING LIST

if (document.title === "Panel admina - Edytuj menu") {
  function saveMenu() {
    // zapisanie zmian do POST
    let positions = [];
    $(".updated").each(function () {
      positions.push([$(this).attr("data-id"), $(this).attr("data-position")]);
      $(this).removeClass("updated");
    });

    $.ajax({
      url: "index.php",
      method: "POST",
      dataType: "text",
      data: { positions },
    });
  }

  function updateMenu() {
    // update atrybutu data position
    $(this)
      .children()
      .each(function (index) {
        if ($(this).attr("data-position") != index + 1) {
          $(this)
            .attr("data-position", index + 1)
            .addClass("updated");
        }
      });
    saveMenu();
    $(".btn-success").removeClass("disabled");
  }

  $(document).ready(function () {
    // po każdej zmianie działa funkcja updateMenu()
    $("#sortable").sortable({ update: updateMenu });
  });
}

// LOGOUT TIMEOUT SCRIPT
if (document.title === "Wylogowano") {
  setTimeout(() => (window.location.href = "/"), 2000);
} else if (document.title === "Zalogowano") {
  setTimeout(() => (window.location.href = "/?p=admin&l=1"), 2000);
} else if (
  document.title === "Zmiany zostały wprowadzone" ||
  document.title === "Strona została dodana" ||
  document.title === "Strona została usunięta"
) {
  setTimeout(() => (window.location.href = "/?p=admin&l=1&a=page"), 2000);
} else if (
  document.title === "Dodano pozycję do menu" ||
  document.title === "Usunięto pozycję z menu" ||
  document.title === "Kolejność zmieniona pomyślnie"
) {
  setTimeout(() => (window.location.href = "/?p=admin&l=1&a=menu"), 2000);
}

if (
  document.title === "Panel admina - Edycja strony" ||
  document.title === "Panel admina - Dodaj stronę"
) {
  // MAIN PAGE CHECKBOX CLEAR
  const checkbox = $("#isMain")[0];
  const urlInput = $("#url")[0];

  function clearInput() {
    if (checkbox.checked) {
      urlInput.required = false;
      urlInput.disabled = true;
      urlInput.placeholder = `nie można ustawić dla strony głównej`;
    } else if (!checkbox.checked) {
      urlInput.required = true;
      urlInput.disabled = false;
      urlInput.placeholder = ``;
    }
  }
  checkbox.addEventListener("change", clearInput);
  clearInput();

  // CKEDITOR SETUP
  CKEDITOR.replace("article") && CKEDITOR.replace("article");
}
