function validateForm() {
    let x = document.forms["jequiti"]["name"].value;
    let y = document.forms["jequiti"]["email"].value;
    let z = document.forms["jequiti"]["senha"].value;
    if (x == "" && y == "" && z == "") {
      alert("BOTE A INFORMAÇÃO !!!");
      return false;
    }
  }