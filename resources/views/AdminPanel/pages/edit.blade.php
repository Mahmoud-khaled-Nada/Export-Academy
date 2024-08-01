@extends('AdminPanel.app')
@section('content')
    <x-toolbar title="{{ __('lang.pages') }}" />
    <x-partials-errors />
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">{{ __('lang.edit') }}</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->

        <!--begin::Content-->
        <div id="kt_account_settings_profile_details" class="collapse show">
            <!--begin::Form-->
            <form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                novalidate="novalidate" enctype="multipart/form-data" action="{{ route('pages.update', $page->id) }}"
                method="POST">
                <!--begin::Card body-->
                @include('AdminPanel.pages.fields')
                <!--end::Card body-->
        </div>
        <!--begin::Actions-->
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <a type="button" class="btn btn-light btn-active-light-primary me-2"
                href='{{ route('pages.index') }}'>{{ __('lang.back') }}</a>
            <button type="submit" class="btn btn-primary"
                id="kt_account_profile_details_submit">{{ __('lang.save') }}</button>
        </div>
        <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
@endsection
