@extends('navigation-menu')
@section('konten')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-partials.card>
                <x-slot name="title">
                    <a href="{{ route('suppliers.index') }}" class="mr-4"
                        ><i class="mr-1 icon ion-md-arrow-back"></i
                    ></a>
                </x-slot>

                <div class="mt-4 px-4">
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.supplier.inputs.nama_supplier')
                        </h5>
                        <span>{{ $supplier->nama_supplier ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.supplier.inputs.alamat')
                        </h5>
                        <span>{{ $supplier->alamat ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.supplier.inputs.telp')
                        </h5>
                        <span>{{ $supplier->telp ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.supplier.inputs.kategori_id')
                        </h5>
                        <span
                            >{{ optional($supplier->kategori)->kategori ?? '-'
                            }}</span
                        >
                    </div>
                </div>

                <div class="mt-10">
                    <a href="{{ route('suppliers.index') }}" class="button">
                        <i class="mr-1 icon ion-md-return-left"></i>
                        @lang('crud.common.back')
                    </a>

                    @can('create', App\Models\Supplier::class)
                    <a href="{{ route('suppliers.create') }}" class="button">
                        <i class="mr-1 icon ion-md-add"></i>
                        @lang('crud.common.create')
                    </a>
                    @endcan
                </div>
            </x-partials.card>
        </div>
    </div>
@endsection
