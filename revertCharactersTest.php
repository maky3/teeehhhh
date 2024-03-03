<?php

require_once 'revertCharacters.php';

function testRevertCharacters() {
    $testCases = [
        "Привет! Давно не виделись." => "Тевирп! Онвад ен ьсиледив.",
        "Hello, world!" => "olleH, dlrow!",
        "1234567890" => "0987654321",
        "A man, a plan, a canal: Panama" => "A nam, a lanap, a lanac: amanaP",
        "race car" => "rac ecar",
        "Was it a car or a cat I saw?" => "?was I tac a ro rac a ti saw",
        "No 'x' in Nixon" => "oN 'x' ni noxin",
        "" => "",
        " " => " ",
        "  " => "  "
    ];

    foreach ($testCases as $input => $expectedOutput) {
        $output = revertCharacters($input);
        if ($output !== $expectedOutput) {
            echo "Test failed for input: '$input'. Expected: '$expectedOutput', but got: '$output'.\n";
        }
    }
}

testRevertCharacters();