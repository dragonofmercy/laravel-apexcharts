<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\GridPosition;
use ApexCharts\Options\Grid\Padding;

class Grid extends OptionsAbstract
{
    /**
     * Constructor.
     */
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.grid'));
        parent::__construct($options);
    }

    /**
     * Sets the border color.
     *
     * @param string $value The border color value to set.
     * @return static
     */
    public function borderColor(string $value): static
    {
        return $this->setOption('borderColor', $value);
    }

    /**
     * Sets the stroke dash array configuration.
     *
     * @param int $value The dash array value for the stroke.
     * @return static
     */
    public function strokeDashArray(int $value): static
    {
        return $this->setOption('strokeDashArray', $value);
    }

    /**
     * Sets the position option for the grid.
     *
     * @param GridPosition $value The position value to be set.
     * @return static
     */
    public function position(GridPosition $value): static
    {
        return $this->setOption('position', $value);
    }

    /**
     * Sets the visibility of the x-axis lines.
     *
     * @param bool $value Determines whether the x-axis lines should be shown or hidden.
     * @return static
     */
    public function xAxis(bool $value): static
    {
        return $this->setOption('xaxis.lines.show', $value);
    }

    /**
     * Sets the visibility of y-axis lines.
     *
     * @param bool $value Determines whether the y-axis lines should be displayed.
     * @return static
     */
    public function yAxis(bool $value): static
    {
        return $this->setOption('yaxis.lines.show', $value);
    }

    /**
     * Sets the row colors for the component.
     *
     * @param string|array $value Specifies the color(s) to apply to rows. Can be a single color as a string or multiple colors as an array.
     * @return static
     */
    public function rowColors(string|array $value): static
    {
        return $this->setOption('row.colors', is_string($value) ? [$value] : $value);
    }

    /**
     * Sets the opacity level for the row.
     *
     * @param float $value The opacity value for the row (0 to 1).
     * @return static
     */
    public function rowOpacity(float $value): static
    {
        return $this->setOption('row.opacity', $value);
    }

    /**
     * Sets the column colors.
     *
     * @param string|array $value The color(s) to be applied to the column.
     *                             If a string is provided, it will be converted to an array.
     * @return static
     */
    public function columnColors(string|array $value): static
    {
        return $this->setOption('column.colors', is_string($value) ? [$value] : $value);
    }

    /**
     * Sets the opacity of columns.
     *
     * @param float $value The opacity value to set for the columns.
     * @return static
     */
    public function columnOpacity(float $value): static
    {
        return $this->setOption('column.opacity', $value);
    }

    /**
     * Sets the padding option.
     *
     * @param Padding $value The padding value to set.
     * @return static
     */
    public function padding(Padding $value)
    {
        return $this->setOption('padding', $value);
    }
}