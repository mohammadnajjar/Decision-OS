@extends('partials.layouts.master')

@section('title', 'Decision OS | إضافة أصل جديد')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'إضافة أصل جديد')

@section('content')
<div id="layout-wrapper">
    <div class="container-fluid">

        {{-- Header --}}
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h4 class="mb-1">
                            <i class="ri-add-circle-line text-primary me-2"></i>
                            إضافة أصل جديد
                        </h4>
                        <p class="text-muted mb-0">أضف مشروعاً أو أصلاً تجارياً جديداً</p>
                    </div>
                    <a href="{{ route('decision-os.business.index') }}" class="btn btn-outline-secondary">
                        <i class="ri-arrow-right-line me-1"></i> رجوع
                    </a>
                </div>
            </div>
        </div>

        {{-- Form --}}
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <form action="{{ route('decision-os.business.store') }}" method="POST">
                            @csrf

                            {{-- Name --}}
                            <div class="mb-4">
                                <label for="name" class="form-label fw-semibold">
                                    <i class="ri-building-2-line text-primary me-1"></i>
                                    اسم الأصل / المشروع *
                                </label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                       id="name" name="name" value="{{ old('name') }}" required
                                       placeholder="مثال: خدمات التصميم، SaaS، متجر إلكتروني">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Type --}}
                            <div class="mb-4">
                                <label for="type" class="form-label fw-semibold">
                                    <i class="ri-price-tag-3-line text-info me-1"></i>
                                    النوع *
                                </label>
                                <select class="form-select @error('type') is-invalid @enderror"
                                        id="type" name="type" required>
                                    @foreach($typeLabels as $value => $label)
                                        <option value="{{ $value }}" {{ old('type') === $value ? 'selected' : '' }}>
                                            {{ $label }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Description --}}
                            <div class="mb-4">
                                <label for="description" class="form-label fw-semibold">
                                    <i class="ri-file-text-line text-secondary me-1"></i>
                                    الوصف
                                </label>
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                          id="description" name="description" rows="3"
                                          placeholder="وصف مختصر للمشروع أو الأصل">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <hr class="my-4">

                            {{-- Metrics Row --}}
                            <div class="row">
                                {{-- Active Clients --}}
                                <div class="col-md-6 mb-4">
                                    <label for="active_clients" class="form-label fw-semibold">
                                        <i class="ri-user-star-line text-primary me-1"></i>
                                        عدد العملاء النشطين
                                    </label>
                                    <input type="number" class="form-control" id="active_clients"
                                           name="active_clients" min="0" value="{{ old('active_clients', 0) }}">
                                </div>

                                {{-- MRR --}}
                                <div class="col-md-6 mb-4">
                                    <label for="mrr" class="form-label fw-semibold">
                                        <i class="ri-money-dollar-circle-line text-success me-1"></i>
                                        الدخل الشهري المتكرر (MRR)
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" class="form-control" id="mrr"
                                               name="mrr" min="0" step="0.01" value="{{ old('mrr', 0) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                {{-- Contracts Signed --}}
                                <div class="col-md-6 mb-4">
                                    <label for="contracts_signed" class="form-label fw-semibold">
                                        <i class="ri-file-paper-2-line text-info me-1"></i>
                                        العقود الموقعة
                                    </label>
                                    <input type="number" class="form-control" id="contracts_signed"
                                           name="contracts_signed" min="0" value="{{ old('contracts_signed', 0) }}">
                                </div>

                                {{-- Systems Deployed --}}
                                <div class="col-md-6 mb-4">
                                    <label for="systems_deployed" class="form-label fw-semibold">
                                        <i class="ri-server-line text-warning me-1"></i>
                                        الأنظمة المنشورة
                                    </label>
                                    <input type="number" class="form-control" id="systems_deployed"
                                           name="systems_deployed" min="0" value="{{ old('systems_deployed', 0) }}">
                                </div>
                            </div>

                            {{-- Status --}}
                            <div class="mb-4">
                                <label class="form-label fw-semibold">
                                    <i class="ri-flag-line text-secondary me-1"></i>
                                    الحالة *
                                </label>
                                <div class="d-flex flex-wrap gap-3">
                                    @foreach($statusLabels as $value => $label)
                                        @php
                                            $colors = ['active' => 'success', 'paused' => 'warning', 'planning' => 'secondary'];
                                        @endphp
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status"
                                                   id="status_{{ $value }}" value="{{ $value }}"
                                                   {{ old('status', 'planning') === $value ? 'checked' : '' }}>
                                            <label class="form-check-label" for="status_{{ $value }}">
                                                <span class="badge bg-{{ $colors[$value] }}-subtle text-{{ $colors[$value] }}">
                                                    {{ $label }}
                                                </span>
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- Submit --}}
                            <div class="d-flex gap-2 pt-3">
                                <button type="submit" class="btn btn-primary">
                                    <i class="ri-save-line me-1"></i> حفظ
                                </button>
                                <a href="{{ route('decision-os.business.index') }}" class="btn btn-outline-secondary">
                                    إلغاء
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
