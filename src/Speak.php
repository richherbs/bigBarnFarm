<?php

namespace MyApp;

trait Speak {
    private function speak($someWords){
        echo $this->voice . $someWords;
    }
}