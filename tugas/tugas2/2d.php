<style>
    .boxblack,
    .boxwhite {
        display: inline-block;
        width: 50px;
        height: 50px;
        border: 1px solid black;
        text-align: center;
        background-color: black;
        line-height: 50px;
    }

    .boxwhite {
        background-color: white;
    }
</style>
<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i % 2 == 0) {
            if ($j % 2 == 0) {
                echo "<div class='boxwhite'></div>";
            } else {
                echo "<div class='boxblack'></div>";
            }
        } else {
            if ($j % 2 == 0) {
                echo "<div class='boxblack'></div>";
            } else {
                echo "<div class='boxwhite'></div>";
            }
        }
    }
    echo "<br>";
}
