<?php

namespace App\Charts;

use App\Models\Category;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class YearlyCompanyChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $chart = $this->chart->lineChart();
        // $chart->setTitle()
        $year = [];
        for ($i = 0; $i < 10; $i++) {
            $year[$i] = date('Y') + $i + 1;
        }
        // return dd($year);
        $categories = Category::with('company')->get();
        // return $this->chart->lineChart()
        //     ->setTitle('Category Ekraf 2022.')
        //     ->setSubtitle('Ekraf Kategori Tekonologi')
        //     ->addData($categories[0]->name, [])
        //     ->setXAxis($year);
    }
}
