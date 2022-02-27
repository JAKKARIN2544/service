<footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="">SERVICE APP</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> Close beta Test
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- ChartJS -->
<script src="assets/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<?php require_once 'src/modal/view_data_officer.php'?>
<?php require_once 'src/modal/view_data_users.php'?>
<?php require_once 'src/modal/view_data_sp.php'?>
<script>
$(document).ready(function(){
    $('.view_data').click(function(){
        var officer_id = $(this).attr("id");
        $.ajax({
            url : "src/ajax/sql_view_data.php",
            method : "post",
            data :{id:officer_id},
            success :function(data){
                $('#detail').html(data);
            }
        });
    });
});
$(document).ready(function(){
    $('.view_data_users').click(function(){
        var users_id = $(this).attr("id");
        $.ajax({
            url : "src/ajax/sql_view_data_users.php",
            method : "post",
            data :{id:users_id},
            success :function(data){
                $('#detail_users').html(data);
            }
        });
    });
});
$(document).ready(function(){
    $('.view_data_sp').click(function(){
        var sp_id = $(this).attr("id");
        $.ajax({
            url : "src/ajax/sql_view_data_sp.php",
            method : "post",
            data :{id:sp_id},
            success :function(data){
                $('#detail_sp').html(data);
            }
        });
    });
});
</script>
</body>
</html>
