function getResponse(query, callback, dialogId) {
  var url = "https://api.projectoxford.ai/luis/v1/application/preview";

  url += "?id=" + Config.luisAppId + "&subscription-key=" + Config.luisApiKey + "&q=" + encodeURIComponent(query);

  if (dialogId != null && dialogId.length > 0) {
    url += "&contextId=" + encodeURIComponent(dialogId);
  }

  httpRequest = new XMLHttpRequest();

  httpRequest.onreadystatechange = function() {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
      if (httpRequest.status === 200) {
        callback(httpRequest.responseText);
      }
    }
  }

  httpRequest.open('GET', url, true);
  httpRequest.send(null);
}

function display(text) {
  document.getElementById("content").innerHTML = text;
}
