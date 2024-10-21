<?php 
include 'include/dbconn.php';
$anal1="";
  $sql = "SELECT * FROM [jim].[dbo].[profile] ";
  $stmt = sqlsrv_query( $conn, $sql );
  if(!$stmt){}
  while( $anal = sqlsrv_fetch_array( $stmt)) {
    if($anal1!="")
      $anal1 .=",";
      $anal1 .= '"'.$anal['firstname'].'"';
  }
?>
      <?php include 'footer.php'; ?>

    </div>
  </div>

  <?php include 'include/js.php'; ?>


<?php for ($i=0; $i < $f; $i++) { ?>
<script>
function autocomplete<?= $i ?>(inp, arr) {

  var currentFocus;

  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;

      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;

      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete<?= $i ?>-list");
      a.setAttribute("class", "autocomplete<?= $i ?>-items");

      this.parentNode.appendChild(a);

      for (i = 0; i < arr.length; i++) {

        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {

          b = document.createElement("DIV");

          b.innerHTML = "<font color='red'>" + arr[i].substr(0, val.length) + "</font>";
          b.innerHTML += arr[i].substr(val.length);
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          b.addEventListener("click", function(e) {
              inp.value = this.getElementsByTagName("input")[0].value;
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete<?= $i ?>-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {

        currentFocus++;
        addActive(x);
      } else if (e.keyCode == 38) { 
        currentFocus--;
        addActive(x);
      } else if (e.keyCode == 13) {
        e.preventDefault();
        if (currentFocus > -1) {
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {

    if (!x) return false;
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    x[currentFocus].classList.add("autocomplete<?= $i ?>-active");
  }
  function removeActive(x) {

    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete<?= $i ?>-active");
    }
  }
  function closeAllLists(elmnt) {

    var x = document.getElementsByClassName("autocomplete<?= $i ?>-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }

  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}


var countries = [<?php echo $anal1; ?>];


autocomplete<?= $i ?>(document.getElementById("myauto_complete<?= $i ?>"), countries);
</script>
<?php } ?>

<script>
  document.addEventListener('keydown', function ( e ) {

    if ((e.ctrlKey) && ( String.fromCharCode(e.which).toLowerCase() === 'e') ) {
      $('#edit_loop').modal('show');
    }
});
  
function topFunction1() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 10000;
}
</script>