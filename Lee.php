<input type = "text" name = "x" id ="x">

+

<input type = "text" name = "y" id ="y">

<input = type = "button" value = "=" onclick ="cal()">
<span id = "result"></span>
<script>
    function cal() {
        var x = document.getElementById("x");
        var y = document.getElementById("y");
        var r = parseInt(x.value)+parseInt(y.value);
        document.getElementsById("result").innerText = r;



    }


</script>

