const NameOfStudent = document.getElementById('letterInput');
NameOfStudent.addEventListener('input', function () {
    const inputValue = NameOfStudent.value;
    const letterRegex = /^[A-Za-z]+$/;
    if (!letterRegex.test(inputValue)) { NameOfStudent.value = inputValue.replace(/[^A-Za-z]+/g, '');
}
});


const FatherName = document.getElementById('letterin');
FatherName.addEventListener('input', function () {
    const inputValue = FatherName.value;
    const letterRegex = /^[A-Za-z]+$/;
    if (!letterRegex.test(inputValue)) { FatherName.value = inputValue.replace(/[^A-Za-z]+/g, '');
}
});


const MobileNumber = document.getElementById("number");
MobileNumber.addEventListener("input", function (e) {
    let inputValue = e.target.value;
    const numericRegex = /^[0-9]*$/;
    if (!numericRegex.test(MobileNumber)) {
        e.target.value = MobileNumber.replace(/[^0-9]/g, "");
  }
});