<?php include("component/header.component.php"); ?>

<h2> Cat Fun Facts</h2>

<?php

$catFacts = [
    "Siamese" => "They are very talkative!",
    "Persian" => "They love to nap in cozy spots.",
    "Maine Coon" => "They are one of the largest domestic cat breeds.",
    "Ragdoll" => "They go limp when you pick them up.",
    "Bengal" => "They look wild but are very friendly."
];


function showFacts($facts)
{
    echo "<ul>";
    foreach ($facts as $breed => $fact) {
        echo "<li><strong>$breed</strong>: $fact</li>";
    }
    echo "</ul>";
}

showFacts($catFacts);
?>

<?php include("component/footer.component.php"); ?>