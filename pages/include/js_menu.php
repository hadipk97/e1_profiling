    <script src="../gentelella-master/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../gentelella-master/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../gentelella-master/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../gentelella-master/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../gentelella-master/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../gentelella-master/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../gentelella-master/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../gentelella-master/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../gentelella-master/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../gentelella-master/vendors/Flot/jquery.flot.js"></script>
    <script src="../gentelella-master/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../gentelella-master/vendors/Flot/jquery.flot.time.js"></script>
    <script src="../gentelella-master/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../gentelella-master/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../gentelella-master/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../gentelella-master/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../gentelella-master/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../gentelella-master/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../gentelella-master/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../gentelella-master/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../gentelella-master/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../gentelella-master/vendors/moment/min/moment.min.js"></script>
    <script src="../gentelella-master/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../gentelella-master/build/js/custom.js"></script>

    <script src="../gentelella-master/production/datepicker/bootstrap-datepicker.js"></script>

    
    <!-- Datatables -->
    <script src="../gentelella-master/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../gentelella-master/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../gentelella-master/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../gentelella-master/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../gentelella-master/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../gentelella-master/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../gentelella-master/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../gentelella-master/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../gentelella-master/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../gentelella-master/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../gentelella-master/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../gentelella-master/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../gentelella-master/vendors/jszip/dist/jszip.min.js"></script>
    <script src="../gentelella-master/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../gentelella-master/vendors/pdfmake/build/vfs_fonts.js"></script>
  <script src="../gentelella-master/production/plugins/daterangepicker/daterangepicker.js"></script>
  <script src="../gentelella-master/production/plugins/daterangepicker/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../gentelella-master/build/plugins/daterangepicker/daterangepicker.js"></script>

    

    
    <script>    

    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });
    $('#datepicker1').datepicker({
      autoclose: true
    });
    $('#datepicker2').datepicker({
      autoclose: true
    });
</script>
    <script type="text/javascript">
$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


//according menu

$(document).ready(function()
{
    //Add Inactive Class To All Accordion Headers
    $('.accordion-header').toggleClass('inactive-header');
    
    //Set The Accordion Content Width
    var contentwidth = $('.accordion-header').width();
    $('.accordion-content').css({});
    
    //Open The First Accordion Section When Page Loads
    $('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
    $('.accordion-content').first().slideDown().toggleClass('open-content');
    
    // The Accordion Effect
    $('.accordion-header').click(function () {
        if($(this).is('.inactive-header')) {
            $('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
            $(this).toggleClass('active-header').toggleClass('inactive-header');
            $(this).next().slideToggle().toggleClass('open-content');
        }
        
        else {
            $(this).toggleClass('active-header').toggleClass('inactive-header');
            $(this).next().slideToggle().toggleClass('open-content');
        }
    });
    
    return false;
});
</script>
<script>
document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'complete') {
         document.getElementById('interactive');
         document.getElementById('load').style.visibility="hidden";
  }
}
</script>
    <script>
  $(function () {
    $("#example1").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
    $("#example2").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
    $("#example3").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
    $("#example4").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
    $("#example5").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });

    $("#example6").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
     $("#example7").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
     $("#example8").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
    <!-- Custom Theme Scripts -->

<script>
$('#myModal').on('show.bs.modal', function (e) {
  // get information to update quickly to modal view as loading begins
  var opener=e.relatedTarget;//this holds the element who called the modal
   
   //we get details from attributes
  var firstname=$(opener).attr('id_fir');

//set what we got to our form
  $('#penyiasat_form').find('[name="id_fir"]').val(firstname);
   
});
</script>
<script>
$('#reject_fir').on('show.bs.modal', function (e) {
  // get information to update quickly to modal view as loading begins
  var opener=e.relatedTarget;//this holds the element who called the modal
   
   //we get details from attributes
  var firstname=$(opener).attr('id_fir');

//set what we got to our form
  $('#reject_fir_form').find('[name="id_fir"]').val(firstname);
   
});
</script>
<script>
$('#reject_risik').on('show.bs.modal', function (e) {
  // get information to update quickly to modal view as loading begins
  var opener=e.relatedTarget;//this holds the element who called the modal
   
   //we get details from attributes
  var firstname=$(opener).attr('id_fir');

//set what we got to our form
  $('#reject_risik_form').find('[name="id_fir"]').val(firstname);
   
});
</script>
<script>
$('#hantar_semula').on('show.bs.modal', function (e) {
  // get information to update quickly to modal view as loading begins
  var opener=e.relatedTarget;//this holds the element who called the modal
   
   //we get details from attributes
  var firstname=$(opener).attr('fir');

//set what we got to our form
  $('#hantar_semula').find('[name="fir"]').val(firstname);
   
});
</script>
<script>
$('#hantar_semula').on('show.bs.modal', function (e) {
  // get information to update quickly to modal view as loading begins
  var opener=e.relatedTarget;//this holds the element who called the modal
   
   //we get details from attributes
  var firstname=$(opener).attr('id');

//set what we got to our form
  $('#hantar_semula').find('[name="id"]').val(firstname);
   
});
</script>
<script>
  $(document).ready(function () {
    //Initialize tooltips
    $(' button[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});
</script>

<script>
  $(document).ready(function () {
    //Initialize tooltips
    $(' a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});
</script>
<script>
    function ngri_risik(that) 
    {
      if (that.value == "Ibu Pejabat") {
            document.getElementById("div_HQ").style.display = "block";
        } else {
            document.getElementById("div_HQ").style.display = "none";
        }

      if (that.value == "Johor") {
            document.getElementById("div_Johor").style.display = "block";
        } else {
            document.getElementById("div_Johor").style.display = "none";
        }

      if (that.value == "Kedah") {
            document.getElementById("div_Kedah").style.display = "block";
        } else {
            document.getElementById("div_Kedah").style.display = "none";
        }

      if (that.value == "Kelantan") {
            document.getElementById("div_Kelantan").style.display = "block";
        } else {
            document.getElementById("div_Kelantan").style.display = "none";
        }

      if (that.value == "Melaka") {
            document.getElementById("div_Melaka").style.display = "block";
        } else {
            document.getElementById("div_Melaka").style.display = "none";
        }

      if (that.value == "Negeri Sembilan") {
            document.getElementById("div_Negeri Sembilan").style.display = "block";
        } else {
            document.getElementById("div_Negeri Sembilan").style.display = "none";
        }

      if (that.value == "Pahang") {
            document.getElementById("div_Pahang").style.display = "block";
        } else {
            document.getElementById("div_Pahang").style.display = "none";
        }

      if (that.value == "Perak") {
            document.getElementById("div_Perak").style.display = "block";
        } else {
            document.getElementById("div_Perak").style.display = "none";
        }

      if (that.value == "Perlis") {
            document.getElementById("div_Perlis").style.display = "block";
        } else {
            document.getElementById("div_Perlis").style.display = "none";
        }

      if (that.value == "Pulau Pinang") {
            document.getElementById("div_Pulau Pinang").style.display = "block";
        } else {
            document.getElementById("div_Pulau Pinang").style.display = "none";
        }

      if (that.value == "Sabah") {
            document.getElementById("div_Sabah").style.display = "block";
        } else {
            document.getElementById("div_Sabah").style.display = "none";
        }

      if (that.value == "Sarawak") {
            document.getElementById("div_Sarawak").style.display = "block";
        } else {
            document.getElementById("div_Sarawak").style.display = "none";
        }

      if (that.value == "Selangor") {
            document.getElementById("div_Selangor").style.display = "block";
        } else {
            document.getElementById("div_Selangor").style.display = "none";
        }

      if (that.value == "Terengganu") {
            document.getElementById("div_Terengganu").style.display = "block";
        } else {
            document.getElementById("div_Terengganu").style.display = "none";
        }

      if (that.value == "Wilayah Persekutuan Kuala Lumpur") {
            document.getElementById("div_Wilayah Persekutuan Kuala Lumpur").style.display = "block";
        } else {
            document.getElementById("div_Wilayah Persekutuan Kuala Lumpur").style.display = "none";
        }

      if (that.value == "Wilayah Persekutuan Labuan") {
            document.getElementById("div_Wilayah Persekutuan Labuan").style.display = "block";
        } else {
            document.getElementById("div_Wilayah Persekutuan Labuan").style.display = "none";
        }

      if (that.value == "Wilayah Persekutuan Putrajaya") {
            document.getElementById("div_Wilayah Persekutuan Putrajaya").style.display = "block";
        } else {
            document.getElementById("div_Wilayah Persekutuan Putrajaya").style.display = "none";
        }

    }
</script>