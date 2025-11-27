<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\ChartStackType;
use ApexCharts\Enums\ChartType;
use ApexCharts\Options\Chart\Animations;
use ApexCharts\Options\Chart\Brush;
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

    public function __construct(array $options = [])
    {
        $this->id($this->generateId());
        $this->setOptions(config('apexcharts.options.chart'));
        $this->initLocalization();

        parent::__construct($options);
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

        if($value !== 'en'){
            $this->setOption('locales', json_decode(File::get(__DIR__ . '/../Locales/' . $value . '.json'), true), true);
        }

        return $this;
    }

    public function id(string $value): static
    {
        return $this->setOption('id', $value);
    }

    public function background(string $value): static
    {
        return $this->setOption('background', $value);
    }

    public function fontFamily(string $value): static
    {
        return $this->setOption('fontFamily', $value);
    }

    public function foreColor(string $value): static
    {
        return $this->setOption('foreColor', $value);
    }

    public function group(string $value): static
    {
        return $this->setOption('group', $value);
    }

    public function height(float|string $value): static
    {
        return $this->setOption('height', $value);
    }

    public function width(float|string $value): static
    {
        return $this->setOption('width', $value);
    }

    public function nonce(string $value): static
    {
        return $this->setOption('nonce', $value);
    }

    public function offsetX(float $value): static
    {
        return $this->setOption('offsetX', $value);
    }

    public function offsetY(float $value): static
    {
        return $this->setOption('offsetY', $value);
    }

    public function parentHeightOffset(float $value): static
    {
        return $this->setOption('parentHeightOffset', $value);
    }

    public function redrawOnParentResize(bool $value = true): static
    {
        return $this->setOption('redrawOnParentResize', $value);
    }

    public function redrawOnWindowResize(bool $value = true): static
    {
        return $this->setOption('redrawOnWindowResize', $value);
    }

    public function sparkline(bool $value = true): static
    {
        return $this->setOption('sparkline.enabled', $value);
    }

    public function stacked(bool $value = true): static
    {
        return $this->setOption('stacked', $value);
    }

    public function stackOnlyBar(bool $value = true): static
    {
        return $this->setOption('stackOnlyBar', $value);
    }

    public function stackType(ChartStackType $value): static
    {
        return $this->setOption('stackType', $value);
    }

    public function type(ChartType $value): static
    {
        return $this->setOption('type', $value);
    }

    public function animations(bool|Animations $value): static
    {
        if(is_bool($value)){
            return $this->setOption('animations.enabled', $value);
        } else {
            return $this->setOption('animations', $value);
        }
    }

    public function toolbar(bool|Toolbar $value): static
    {
        if(is_bool($value)){
            return $this->setOption('toolbar.show', $value);
        } else {
            return $this->setOption('toolbar', $value);
        }
    }

    public function zoom(bool|Zoom $value): static
    {
        if(is_bool($value)){
            return $this->setOption('zoom.enabled', $value);
        } else {
            return $this->setOption('zoom', $value);
        }
    }

    public function selection(bool|Selection $value): static
    {
        if(is_bool($value)){
            return $this->setOption('selection.enabled', $value);
        } else {
            return $this->setOption('selection', $value);
        }
    }

    public function brush(bool|Brush $value): static
    {
        if(is_bool($value)){
            return $this->setOption('brush.enabled', $value);
        } else {
            return $this->setOption('brush', $value);
        }
    }

    public function events(Events $value): static
    {
        return $this->setOption('events', $value);
    }

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