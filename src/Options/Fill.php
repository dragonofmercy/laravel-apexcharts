<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\FillType;
use ApexCharts\Options\Fill\Gradient;
use ApexCharts\Options\Fill\Image;
use ApexCharts\Options\Fill\Pattern;
use Balping\JsonRaw\Raw;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class Fill extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.fill'));
        parent::__construct($options);
    }

    public function colors(array $value): static
    {
        $value = Arr::map($value, function($color){
            if(Str::startsWith('function(', $color)){
                $color = new Raw($color);
            }
            return $color;
        });

        return $this->setOption('colors', $value);
    }

    public function opacity(float $value): static
    {
        return $this->setOption('opacity', $value);
    }

    public function type(FillType $value): static
    {
        return $this->setOption('type', $value);
    }

    public function gradient(Gradient $value): static
    {
        return $this->setOption('gradient', $value);
    }

    public function image(Image $value): static
    {
        return $this->setOption('image', $value);
    }

    public function pattern(Pattern $value): static
    {
        return $this->setOption('pattern', $value);
    }
}