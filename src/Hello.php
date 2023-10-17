<?php

namespace app;

class Hello 
{
    public function speak(string $lang = 'fr'): string
    {
        if ($lang === 'fr') {
            $message = 'Bonjour le monde !';
        } else {
            $message = 'Welcome world !';
        }

        return $message;
    }
}