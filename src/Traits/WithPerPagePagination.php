<?php
namespace ShamimShams\LWDatatable\Traits;

use Livewire\WithPagination;

trait WithPerPagePagination
{
    use WithPagination;

    public $perPage = 10;

    protected $paginationTheme = "bootstrap";

    public function mountWithPerPagePagination()
    {
        $this->perPage = session()->get( 'perPage', $this->perPage );
    }

    public function updatedPerPage( $value )
    {
        session()->put( 'perPage', $value );
    }

    public function applyPagination( $query )
    {
        return $query->paginate( $this->perPage );
    }
}