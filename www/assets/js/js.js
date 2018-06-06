
function toggle_favorite(id) {
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function() {
    if (xhr.readyState == XMLHttpRequest.DONE) {
      document.getElementById('toggle-favorite-icon').setAttribute('src', '/assets/img/favorite-' + xhr.responseText + '.svg');
    }
  }
  xhr.open('GET', '/contacts/toggle_favorite/' + id, true);
  xhr.send();
}
