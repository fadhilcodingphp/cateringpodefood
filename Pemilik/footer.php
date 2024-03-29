</section>
<script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
        });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });
</script>
<footer id="footer" class="footer">
    <div class="copyright"> &copy; Copyright <strong><span>Pode Food Makassar</span></strong>. All Rights Reserved</div>
</footer>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script src="assets/js/apexcharts.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/chart.min.js"></script>
<script src="assets/js/echarts.min.js"></script>
<script src="assets/js/quill.min.js"></script>
<script src="assets/js/simple-datatables.js"></script>
<script src="assets/js/tinymce.min.js"></script>
<script src="assets/js/validate.js"></script>
<script src="assets/js/main.js"></script>

</body>