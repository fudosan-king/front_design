<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

<script src="assets/js/moment.min.js"></script>
<script src="assets/js/axios.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ja.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>


<script src="assets/js/splide.min.js"></script>
<script src="assets/js/jquery.toc.js"></script>
<script src="assets/js/blog-scripts.js"></script>
<script>
    $(document).ready(function() {
        Fancybox.bind('[data-fancybox="gallery"]', {
            //
        });

        $('.datepicker').datepicker({
            language: 'ja', // Thiết lập ngôn ngữ là Tiếng Nhật
            format: 'yyyy-mm-dd', // Định dạng ngày tháng năm theo ý muốn
            autoclose: true // Tự động đóng khi chọn xong
        });
    });
</script>