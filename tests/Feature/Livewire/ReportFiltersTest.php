<?php

use App\Livewire\ReportFilters;
use Livewire\Livewire;

it('renders successfully', function () {
    $component = Livewire::test(ReportFilters::class);
    $component->assertStatus(200);
});

it('displays the correct report types', function () {
    $component = Livewire::test(ReportFilters::class)
        ->assertSee('Weekly')
        ->assertSee('Monthly')
        ->assertSee('Yearly');
});

it('it displays weeks when weekly option is selected', function () {
    $component = Livewire::test(ReportFilters::class)
        ->set('reportType', 'weekly')
        ->assertSet('reportType', 'weekly')
        ->assertSet('reportValue', '')
        ->assertSeeHtml('Week 1')
        ->assertDontSeeHtml('2019');
});

it('it displays months when monthly option is selected', function () {
    $component = Livewire::test(ReportFilters::class)
        ->set('reportType', 'monthly')
        ->assertSet('reportType', 'monthly')
        ->assertSet('reportValue', '')
        ->assertSeeHtml('January')
        ->assertDontSeeHtml('2019')
        ->assertDontSeeHtml('Week 1');
});

it('it displays years when yearly option is selected', function () {
    $component = Livewire::test(ReportFilters::class)
        ->set('reportType', 'yearly')
        ->assertSet('reportType', 'yearly')
        ->assertSet('reportValue', '')
        ->assertSeeHtml('2019')
        ->assertDontSeeHtml('January')
        ->assertDontSeeHtml('Week 1');
});

it('renders the page correctly when query params are set', function () {
    Livewire::withQueryParams([
        'reportType' => 'yearly',
        'reportValue' => '2019'])
        ->test(ReportFilters::class)
        ->assertOk();
});
