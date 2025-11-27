<?php

namespace ApexCharts\Enums;

enum ChartType: string
{
    case Area = 'area';
    case Bar = 'bar';
    case BoxPlot = 'boxPlot';
    case Bubble = 'bubble';
    case Candlestick = 'candlestick';
    case Column = 'column';
    case Donut = 'donut';
    case Heatmap = 'heatmap';
    case Line = 'line';
    case Pie = 'pie';
    case PolarArea = 'polarArea';
    case Radar = 'radar';
    case RadialBar = 'radialBar';
    case RangeArea = 'rangeArea';
    case RangeBar = 'rangeBar';
    case Scatter = 'scatter';
    case Treemap = 'treemap';
}