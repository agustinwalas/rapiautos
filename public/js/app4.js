window.onload = function() {
  console.log("se cargo js")


  document.getElementById('temanoche').onclick = function () {
    var href =  document.getElementById('nochetema').href;
    if (href=='http://localhost:8000/css/estiloind.css') {
     document.getElementById('nochetema').href = '/css/estiloind_night.css'
     } else {
        document.getElementById('nochetema').href = '/css/estiloind.css';
    }
 }





}
