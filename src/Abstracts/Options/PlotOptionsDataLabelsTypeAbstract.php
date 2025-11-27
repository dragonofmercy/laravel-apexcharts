<?php

namespace ApexCharts\Abstracts\Options;

use ApexCharts\Abstracts\OptionsAbstract;

class PlotOptionsDataLabelsTypeAbstract extends OptionsAbstract
{
    public function fontSize(string $value): static
    {
        return $this->setOption('fontSize', $value);
    }

    public function fontFamily(string $value): static
    {
        return $this->setOption('fontFamily', $value);
    }

    public function fontWeight(string|int $value): static
    {
        return $this->setOption('fontWeight', $value);
    }

    public function color(string $value): static
    {
        return $this->setOption('color', $value);
    }
}