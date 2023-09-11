<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Attributes\Url;
use Livewire\Component;

class ReportFilters extends Component
{

    #[Url]
    public $reportType = '';

    #[Reactive]
    #[Url]
    public $reportValue = '';

    public $reportTypes = [];
    public $startDate = '';
    public $endDate = '';

    public function mount()
    {
        $this->reportTypes = [
            'weekly' => [
                'label' => 'Weekly',
                'value' => 'weekly',
                'data' => [
                    ['value' => '1', 'label' => 'Week 1'],
                    ['value' => '2', 'label' => 'Week 2'],
                    ['value' => '3', 'label' => 'Week 3'],
                    ['value' => '4', 'label' => 'Week 4'],
                    ['value' => '5', 'label' => 'Week 5'],
                ],


            ],
            'monthly' => [
                'label' => 'Monthly',
                'value' => 'monthly',
                'data' => [
                    [
                        'value' => '1',
                        'label' => 'January',
                    ],
                    [
                        'value' => '2',
                        'label' => 'February',
                    ],
                    [
                        'value' => '3',
                        'label' => 'March',
                    ],
                    [
                        'value' => '4',
                        'label' => 'April',
                    ],
                    [
                        'value' => '5',
                        'label' => 'May',
                    ],
                    [
                        'value' => '6',
                        'label' => 'June',
                    ],
                    [
                        'value' => '7',
                        'label' => 'July',
                    ],
                    [
                        'value' => '8',
                        'label' => 'August',
                    ],
                    [
                        'value' => '9',
                        'label' => 'September',
                    ],
                    [
                        'value' => '10',
                        'label' => 'October',
                    ],
                    [
                        'value' => '11',
                        'label' => 'November',
                    ],
                    [
                        'value' => '12',
                        'label' => 'December',
                    ],

                ]],
            'yearly' => [
                'label' => 'Yearly',
                'value' => 'yearly',
                'data' => [
                    [
                        'label' => '2018',
                        'value' => '2018',
                    ],
                    [
                        'label' => '2019',
                        'value' => '2019',
                    ],
                    [
                        'label' => '2020',
                        'value' => '2020',
                    ],
                    [
                        'label' => '2021',
                        'value' => '2021',
                    ],
                    [
                        'label' => '2022',
                        'value' => '2022',
                    ],
                    [
                        'label' => '2023',
                        'value' => '2023',
                    ],
                    [
                        'label' => '2024',
                        'value' => '2024',
                    ],
                    [
                        'label' => '2025',
                        'value' => '2025',
                    ],
                    [
                        'label' => '2026',
                        'value' => '2026',
                    ],
                    [
                        'label' => '2027',
                        'value' => '2027',
                    ],
                    [
                        'label' => '2028',
                        'value' => '2028',
                    ],
                    [
                        'label' => '2029',
                        'value' => '2029',
                    ],
                    [
                        'label' => '2030',
                        'value' => '2030',
                    ],
                    [
                        'label' => '2031',
                        'value' => '2031',
                    ],
                    [
                        'label' => '2032',
                        'value' => '2032',
                    ],
                    [
                        'label' => '2033',
                        'value' => '2033',
                    ],
                    [
                        'label' => '2034',
                        'value' => '2034',
                    ],
                ]
            ],
        ];
    }

    public function reportTypeChange()
    {
//        dd($this->reportType);
    }
    public function render()
    {

        return view('livewire.report-filters');
    }
}
