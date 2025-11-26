<?php

namespace ApexCharts\Options\XAxis;

use ApexCharts\Abstracts\OptionsAbstract;
use Balping\JsonRaw\Raw;
use Illuminate\Support\Str;

class Tooltip extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.xaxis.tooltip'));
        $this->setOption('enabled', true);
        parent::__construct($options);
    }

    public function offsetY(float $value): static
    {
        return $this->setOption('offsetY', $value);
    }

    public function formatter(string $value): static
    {
        if(!Str::startsWith('function(', $value)){
            $value = "function(val, opts){ $value }";
        }

        return $this->setOption('formatter', new Raw($value));
    }

    public function fontSize(string $value): static
    {
        return $this->setOption('style.fontSize', $value);
    }

    public function fontFamily(string $value): static
    {
        return $this->setOption('style.fontFamily', $value);
    }
}