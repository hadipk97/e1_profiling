<script>
function countHargaTotalFromKuantiti(value, child_id) {
    var greatparentNode = document.getElementById(child_id).parentElement.parentElement.parentElement;
    var index = Array.from(
        document.getElementById('list_komoditi').children
    ).indexOf(greatparentNode);
    var hargaTotal = $('#harga_' + index).val() * value;
    $('#hargatotal_' + index).val(hargaTotal.toFixed(2));
    //sum all hargatotal(db)
    var sumOfAllHargatotal = 0;
    $('.hargatotalfromdb').each(function(){
    var tdText = $(this).text();
    sumOfAllHargatotal += parseFloat(tdText);
    });
    console.log(sumOfAllHargatotal);
    //sum all hargatotal(new)
    var values = $("input[name='hargatotal[]']")
        .map(function() {
            return $(this).val();
        }).get();
    var total = 0;
    for (var i = 0; i < values.length; i++) {
        total += values[i] << 0;
    }
    console.log(total);
    //sum all
    total = total+sumOfAllHargatotal;
    $('#total').val('RM '+total);
}

function countHargaTotalFromHarga(value, child_id) {
    var greatparentNode = document.getElementById(child_id).parentElement.parentElement.parentElement;
    var index = Array.from(
        document.getElementById('list_komoditi').children
    ).indexOf(greatparentNode);
    var hargaTotal = $('#kuantiti_' + index).val() * value;
    $('#hargatotal_' + index).val(hargaTotal.toFixed(2));

    //sum all hargatotal(db)
    var sumOfAllHargatotal = 0;
    $('.hargatotalfromdb').each(function(){
    var tdText = $(this).text();
    sumOfAllHargatotal += parseFloat(tdText);
    });
    console.log(sumOfAllHargatotal);
    //sum all hargatotal(new)
    var values = $("input[name='hargatotal[]']")
        .map(function() {
            return $(this).val();
        }).get();
    var total = 0;
    for (var i = 0; i < values.length; i++) {
        total += values[i] << 0;
    }
    console.log(total);
    //sum all
    total = total+sumOfAllHargatotal;
    $('#total').val('RM '+total);
}
</script>