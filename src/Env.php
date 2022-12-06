<?php

namespace Firework\Env;

class Env
{
    public array $env = [];

    public function __construct()
    {
        $env = file_get_contents(__DIR__ . "/../../../../.env");
        $env = explode("\n", $env);

        foreach ($env as $item) {
            $item = explode("=", $item);
            $this->env[$item[0]] = $item[1];
        }
    }

    /**
     * @return array
     */
    public function getEnv(): array
    {
        return $this->env;
    }
}