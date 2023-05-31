<?php
function splAutoloadRegister($name)
{
    include $name . '.php';
}

spl_autoload_register('splAutoloadRegister');