 <!-- Footer -->
 <footer class="sticky-footer bg-white">
     <div class="container my-auto">
         <div class="copyright text-center my-auto">
             <span>Copyright &copy; Tim IT Programmer Diskominfo Kab. Jember 2021</span>
         </div>
     </div>
 </footer>
 <!-- End of Footer -->

 </div>
 <!-- End of Content Wrapper -->

 </div>
 <!-- End of Page Wrapper -->

 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
     <i class="fas fa-angle-up"></i>
 </a>

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="modalKeluar" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-body">
                 <h6>Anda yakin ingin keluar?</h6>
             </div>
             <div class="modal-footer">
                 <a class="btn btn-primary" href=<?php echo base_url('login/logout') ?>>Ya</a>
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
             </div>
         </div>
     </div>
 </div>

 <!-- Bootstrap core JavaScript-->
 <script src="<?= base_url() ?>assets/jquery/jquery.min.js"></script>
 <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="<?= base_url() ?>assets/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="<?= base_url() ?>js/sb-admin-2.min.js"></script>

 <!-- Page level plugins -->

 <script src="<?= base_url() ?>assets/datatables/jquery.dataTables.min.js"></script>
 <script src="<?= base_url() ?>assets/datatables/dataTables.bootstrap4.min.js"></script>
 <script src="<?= base_url(); ?>assets/toast/jquery.toast.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

 <!-- Page level custom scripts -->

 <script src="<?= base_url() ?>js/demo/datatables-demo.js"></script>
 <script>
     let get_date = function(date_value, format, separator) {
         separator = (separator === undefined) ? '-' : separator;

         var zero_in_left = function(n) {
             /*to add zero in single date : ex : 1-9 to 01-09 */
             var str = "" + n,
                 pad = "00";
             return pad.substring(0, pad.length - str.length) + str;
         };
         var date_var = new Date();
         if (date_value) {
             date_var = new Date(date_value);
         }
         var date_time = date_var.getTime();
         var date_miliseconds = date_var.getMilliseconds();
         var date_seconds = zero_in_left(date_var.getSeconds());
         var date_minutes = zero_in_left(date_var.getMinutes());
         var date_hours = zero_in_left(date_var.getHours());
         var date_days = date_var.getDay();
         var date_dates = zero_in_left(date_var.getDate());
         var date_months_real = zero_in_left(parseInt(date_var.getMonth()) + 1);
         var date_months = parseInt(date_var.getMonth());
         var date_years = date_var.getFullYear();
         var date_list_days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu'];
         var date_list_months = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agt', 'Sep', 'Okt', 'Nop', 'Des'];
         var date_list_monthsFull = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agtustus', 'September', 'Oktober', 'November', 'Desember'];
         var pattern = {
             /*2019-10-10*/
             default: date_years + separator + date_months_real + separator + date_dates,
             /*10-10-2019*/
             default_indonesia: date_dates + separator + date_months_real + separator + date_years,
             /*10 Agustus 2021*/
             default_indonesia_fullMonth: date_dates + " " + date_list_monthsFull[date_months] + " " + date_years,
             /*Minggu, 10 Mei 2019*/
             indonesia_with_day: date_list_days[date_days] + ', ' + date_dates + ' ' + date_list_months[date_months] +
                 ' ' + date_years,
             /*Minggu, 10 Mei 2019 with monthfull*/
             indonesia_with_dayFull: date_list_days[date_days] + ', ' + date_dates + ' ' + date_list_monthsFull[date_months] +
                 ' ' + date_years,
             /*2019-10-10 10:10:10*/
             default_with_time: date_years + separator + date_months_real + separator + date_dates + ' ' +
                 date_hours + ':' + date_minutes + ':' + date_seconds,
             /*10:10:10*/
             fulltime: date_hours + ':' + date_minutes + ':' + date_seconds,
             /*Ahad, 10 Mei 2019 10:10:10*/
             indonesia_with_day_time: date_list_days[date_days] + ', ' + date_dates + ' ' + date_list_months[date_months] + ' ' +
                 date_years + ' ' + date_hours + ':' + date_minutes + ':' + date_seconds,
             /*10:10 | Ahad, 10 Mei 2019*/
             indonesia_with_day_time_format1: date_hours + ':' + date_minutes + ' | ' +
                 date_list_days[date_days] + ', ' + date_dates + ' ' + date_list_months[date_months] + ' ' + date_years,
             /*10:10 | Ahad, 10 Mei 2019 full*/
             indonesia_with_day_time_formatFull: date_hours + ':' + date_minutes + ' | ' +
                 date_list_days[date_days] + ', ' + date_dates + ' ' + date_list_monthsFull[date_months] + ' ' + date_years,
             /*Ahad, 10 Mei 2019 full | 10:10*/
             indonesia_with_day_time_formatFullTerbalik: date_list_days[date_days] + ', ' + date_dates + ' ' + date_list_monthsFull[date_months] + ' ' + date_years + ' | ' + date_hours + ':' + date_minutes,
             /*10:10*/
             time: date_hours + ':' + date_minutes,
             /*10-May-2019*/
             indonesia_with_month_name: date_dates + separator + date_list_months[date_months] + separator + date_years,
             /*8917238971237180*/
             milisecond: date_time,
             /*8917238971*/
             second: Math.floor(date_time / 1000),
         };
         return (format) ? pattern[format] : pattern.second;
     };
 </script>