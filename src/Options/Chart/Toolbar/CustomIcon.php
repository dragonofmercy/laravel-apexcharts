<?php

namespace ApexCharts\Options\Chart\Toolbar;

use ApexCharts\Abstracts\OptionsAbstract;
use Balping\JsonRaw\Raw;
use Illuminate\Support\Str;

class CustomIcon extends OptionsAbstract
{
    /**
     * Sets the icon option.
     *
     * @param string $value The icon name or identifier to set.
     * @return static
     */
    public function icon(string $value): static
    {
        return $this->setOption('icon', $value);
    }

    /**
     * Sets the index option with the given value.
     *
     * @param int $value The value to set for the index option.
     * @return static
     */
    public function index(int $value): static
    {
        return $this->setOption('icon', $value);
    }

    /**
     * Sets the title option with the provided value.
     *
     * @param string $value The title to be set.
     * @return static
     */
    public function title(string $value): static
    {
        return $this->setOption('title', $value);
    }

    /**
     * Sets the CSS class option.
     *
     * @param string $value The CSS class to set.
     * @return static
     */
    public function class(string $value): static
    {
        return $this->setOption('class', $value);
    }

    /**
     * Sets a custom click event handler for an item.
     *
     * @param string $value The JavaScript function body or expression that will be wrapped in a function
     *                      if it does not already start with 'function('.
     * @return static
     */
    public function click(string $value): static
    {
        if(!Str::startsWith($value, 'function(')){
            $value = "function(chart, options, e){ $value }";
        }

        return $this->setOption('click', new Raw($value));
    }
}