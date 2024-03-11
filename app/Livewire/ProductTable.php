<?php

namespace App\Livewire;

use App\Models\Product;
use Carbon\Carbon;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ProductTable extends DataTableComponent
{
    protected $model = Product::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setReorderEnabled()
            ->setSingleSortingDisabled()
            ->setHideReorderColumnUnlessReorderingEnabled()
            ->setFilterLayoutSlideDown()
            ->setRememberColumnSelectionDisabled()
            ->setSecondaryHeaderTrAttributes(function ($rows) {
                return ['class' => 'bg-gray-100'];
            })
            ->setSecondaryHeaderTdAttributes(function (Column $column, $rows) {
                if ($column->isField('id')) {
                    return ['class' => 'text-red-500'];
                }

                return ['default' => true];
            })
            ->setFooterTrAttributes(function ($rows) {
                return ['class' => 'bg-gray-100'];
            })
            ->setFooterTdAttributes(function (Column $column, $rows) {
                if ($column->isField('name')) {
                    return ['class' => 'text-green-500'];
                }

                return ['default' => true];
            })
            ->setUseHeaderAsFooterEnabled()
            ->setHideBulkActionsWhenEmptyEnabled();
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
                ->sortable(),
            Column::make('Cod', 'code')
                ->searchable()
                ->sortable(),
            Column::make('Nombre', 'name')
                ->searchable()
                ->sortable(),
            Column::make('Cantidad', 'quantity')

                ->sortable(),
            Column::make('Pricio', 'price')
                ->sortable(),
            Column::make('U.M', 'um')
                ->sortable(),
            Column::make('O/C', 'oc')
                ->searchable()
                ->sortable(),
            Column::make('Categoria', 'category.name')
                ->searchable()
                ->sortable(),
            // Column::make('Created at', 'created_at')

            //     ->format(
            //         fn ($value) => Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d/m/Y')
            //     )
            //     ->sortable(),
            // Column::make('Updated at', 'updated_at')
            //     ->sortable(),
            Column::make('Acciones')
                ->label(
                    fn ($product) => view('admin.products.actions', ['product' => $product])
                ),
        ];
    }
}
