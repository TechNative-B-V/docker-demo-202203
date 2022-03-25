<?php
namespace HelloCodeSeed;

class SayHello
{
    public static function codeseed()
    {
        return 'Hello Code Seed, Docker Demo!';
    }

    public static function environment()
    {
        $sayHelloEnv = getenv('SAY_HELLO_ENV');
        return "Hello Code Seed environment: $sayHelloEnv";
    }
}
