function redirectOnChange() {
    var selectElement = document.getElementById('employee_type');
    var selectedValue = selectElement.value;
    if (selectedValue !== "") {
        window.location.href = selectedValue;
    }
}