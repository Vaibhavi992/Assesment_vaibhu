function validateForm() {
    var firstName=
    document.getElementById("inp1").value;
    var lastName=
    document.getElementById("inp2").value;
    var Email=
    document.getElementById("inp3").value;
    var password=
    document.getElementById("inp13").value;


    if (firstName ==="") {
      
        alert("please enter a firstName");
        return false;
    }
    if (lastName ==="") {
        alert("please enter a lastName");
        return false;
    }
    if (Email ==="") {
      alert("please enter a Email");
      return false;
    }
      if (password ==="") {
        alert("please enter a password");
        return false;
    }
    else{
      return true;
    }
    
    
    
}