


    <script src="<?php echo $url ;?>/assets/vendor/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="<?php echo $url ;?>/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?php echo $url ;?>/assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo $url ;?>/assets/vendor/way_point/jquery.waypoints.js"></script>
    <script src="<?php echo $url ;?>/assets/vendor/counter_up/counter_up.js"></script>
    <script src="<?php echo $url ;?>/assets/js/app.js"></script>
    <script src="<?php echo $url ;?>/assets/vendor/chart_js/chart.min.js"></script>
    <script src="<?php echo $url ;?>/assets/js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        let currentPage = location.href;
        $(".menu-item-link").each(function(){
            let links = $(this).attr("href");
            if (currentPage == links){
                $(this).addClass("active");
            }
        })
 
    </script>
</body>
</head>
</html>