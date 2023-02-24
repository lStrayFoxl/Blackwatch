"use strict"

let dataValidation = document.getElementById("dataValidation");
let purchaseBtn =    document.getElementById('purchaseBtn');
let butCancel =      document.getElementById("butCancel");
let errMessage =     document.getElementById("errMessage");



let data = {
    fName: document.getElementById("dataName"),
    fSurname: document.getElementById("dataSurname"),
    fPhone: document.getElementById("dataPhone"),
    fAddress: document.getElementById("dataAddress"),
    fModal: document.getElementById("dataModel")
}

// The function of adding data from the form to the modal window
function enterData() {
    let nameF =    document.getElementById("enterName").value;
    let surnameF = document.getElementById("enterSurname").value;
    let phoneF =   document.getElementById("enterPhone").value;
    let addressF = document.getElementById("enterAddress").value;
    let modalF =   document.getElementById("enterModel").value;

    let dataForm = [nameF, surnameF, phoneF, addressF, modalF];

    validationData(dataForm);

    if(validationData(dataForm)){
        data.fName.innerHTML =    document.getElementById("enterName").value;
        data.fSurname.innerHTML = document.getElementById("enterSurname").value;
        data.fPhone.innerHTML =   document.getElementById("enterPhone").value;
        data.fAddress.innerHTML = document.getElementById("enterAddress").value;
        data.fModal.innerHTML =   document.getElementById("enterModel").value;

        return true;
    }else{
        return false;
    }
}

// Data validation function
function validationData(arr) {
    for(let i of arr) {
        if (i == "") {
            return false;
        }
    };
    
    return true;
}

// Function to open a modal window
purchaseBtn.onclick = function() {
    enterData();

    if(enterData()){
        dataValidation.style.display = "block";
    }else{
        errMessage.style.display = "block";
    }
    
}

// Modal close function
butCancel.onclick = function() {
    dataValidation.style.display = "none";
}
// Modal close function
window.onclick = function(event) {
    if (event.target == dataValidation) {
        dataValidation.style.display = "none";
    }
}

let nameF =    document.getElementById("enterName").value;
let surnameF = document.getElementById("enterSurname").value;
let phoneF =   document.getElementById("enterPhone").value;
let addressF = document.getElementById("enterAddress").value;
let modalF =   document.getElementById("enterModel").value;

// Function to disable the form error message
function disableErrMess() {
    errMessage.style.display = "none";
}
