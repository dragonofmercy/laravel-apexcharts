<?php

namespace ApexCharts\Options\Grid;

use ApexCharts\Abstracts\OptionsAbstract;

class Padding extends OptionsAbstract
{
    /**
     * Constructor.
     */
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.grid.padding'));
        parent::__construct($options);
    }

    /**
     * Sets the top option for the current instance.
     *
     * @param int $top The value to set as the top option.
     * @return static
     */
    public function top(int $top): static
    {
        return $this->setOption('top', $top);
    }

    /**
     * Sets the bottom option.
     *
     * @param int $bottom The value to set for the bottom option.
     * @return static
     */
    public function bottom(int $bottom): static
    {
        return $this->setOption('bottom', $bottom);
    }

    /**
     *
     * @param int $left The value to set for the 'left' option.
     * @return static
     */
    public function left(int $left): static
    {
        return $this->setOption('left', $left);
    }

    /**
     * Sets the right option.
     *
     * @param int $right The value to set for the right option.
     * @return static
     */
    public function right(int $right): static
    {
        return $this->setOption('right', $right);
    }
}