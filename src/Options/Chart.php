<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\ChartStackType;
use ApexCharts\Enums\ChartType;
use ApexCharts\Options\Chart\Animations;
use ApexCharts\Options\Chart\DropShadow;
use ApexCharts\Options\Chart\Events;
use ApexCharts\Options\Chart\Selection;
use ApexCharts\Options\Chart\Toolbar;
use ApexCharts\Options\Chart\Zoom;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

class Chart extends OptionsAbstract
{
    protected array $availableLocales = [];

    /**
     * Constructor.
     */
    public function __construct(array $options = [])
    {
        $this->id($this->generateId());
        $this->setOptions(config('apexcharts.options.chart'));
        $this->initLocalization();

        parent::__construct($options);
    }

    /**
     * Sets the identifier option.
     *
     * @param string $value The identifier value to be set.
     * @return static
     */
    public function id(string $value): static
    {
        return $this->setOption('id', $value);
    }

    /**
     * Sets the background option for the chart.
     *
     * @param string $value The background value to be applied.
     * @return static
     */
    public function background(string $value): static
    {
        return $this->setOption('background', $value);
    }

    /**
     * Sets the default locale for the application.
     *
     * @param string $value The locale to be set as default. Use 'auto' to automatically detect the current locale.
     * @return static
     * @throws \InvalidArgumentException If the specified locale is not available.
     */
    public function defaultLocale(string $value): static
    {
        if($value === 'auto'){
            $value = $this->getCurrentLocale();
        }

        if(!in_array($value, $this->availableLocales)){
            $value = 'en';
        }

        $this->setOption('defaultLocale', $value);
        $this->setOption('locales', json_decode(File::get(__DIR__ . '/../Locales/' . $value . '.json'), true), true);

        return $this;
    }

    /**
     * Sets the font family option.
     *
     * @param string $value The font family to be applied.
     * @return static
     */
    public function fontFamily(string $value): static
    {
        return $this->setOption('fontFamily', $value);
    }

    /**
     * Sets the foreground color option for the chart.
     *
     * @param string $value The color value to be set, typically in a valid color format such as HEX, RGB, or color name.
     * @return static
     */
    public function foreColor(string $value): static
    {
        return $this->setOption('foreColor', $value);
    }

    /**
     * Sets the group option with the given value.
     *
     * @param string $value The value to set for the group option.
     * @return static
     */
    public function group(string $value): static
    {
        return $this->setOption('group', $value);
    }

    /**
     * Sets the height option for the chart.
     *
     * @param int|string $value The height value, which can be specified as an integer or a string.
     * @return static
     */
    public function height(int|string $value): static
    {
        return $this->setOption('height', $value);
    }

    /**
     * Sets the width option.
     *
     * @param int|string $value The width value to set, can be an integer or a string.
     * @return static
     */
    public function width(int|string $value): static
    {
        return $this->setOption('width', $value);
    }

    /**
     * Sets the nonce value for the object.
     *
     * @param string $value The nonce value to be set.
     * @return static
     */
    public function nonce(string $value): static
    {
        return $this->setOption('nonce', $value);
    }

    /**
     * Sets the horizontal offset value.
     *
     * @param int $value The horizontal offset value to be set.
     * @return static
     */
    public function offsetX(int $value): static
    {
        return $this->setOption('offsetX', $value);
    }

    /**
     * Sets the vertical offset value.
     *
     * @param int $value The value for the vertical offset.
     * @return static
     */
    public function offsetY(int $value): static
    {
        return $this->setOption('offsetY', $value);
    }

    /**
     * Sets the parent height offset option.
     *
     * @param int $value The value to set for the parent height offset.
     * @return static
     */
    public function parentHeightOffset(int $value): static
    {
        return $this->setOption('parentHeightOffset', $value);
    }

    /**
     * Sets the option to enable or disable redrawing of the chart on parent resize.
     *
     * @param bool $value Determines whether the chart should redraw when its parent is resized.
     * @return static
     */
    public function redrawOnParentResize(bool $value): static
    {
        return $this->setOption('redrawOnParentResize', $value);
    }

    /**
     * Sets whether the chart should redraw automatically when the window is resized.
     *
     * @param bool $value Determines if the chart will redraw on window resize.
     *                    True enables redrawing, false disables it.
     * @return static
     */
    public function redrawOnWindowResize(bool $value): static
    {
        return $this->setOption('redrawOnWindowResize', $value);
    }

    /**
     * Sets the sparkline option to enable or disable it.
     *
     * @param bool $value Indicates whether the sparkline is enabled (true) or disabled (false).
     * @return static
     */
    public function sparkline(bool $value): static
    {
        return $this->setOption('sparkline.enabled', $value);
    }

    /**
     * Enables or disables the stacking functionality.
     *
     * @param bool $value Determines if stacking is enabled (true) or disabled (false).
     * @return static
     */
    public function stacked(bool $value): static
    {
        return $this->setOption('stacked.enabled', $value);
    }

    /**
     * Sets whether the chart should stack only bar series.
     *
     * @param bool $value Indicates if only bar series should be stacked.
     * @return static
     */
    public function stackOnlyBar(bool $value): static
    {
        return $this->setOption('stackOnlyBar', $value);
    }

    /**
     * Sets the stack type for the chart.
     *
     * @param ChartStackType $value The stack type to be applied to the chart.
     * @return static
     */
    public function stackType(ChartStackType $value): static
    {
        return $this->setOption('stackType', $value);
    }

    /**
     * Sets the chart type option.
     *
     * @param ChartType $value The chart type to be set.
     * @return static
     */
    public function type(ChartType $value): static
    {
        return $this->setOption('type', $value);
    }

    /**
     * Configures the animation settings.
     *
     * @param bool|Animations $value Boolean to enable or disable animations, or an Animations object to configure animation settings.
     * @return static
     */
    public function animations(bool|Animations $value): static
    {
        if(is_bool($value)){
            return $this->setOption('animations.enabled', $value);
        } else {
            return $this->setOption('animations', $value);
        }
    }

    /**
     * Assigns or retrieves the value for the current Toolbar instance.
     *
     * @param bool|Toolbar $value If provided, sets the value for the Toolbar and returns the instance.
     *                            If not provided, retrieves the current value of the Toolbar.
     * @return static
     */
    public function toolbar(bool|Toolbar $value): static
    {
        if(is_bool($value)){
            return $this->setOption('toolbar.show', $value);
        } else {
            return $this->setOption('toolbar', $value);
        }
    }

    /**
     * Updates the value or retrieves the current object or boolean.
     *
     * @param bool|Zoom $value The value to update or the Zoom instance to retrieve.
     * @return static
     */
    public function zoom(bool|Zoom $value): static
    {
        if(is_bool($value)){
            return $this->setOption('zoom.enabled', $value);
        } else {
            return $this->setOption('zoom', $value);
        }
    }

    /**
     * Configures the selection option.
     *
     * @param bool|Selection $value A boolean to enable or disable selection, or a Selection instance for detailed configuration.
     * @return static
     */
    public function selection(bool|Selection $value): static
    {
        if(is_bool($value)){
            return $this->setOption('selection.enabled', $value);
        } else {
            return $this->setOption('selection', $value);
        }
    }

    /**
     * Sets the chart events option.
     *
     * @param Events $value The chart events to be set.
     * @return static
     */
    public function events(Events $value): static
    {
        return $this->setOption('events', $value);
    }

    /**
     * Sets the drop shadow option for the chart.
     *
     * @param DropShadow $value The drop shadow configuration to be set.
     * @return static
     */
    public function dropShadow(DropShadow $value): static
    {
        return $this->setOption('dropShadow', $value);
    }

    /**
     * Generates a unique identifier prefixed with 'chart'.
     *
     * @return string Returns a unique identifier as a string.
     */
    protected function generateId(): string
    {
        return 'chart_' . Str::replace('-', '', Uuid::uuid4()->toString());
    }

    /**
     * Initializes the localization settings for the application.
     *
     * This method collects available locale files, extracts their filenames without extensions,
     * and sets them as the available locales. If the default locale is set to 'auto', it
     * determines the default locale based on the application’s current locale.
     *
     * @return void
     */
    protected function initLocalization(): void
    {
        $this->availableLocales = collect(Finder::create()->files()->name('*.json')->in(__DIR__ . '/../Locales'))
            ->values()
            ->map(fn(SplFileInfo $file) => $file->getFilenameWithoutExtension())
            ->toArray();

        if($this->getOption('defaultLocale') === 'auto'){
            $this->defaultLocale($this->getCurrentLocale());
        }
    }

    /**
     * Retrieves the current locale from the application settings.
     *
     * @return string The current locale as a language code (e.g., "en", "fr").
     */
    protected function getCurrentLocale(): string
    {
        list ($currentLocale) = explode('_', app()->getLocale(), 1);
        return $currentLocale;
    }
}