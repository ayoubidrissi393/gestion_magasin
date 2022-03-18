function incrementValue() {
    var value = parseInt(document.getElementById('quantity').value);
    value = isNaN(value) ? 0 : value;
    // if(value<100){
    value++;
    document.getElementById('quantity').value = value;
    // }
}

function decrementValue() {
    var value = parseInt(document.getElementById('quantity').value);
    value = isNaN(value) ? 0 : value;
    if (value > 1) {
        value--;
        document.getElementById('quantity').value = value;
    }

}
// _____________________________________________________________________


disabled_inputs();

function disabled_inputs() {
    document.querySelectorAll('.disabling_btn_js').forEach(element => element.disabled = true);
}
disabled_quantity();

function disabled_quantity() {
    document.querySelectorAll('.quantity').forEach(element => element.disabled = true);
}