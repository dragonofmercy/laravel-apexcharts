<?php

namespace ApexCharts\Abstracts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\TextAnchor;
use Balping\JsonRaw\Raw;
use Illuminate\Support\Str;

abstract class AnnotationsAbstract extends OptionsAbstract
{
    public function labelBorderColor(string $value): static
    {
        return $this->setOption('label.borderColor', $value);
    }

    public function labelBorderRadius(int $value): static
    {
        return $this->setOption('label.borderRadius', $value);
    }

    public function labelBorderWidth(float $value): static
    {
        return $this->setOption('label.borderWidth', $value);
    }

    public function labelText(string $value): static
    {
        return $this->setOption('label.text', $value);
    }

    public function labelTextAnchor(TextAnchor $value): static
    {
        return $this->setOption('label.textAnchor', $value);
    }

    public function labelOffsetX(float $value): static
    {
        return $this->setOption('label.offsetX', $value);
    }

    public function labelOffsetY(float $value): static
    {
        return $this->setOption('label.offsetY', $value);
    }

    public function labelMouseEnter(string $value): static
    {
        if(!Str::startsWith($value, 'function(')){
            $value = "function(e){ $value }";
        }

        return $this->setOption('label.mouseEnter', new Raw($value));
    }

    public function labelMouseLeave(string $value): static
    {
        if(!Str::startsWith($value, 'function(')){
            $value = "function(e){ $value }";
        }

        return $this->setOption('label.mouseLeave', new Raw($value));
    }

    public function labelClick(string $value): static
    {
        if(!Str::startsWith($value, 'function(')){
            $value = "function(e){ $value }";
        }

        return $this->setOption('label.click', new Raw($value));
    }

    public function labelBackground(string $value): static
    {
        return $this->setOption('label.style.background', $value);
    }

    public function labelColor(string $value): static
    {
        return $this->setOption('label.style.color', $value);
    }

    public function labelFontSize(string $value): static
    {
        return $this->setOption('label.style.fontSize', $value);
    }

    public function labelFontWeight(string|int $value): static
    {
        return $this->setOption('label.style.fontWeight', $value);
    }

    public function labelFontFamily(string $value): static
    {
        return $this->setOption('label.style.fontFamily', $value);
    }

    public function labelCssClass(string $value): static
    {
        return $this->setOption('label.style.cssClass', $value);
    }

    public function labelPadding(?float $top = null, ?float $left = null, ?float $bottom = null, ?float $right = null): static
    {
        foreach(compact('top', 'left', 'bottom', 'right') as $name => $value){
            if(null !== $value){
                $this->setOption('label.style.padding.' . $name, $value);
            }
        }

        return $this;
    }
}