<?php
namespace Taichi\Support;

use Symfony\Component\VarDumper\Dumper\CliDumper;
use Symfony\Component\VarDumper\Cloner\VarCloner;

class Dumper
{
    /**
     * Dump a value with elegance.
     *
     * @param  mixed  $value
     * @return void
     */
    public static function dump($value)
    {
        $dumper = 'cli' === PHP_SAPI ? new CliDumper : new HtmlDumper;

        $dumper->dump((new VarCloner)->cloneVar($value));
    }
}
