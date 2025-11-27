<?php

namespace ApexCharts\Options\DataLabels;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Options\DataLabels\Background\DropShadow as BackgroundDropShadow;

class Background extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.dataLabels.background'));
        $this->setOption('enabled', true);
        parent::__construct($options);
    }

    public function foreColor(string $value): static
    {
        return $this->setOption('foreColor', $value);
    }

    public function padding(float $value): static
    {
        return $this->setOption('padding', $value);
    }

    public function borderRadius(int $value): static
    {
        return $this->setOption('borderRadius', $value);
    }

    public function borderWidth(float $value): static
    {
        return $this->setOption('borderWidth', $value);
    }

    public function borderColor(string $value): static
    {
        return $this->setOption('borderColor', $value);
    }

    public function opacity(float $value): static
    {
        return $this->setOption('opacity', $value);
    }

    public function dropShadow(BackgroundDropShadow $value): static
    {
        return $this->setOption('dropShadow', $value);
    }
}