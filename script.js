function fetchJSONFile(path, callback) {
   var httpRequest = new XMLHttpRequest();
   httpRequest.onreadystatechange = function() {
       if (httpRequest.readyState === 4) {
           if (httpRequest.status < 400) {
               var data = (httpRequest.responseText);
               if (callback) callback(data);
           }
       }
   };
   httpRequest.open('GET', path);
   httpRequest.send();
}

// this requests the file and executes a callback with the parsed result once
//   it is available
fetchJSONFile('vid1.json', function(data){
   // do something with your data
   console.log(data);
});
