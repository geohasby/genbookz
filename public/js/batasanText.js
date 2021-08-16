$(document).ready(function() {
    $('#karakter').keyup(function() {
    var len = this.value.length;
    if (len >= 1000) {
    this.value = this.value.substring(0, 1000);
    }
    $('#hitung').text(1000 - len);
    });
    })