@extends('admin.layouts.app')
@section('title_page')
    <div class="app-navbar-item ms-1 ms-md-3">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                PROMOTION</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="/admin/dashboard" class="text-muted text-hover-primary">Admin</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Promotion</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
    </div>
@endsection
@section('contents')
    <div class="d-flex flex-column flex-column-fluid">
        <div class="card mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Promotion Menu</span>

                    <span class="text-muted mt-1 fw-semibold fs-7">Over 500 product</span>
                </h3>
                <div class="">
                    <a href="/admin/promotion/add" class="btn btn-sm btn-light btn-active-primary">
                        <i class="ki-duotone ki-plus fs-2"></i> New Promotion
                    </a>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bold text-muted">
                                <th class="w-25px">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" data-kt-check="true"
                                            data-kt-check-target=".widget-9-check">
                                    </div>
                                </th>
                                <th class="min-w-25px">ID</th>
                                <th class="min-w-150px">NAME</th>
                                <th class="min-w-150px">PERCENT</th>
                                <th class="min-w-150px">PERIOD</th>
                                <th class="min-w-100px">ACTIONS</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->

                        <!--begin::Table body-->
                        <tbody>
                            @if ($promotions->count() > 0)
                                @foreach ($promotions as $promotion)
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input widget-9-check" type="checkbox"
                                                    value="1">
                                            </div>
                                        </td>

                                        <td>
                                            <span
                                                class="text-gray-900 fw-bold text-hover-primary d-block fs-6">{{ $promotion->id }}</span>
                                        </td>
                                        <td>
                                            <span
                                                class="text-gray-900 fw-bold text-hover-primary d-block fs-6">{{ $promotion->name }}</span>
                                        </td>
                                        <td>
                                            <span
                                                class="text-gray-900 fw-bold text-hover-primary d-block fs-6">{{ $promotion->percent . '%' }}</span>
                                        </td>
                                        <td>
                                            <span
                                                class="text-gray-900 fw-bold text-hover-primary d-block fs-6">{{ date('d/m/Y', strtotime($promotion->start_date)) }}
                                                - {{ date('d/m/Y', strtotime($promotion->end_date)) }}</span>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-shrink-0">
                                                <a href="{{ route('admin.page.promotion.edit', $promotion->id) }}"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    <i class="ki-duotone ki-pencil fs-2"><span class="path1"></span><span
                                                            class="path2"></span></i> </a>
                                                <form action="{{ route('admin.page.promotion.delete', $promotion->id) }}"
                                                    method="POST" type="button"
                                                    onsubmit="return confirm('Bạn chắc chắn muốn xóa ?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                        <i class="ki-duotone ki-trash fs-2"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span><span
                                                                class="path5"></span></i> </a>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td class="text-center" colspan="5">NOT FOUND PROMOTION</td>
                                </tr>
                            @endif
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
    </div>
@endsection
