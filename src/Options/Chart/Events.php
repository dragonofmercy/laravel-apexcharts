<?php

namespace ApexCharts\Options\Chart;

use ApexCharts\Abstracts\OptionsAbstract;
use Balping\JsonRaw\Raw;

class Events extends OptionsAbstract
{
    /**
     * Sets a callback function to be executed when the animation ends.
     *
     * @param string $callback The callback function to be executed.
     * @return static
     */
    public function animationEnd(string $callback): static
    {
        return $this->setOption('animationEnd', new Raw($callback));
    }

    /**
     * Sets the 'beforeMount' option with the provided callback function.
     *
     * @param string $callback The JavaScript callback function to be executed before the component is mounted.
     * @return static
     */
    public function beforeMount(string $callback): static
    {
        return $this->setOption('beforeMount', new Raw($callback));
    }

    /**
     * Sets the 'mounted' option with the provided callback.
     *
     * @param string $callback The callback function to be executed when mounted.
     * @return static
     */
    public function mounted(string $callback): static
    {
        return $this->setOption('mounted', new Raw($callback));
    }

    /**
     * Sets the 'updated' option with the given callback.
     *
     * @param string $callback The callback to be executed when the 'updated' option is triggered.
     * @return static
     */
    public function updated(string $callback): static
    {
        return $this->setOption('updated', new Raw($callback));
    }

    /**
     * Registers a callback to be executed when a mouse move event occurs.
     *
     * @param string $callback The JavaScript code to execute on the mouse move event.
     * @return static
     */
    public function mouseMove(string $callback): static
    {
        return $this->setOption('mouseMove', new Raw($callback));
    }

    /**
     * Sets the mouseLeave event callback.
     *
     * @param string $callback The JavaScript callback to be executed when the mouse leaves.
     * @return static
     */
    public function mouseLeave(string $callback): static
    {
        return $this->setOption('mouseLeave', new Raw($callback));
    }

    /**
     * Sets the 'click' option with the specified callback.
     *
     * @param string $callback The JavaScript callback to be executed on click.
     * @return static
     */
    public function click(string $callback): static
    {
        return $this->setOption('click', new Raw($callback));
    }

    /**
     * Sets the callback function to be executed when a legend item is clicked.
     *
     * @param string $callback The JavaScript callback function as a string.
     * @return static
     */
    public function legendClick(string $callback): static
    {
        return $this->setOption('legendClick', new Raw($callback));
    }

    /**
     * Sets a callback function to be executed when a marker is clicked.
     *
     * @param string $callback The JavaScript code or function to be executed on the marker click event.
     * @return static
     */
    public function markerClick(string $callback): static
    {
        return $this->setOption('markerClick', new Raw($callback));
    }

    /**
     * Sets a callback function for the x-axis label click event.
     *
     * @param string $callback The JavaScript callback function to be executed when an x-axis label is clicked.
     * @return static
     */
    public function xAxisLabelClick(string $callback): static
    {
        return $this->setOption('xAxisLabelClick', new Raw($callback));
    }

    /**
     * Sets the 'selection' option with the provided callback.
     *
     * @param string $callback The callback to be used for the 'selection' option.
     * @return static
     */
    public function selection(string $callback): static
    {
        return $this->setOption('selection', new Raw($callback));
    }

    /**
     * Sets a callback function to handle the data point selection event.
     *
     * @param string $callback The JavaScript callback function to be executed when a data point is selected.
     * @return static
     */
    public function dataPointSelection(string $callback): static
    {
        return $this->setOption('dataPointSelection', new Raw($callback));
    }

    /**
     * Sets a callback to be executed when the mouse enters a data point.
     *
     * @param string $callback The JavaScript callback function to handle the mouse enter event.
     * @return static
     */
    public function dataPointMouseEnter(string $callback): static
    {
        return $this->setOption('dataPointMouseEnter', new Raw($callback));
    }

    /**
     * Sets the callback function to be executed when the mouse leaves a data point.
     *
     * @param string $callback The JavaScript callback function to execute on the mouse leave event.
     * @return static
     */
    public function dataPointMouseLeave(string $callback): static
    {
        return $this->setOption('dataPointMouseLeave', new Raw($callback));
    }

    /**
     * Sets a callback function to be executed before a zoom action occurs.
     *
     * @param string $callback The JavaScript callback function to execute before zooming.
     * @return static
     */
    public function beforeZoom(string $callback): static
    {
        return $this->setOption('beforeZoom', new Raw($callback));
    }

    /**
     * Sets a callback function to be executed before the chart's zoom is reset.
     *
     * @param string $callback The JavaScript callback function to be executed.
     * @return static
     */
    public function beforeResetZoom(string $callback): static
    {
        return $this->setOption('beforeResetZoom', new Raw($callback));
    }

    /**
     * Sets the zoomed callback option.
     *
     * @param string $callback The JavaScript callback to be executed when the zoom event occurs.
     * @return static
     */
    public function zoomed(string $callback): static
    {
        return $this->setOption('zoomed', new Raw($callback));
    }

    /**
     * Sets the 'scrolled' option with the provided callback.
     *
     * @param string $callback The JavaScript callback to be executed when the scrolling event occurs.
     * @return static
     */
    public function scrolled(string $callback): static
    {
        return $this->setOption('scrolled', new Raw($callback));
    }
}