<?php
$title = "Identification of the degree of the implementation";
include_once "head.php";
?>
<body>
<?php
include_once "data.php";
include_once "navi.php";
echo "<h1>$title</h1>"
?>
<button id="resetPage">Reset Page</button>
<div class="spiderweb">    
    <?php
    echo getTable($dimensions);
    ?>
    <div class="chart" id="energychart"></div>
</div>
<script src="https://d3js.org/d3.v3.min.js"></script>
<script src="js/circularHeatChart.js"></script>
<script src="js/example.js"></script>
<script src="https://yandex.st/highlightjs/7.3/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<script>
    loadDiagramm();
    $("table a").click(function (e) {
        e.preventDefault();
        $(this).toggleClass("selected")
        var url = "spiderwebData.php?element=" + $(this).attr("data-element");
        console.log(url);
        $.ajax({
            url: url,
        }).done(function () {
            loadDiagramm()
        });
    });
    $("#resetPage").click(function (e) {
        e.preventDefault();
        $("table a").removeClass("selected");
        
        console.log("Reset was pressed");        
        var url = "spiderwebData.php?element=ResetPage";
        console.log(url);
        $.ajax({
            url: url,
        }).done(function () {
            loadDiagramm()
        });
    });

</script>
</body>
</html>