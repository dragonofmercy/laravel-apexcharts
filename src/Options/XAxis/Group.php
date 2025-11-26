<?php

namespace ApexCharts\Options\XAxis;

use ApexCharts\Abstracts\OptionsAbstract;

class Group extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.xaxis.group'));
        parent::__construct($options);
    }

    public function groups(array $value): static
    {
        return $this->setOption('groups', $value);
    }

    public function fontSize(string $value): static
    {
        return $this->setOption('style.fontSize', $value);
    }

    public function fontWeight(int|string $value): static
    {
        return $this->setOption('style.fontWeight', $value);
    }

    public function fontFamily(string $value): static
    {
        return $this->setOption('style.fontFamily', $value);
    }

    public function colors(array $value): static
    {
        return $this->setOption('style.colors', $value);
    }

    public function cssClass(string $value): static
    {
        return $this->setOption('style.cssClass', $value);
    }
}