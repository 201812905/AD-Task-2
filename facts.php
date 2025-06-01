<?php include('components/componentGroup/header.component.php'); ?>

<h2>Cat Fun Facts</h2>

<?php

$catFacts = [
    "Siamese" => [
        "fact" => "They are very talkative!",
        "image" => "https://i.pinimg.com/736x/45/3f/08/453f08067ecf9ce1cdcc35637bf38fa6.jpg"
    ],
    "Persian" => [
        "fact" => "They love to nap in cozy spots.",
        "image" => "https://i.pinimg.com/736x/ce/7f/ca/ce7fca483087d2a9ca2db11901c552dc.jpg"
    ],
    "Maine Coon" => [
        "fact" => "They are one of the largest domestic cat breeds.",
        "image" => "https://i.pinimg.com/736x/94/e4/ae/94e4ae3eae06f0585e0902816ae8af22.jpg"
    ],
    "Ragdoll" => [
        "fact" => "They go limp when you pick them up.",
        "image" => "https://i.pinimg.com/736x/e5/b3/4a/e5b34af4e0bc5415e06fe2b4dbb1da66.jpg"
    ],
    "Bengal" => [
        "fact" => "They look wild but are very friendly.",
        "image" => "https://i.pinimg.com/736x/5e/79/59/5e7959a113d5ec13696a38d98928b688.jpg"
    ]
];

function showFacts($facts)
{
    echo "<div class='cat-facts-container'>";
    foreach ($facts as $breed => $info) {
        echo "<div class='cat-fact-card'>";
        echo "<div class='cat-image-container'>";
        echo "<img src='" . $info['image'] . "' alt='" . $breed . " cat' class='cat-image' onerror='this.src=\"https://via.placeholder.com/300x200?text=Cat+Image\"'>";
        echo "</div>";
        echo "<div class='cat-info'>";
        echo "<h3>" . $breed . "</h3>";
        echo "<p>" . $info['fact'] . "</p>";
        echo "</div>";
        echo "</div>";
    }
    echo "</div>";
}

showFacts($catFacts);
?>

<?php include('components/componentGroup/footer.component.php'); ?>