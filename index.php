<?php
$title = gettext("Activities Overview");
include_once "head.php";
?>
<body>
<?php
include_once "data.php";
include_once "navi.php";
?>
<div class="container body-content">
<div class="jumbotron">
<h2>DevSecOps Maturity Scorecard</h2>
</div>
<div class="row">
    <div class="col-md-4">
        <h2>Description</h2>
        <p>From a startup to a multinational corporation the software development industry is currently dominated by agile frameworks and product teams and as part of it DevOps strategies. It has been observed that during the implementation, security aspects are usually neglected or are at least not sufficient taken account of. It is often the case that standard safety requirements of the production environment are not utilized or applied to the build pipeline in the continuous integration environment with containerization or concrete docker. Therefore, the docker registry is often not secured which might result in the theft of the entire company’s source code.</p>
        <p>The  DevSecOps Maturity Model, which is presented in the talk, shows security measures which are applied when using DevOps strategies and how these can be prioritized.</p>        
    </div>
    <div class="col-md-4">
        <h2>Why</h2>
        <p>With the help of DevOps strategies security can also be enhanced. For example, each component such as application libraries and operating system libraries in docker images can be tested for known vulnerabilities.</p>
        <p>Attackers are intelligent and creative, equipped with new technologies and purpose. Under the guidance of the forward-looking DevSecOps Maturity Model, appropriate principles and measures are at hand implemented which counteract the attacks.</p>        
        <p><a class="btn btn-primary" href="https://docs.google.com/presentation/d/1rrbyXqxy3LXAJNPFrVH99mj_BNaJKymMsXZItYArWEM/edit?usp=sharing">Learn more &raquo;</a></p>
    </div>
    <div class="col-md-4">
        <h2>Activities per dimension</h2>
        <?php            
            echo '<div class="extra">'.getInfos($dimensions) . '</div>';
        ?>
    </div>

</div>

<?php
echo "<h1>Matrix</h1>";
echo getTable($dimensions);
?>
</div>
<script>
    $(function () {
        $('[data-toggle="popover"]').popover({placement: "bottom", trigger: "hover"}).on('click', function () {
            $(this).popover('toggle');
        });
    })</script>
</body>