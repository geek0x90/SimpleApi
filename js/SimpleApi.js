class SimpleApi {
  constructor(api_uri) {
    this.api_uri = api_uri || 'api.php';
  }

  request(params, callback, method) { //request via post or get the api data
    method = method || "post"; //default method is post

    //var json = JSON.stringify(params);
    var json = this.urlEncodeObject(params);

    var xhr = new XMLHttpRequest();

    xhr.open("POST", this.api_uri, true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            callback(xhr.responseText);
        }
    }

    xhr.send(json);
  }

  urlEncodeObject(data) {
    const params = Object.keys(data).map(key => data[key] ? `${encodeURIComponent(key)}=${encodeURIComponent(data[key])}` : '');
    return params.filter(value => !!value).join('&');
  }
}
