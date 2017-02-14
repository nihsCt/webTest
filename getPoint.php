<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<div>
    <div id="a">
        <img id="test" class="demo-box" src="e-2.jpg"/>
    </div>
</div>
<style>
    img{
        border: 1px;
        border-style: solid;
    }
</style>

<script id="jsbin-javascript">
    $(function () {
        $("#test").click(function (e) {
            var offset = $(this).offset();
            var width = document.getElementById("test").offsetWidth;
            var height = document.getElementById("test").offsetHeight;
            var relativeX = (e.pageX - offset.left) / width * 100;
            var relativeY = (e.pageY - offset.top) / height * 100;
            alert('X:' + relativeX + ' Y:' + relativeY);
            $(".position").val("afaf");
        });
    });

</script>