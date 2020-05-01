<?php

$nav = array(
    "index.php" => "Index",
    "spiderweb.php" => "Implementation Levels",
    //"scutter.php" => "Ease and Value of Implementation",
    //"graph.php" => "Dependencies",
    //"report.php" => "Full Report",
    //"usefulnessHardness.php" => "Heatmap",
    "information.php" => "Information"
);

echo "<ul class=\"nav nav-tabs\">";
foreach ($nav as $item => $value) {
    echo "<li ";
    if(strpos($_SERVER['PHP_SELF'], $item)) {
        echo "class=\"active\"";
    }
    echo "role=\"\"><a href=\"$item\">$value</a></li>";
}
echo "</ul>";
?>
