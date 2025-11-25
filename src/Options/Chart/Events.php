<?php

namespace ApexCharts\Options\Chart;

use ApexCharts\Abstracts\OptionsAbstract;
use Balping\JsonRaw\Raw;

class Events extends OptionsAbstract
{
    public function animationEnd(string $callback): static
    {
        return $this->setOption('animationEnd', new Raw($callback));
    }

    public function beforeMount(string $callback): static
    {
        return $this->setOption('beforeMount', new Raw($callback));
    }

    public function mounted(string $callback): static
    {
        return $this->setOption('mounted', new Raw($callback));
    }

    public function updated(string $callback): static
    {
        return $this->setOption('updated', new Raw($callback));
    }

    public function mouseMove(string $callback): static
    {
        return $this->setOption('mouseMove', new Raw($callback));
    }

    public function mouseLeave(string $callback): static
    {
        return $this->setOption('mouseLeave', new Raw($callback));
    }

    public function click(string $callback): static
    {
        return $this->setOption('click', new Raw($callback));
    }

    public function legendClick(string $callback): static
    {
        return $this->setOption('legendClick', new Raw($callback));
    }

    public function markerClick(string $callback): static
    {
        return $this->setOption('markerClick', new Raw($callback));
    }

    public function xAxisLabelClick(string $callback): static
    {
        return $this->setOption('xAxisLabelClick', new Raw($callback));
    }

    public function selection(string $callback): static
    {
        return $this->setOption('selection', new Raw($callback));
    }

    public function dataPointSelection(string $callback): static
    {
        return $this->setOption('dataPointSelection', new Raw($callback));
    }

    public function dataPointMouseEnter(string $callback): static
    {
        return $this->setOption('dataPointMouseEnter', new Raw($callback));
    }

    public function dataPointMouseLeave(string $callback): static
    {
        return $this->setOption('dataPointMouseLeave', new Raw($callback));
    }

    public function beforeZoom(string $callback): static
    {
        return $this->setOption('beforeZoom', new Raw($callback));
    }

    public function beforeResetZoom(string $callback): static
    {
        return $this->setOption('beforeResetZoom', new Raw($callback));
    }

    public function zoomed(string $callback): static
    {
        return $this->setOption('zoomed', new Raw($callback));
    }

    public function scrolled(string $callback): static
    {
        return $this->setOption('scrolled', new Raw($callback));
    }
}