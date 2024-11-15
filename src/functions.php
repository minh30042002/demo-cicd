<?php

function greetUser(string $name): string {
    if (empty($name)) {
        return "Hello, Guest!";
    }
    return "Hello, " . htmlspecialchars($name) . "!";
}

function calculateSum(int $a, int $b): int {
    return $a + $b;
}
