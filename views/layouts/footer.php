<link href="/template/css/main.css" rel="stylesheet">

<div class="container" id="footer">
    <hr>
    <footer>
        <p class="pull-right"><a href="#">Подняться вверх</a></p>
        <p>&copy; 2020 Oleg Bryl &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
</div>


<script src="/template/js/jquery-3.1.1.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/main.js"></script>
<script src="/template/js/jquery.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>
</body>
</html>