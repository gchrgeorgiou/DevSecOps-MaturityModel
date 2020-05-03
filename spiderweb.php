<?php
$title = "Identification of the degree of the implementation";
include_once "head.php";
?>
<body>
<a name="top"></a>
<?php
include_once "data.php";
include_once "navi.php";
?>
<div class="container body-content">
    <div class="jumbotron">
    <?php
    echo "<h2>$title</h2>"
    ?>
    </div>



<a class="btn btn-primary" href="#Chart">See Chart</a>
<button id="resetPage" class="btn btn-default">Reset Selection</button>
<hr/>
    <div class="spiderweb">    
        <?php
        echo getTable($dimensions);
        ?>
        <hr>    
        <a name="Chart">
        <div class="chart" id="energychart"></div>
        </a>
    </div>
    <a class="btn btn-primary" href="#top">Back to Top</a>
    <hr />
        <footer>
            <p>&copy; <?php echo date("Y"); ?> - GG DevSecOps Maturity Model</p>
        </footer>
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