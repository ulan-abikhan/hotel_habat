<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class SalesChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->labels(['Январь', 'Февраль', 'Март', 'Апрель'])
             ->dataset('Бронированные комнаты', 'bar', [12, 7, 15, 9])
             ->options([
                 'responsive' => true,
                 'maintainAspectRatio' => false
             ])
            ->backgroundColor(['red', 'blue', 'green', 'magenta'])
            ->color(['black', 'black', 'black', 'black']);
    }
}
