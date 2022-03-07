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
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
<?php require_once 'src/modal/view_data_job_service.php'?>
<?php require_once 'src/modal/view_data_list_sp.php'?>
<?php require_once 'src/modal/change_status.php'?>
<script>
$(document).ready(function(){
    $('.view_data').click(function(){
        var job_service_id = $(this).attr("id");
        $.ajax({
            url : "src/ajax/sql_view_data_jobserevice.php",
            method : "post",
            data :{id:job_service_id},
            success :function(data){
                $('#detail_job').html(data);
            }
        });
    });
});
$(document).ready(function(){
    $('.view_data').click(function(){
        var sp_list_id = $(this).attr("id");
        $.ajax({
            url : "src/ajax/sql_view_data_sp_list.php",
            method : "post",
            data :{id:sp_list_id},
            success :function(data){
                $('#detail_list_sp').html(data);
            }
        });
    });
});

</script>
<?php require_once 'src/chart/officer_chart.php'?>
<!-- ChartJS -->

</body>
</html>
