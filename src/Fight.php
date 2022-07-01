<?php

class Fight {
    public function info($ctx) {
        echo $ctx;
    }

    public function end($winner, $looser) {
        echo $winner . " à gagné contre " . $looser . ".";
    }
}
