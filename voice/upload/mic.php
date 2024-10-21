<?php error_reporting(0); ?>
<?php 
include 'dbconn.php';
$sql = sqlsrv_query($conn,"SELECT * FROM [dropzone].[dbo].[language] order by id DESC");
$r = sqlsrv_fetch_array($sql);
?>
<style>
  .speech input {border: 0; width: 240px; display: inline-block; height: 30px;}
  .speech img {float: center; width: 40px }
</style>

<!-- Search Form -->
<form id="labnol" method="post" action="process.php">
  <div class="speech">
    <center>
      <a onclick="startDictation()"><img src="pic/mic.svg"></a><br>
      <input type="hidden" name="q" id="transcript" placeholder="" />
    </center>
  </div>
</form>
<form method="post" action="process.php">
  <center>
    <select class="form-control" name="lang"  style="background-color: #25BDA6;width: 20%;border-color: #1A8762;" onchange="this.form.submit('')">
      <option><?php echo $r['lang'] ?></option>
      <?php include 'lang.php'; ?>
    </select>
  </center>
</form>

<!-- HTML5 Speech Recognition API -->
<script>
  function startDictation() {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = "<?php echo $r['lang'] ?>";
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById('transcript').value = e.results[0][0].transcript;
        recognition.stop();
        document.getElementById('labnol').submit();
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  }
</script>