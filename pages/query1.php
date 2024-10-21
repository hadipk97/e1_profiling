<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php include 'include/bar.php'; ?>
        <!-- /top navigation -->

<!-- page content -->
    <section class="content">
        <div class="right_col" role="main">
          <div class="">
          <div class="page-title">
            
              <div class="title_left">
                <h3>Query</h3>
              </div>
            </div>
            <div class="clearfix">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
          <div class="x_title">       
            <div class="title_right"> <div class="box-body">
              <div class="row">
                  <form method="post" action="query1.php">
                <div class="col-xs-2">
                  <label>&ensp;</label>
                  <select class="form-control" name="con">
                    <option value=""></option>
                    <option value="AND">AND</option>
                    <option value="OR">OR</option>
                  </select>
                </div>
                <div class="col-xs-2">
                  <label>Coloum <font color="red">#</font></label>
                  <select class="form-control" name="col" required="required">
                    <option disabled selected>Option</option>
                    <?php
                    include 'include/dbconn.php'; 
                    $sql = "SELECT * FROM [jim].[dbo].[query] WHERE tbl = 'admin' ORDER BY show_name ASC";
                    $stmt1 = sqlsrv_query ($conn , $sql);
                    if( !$stmt1) {
                    }
                    while($row1=  sqlsrv_fetch_array($stmt1))
                    {
                    ?>
                    <option value="<?php echo $row1['col_name']; ?>" ><?php echo $row1['show_name']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-xs-2">
                  <label>Operator <font color="red">#</font></label>
                  <select class="form-control" name="ope" required="required">
                    <option disabled selected>Option</option>
                    <option value="NOT IN">Not In</option>
                    <option value="IN">In</option>
                    <option value="=">Equal</option>
                    <option value="<>">Not Equal</option>
                    <option value="LIKE">Like</option>
                  </select>
                </div>
                <div class="col-xs-5">
                  <label>Value <font color="red">#</font></label>
                  <input class="form-control" name="value" required="required">
                </div>
                <div class="col-xs-1">
                  <button type="submit" name="query_show" class="btn btn-primary">Query</button>
                </div>
              </form>

                <?php if (isset($_POST['query_show'])) {
                   echo "$_POST[col]
                   <br>  $_POST[ope]
                   <br>  $_POST[value]";
                   } ?>
              </div>
              <br>
            </div>
            </div>
          </div>
                  <div class="x_content">
                  <div class="form group">
                  <div class="row">
                  <div class="box-body">       

            </div>
              
              
              </div>
          </div>
     </div>
              </div>
          </div>
     </div>
        </div>
        
		</div>
        </div>
      </section>
        <!-- footer content -->
        <?php include 'footer.php'; ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <?php include 'include/js.php'; ?>
  </body>
</html>