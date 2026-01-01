@extends('partials.layouts.master')

@section('title', 'Decision OS | الأصول والأعمال')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'الأصول والأعمال')

@section('content')
<div id="layout-wrapper">
    <div class="container-fluid">

        {{-- Header --}}
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <div>
                        <h4 class="mb-1">
                            <i class="ri-building-2-line text-success me-2"></i>
                            الأصول والأعمال
                        </h4>
                        <p class="text-muted mb-0">إدارة مشاريعك وأصولك التجارية</p>
                    </div>
                    <a href="{{ route('decision-os.business.create') }}" class="btn btn-primary">
                        <i class="ri-add-line me-1"></i> إضافة أصل جديد
                    </a>
                </div>
            </div>
        </div>

        {{-- Stats Cards --}}
        <div class="row g-3 mb-4">
            {{-- Total MRR --}}
            <div class="col-md-6 col-xl-3">
                <div class="card border-0 shadow-sm h-100 border-start border-4 border-success">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-sm bg-success-subtle text-success rounded d-flex align-items-center justify-content-center">
                                <i class="ri-money-dollar-circle-line fs-4"></i>
                            </div>
                            <div class="ms-3">
                                <p class="text-muted mb-1 small">MRR</p>
                                <h4 class="mb-0">${{ number_format($stats['total_mrr'], 2) }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Active Clients --}}
            <div class="col-md-6 col-xl-3">
                <div class="card border-0 shadow-sm h-100 border-start border-4 border-primary">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-sm bg-primary-subtle text-primary rounded d-flex align-items-center justify-content-center">
                                <i class="ri-user-star-line fs-4"></i>
                            </div>
                            <div class="ms-3">
                                <p class="text-muted mb-1 small">عملاء نشطين</p>
                                <h4 class="mb-0">{{ $stats['active_clients'] }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Total Contracts --}}
            <div class="col-md-6 col-xl-3">
                <div class="card border-0 shadow-sm h-100 border-start border-4 border-info">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-sm bg-info-subtle text-info rounded d-flex align-items-center justify-content-center">
                                <i class="ri-file-paper-2-line fs-4"></i>
                            </div>
                            <div class="ms-3">
                                <p class="text-muted mb-1 small">عقود موقعة</p>
                                <h4 class="mb-0">{{ $stats['total_contracts'] }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Active Assets --}}
            <div class="col-md-6 col-xl-3">
                <div class="card border-0 shadow-sm h-100 border-start border-4 border-warning">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-sm bg-warning-subtle text-warning rounded d-flex align-items-center justify-content-center">
                                <i class="ri-building-2-line fs-4"></i>
                            </div>
                            <div class="ms-3">
                                <p class="text-muted mb-1 small">أصول نشطة</p>
                                <h4 class="mb-0">{{ $stats['active_assets'] }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Assets List --}}
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-transparent">
                        <h6 class="mb-0"><i class="ri-list-check me-2"></i>قائمة الأصول</h6>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>الاسم</th>
                                        <th>النوع</th>
                                        <th>العملاء</th>
                                        <th>MRR</th>
                                        <th>العقود</th>
                                        <th>الحالة</th>
                                        <th>الإجراءات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($assets as $asset)
                                        @php
                                            $typeLabels = \App\Models\BusinessAsset::typeLabels();
                                            $statusLabels = \App\Models\BusinessAsset::statusLabels();
                                            $statusColors = \App\Models\BusinessAsset::statusColors();
                                        @endphp
                                        <tr>
                                            <td>
                                                <div class="fw-semibold">{{ $asset->name }}</div>
                                                @if($asset->description)
                                                    <small class="text-muted">{{ Str::limit($asset->description, 50) }}</small>
                                                @endif
                                            </td>
                                            <td>
                                                <span class="badge bg-secondary-subtle text-secondary">
                                                    {{ $typeLabels[$asset->type] }}
                                                </span>
                                            </td>
                                            <td>{{ $asset->active_clients }}</td>
                                            <td>${{ number_format($asset->mrr, 2) }}</td>
                                            <td>{{ $asset->contracts_signed }}</td>
                                            <td>
                                                <span class="badge bg-{{ $statusColors[$asset->status] }}-subtle text-{{ $statusColors[$asset->status] }}">
                                                    {{ $statusLabels[$asset->status] }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-1">
                                                    <a href="{{ route('decision-os.business.edit', $asset) }}"
                                                       class="btn btn-sm btn-outline-primary">
                                                        <i class="ri-edit-line"></i>
                                                    </a>
                                                    <form action="{{ route('decision-os.business.destroy', $asset) }}"
                                                          method="POST" class="d-inline"
                                                          onsubmit="return confirm('هل أنت متأكد من الحذف؟')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center py-5">
                                                <i class="ri-building-2-line fs-1 text-muted d-block mb-3"></i>
                                                <p class="text-muted mb-3">لا توجد أصول بعد</p>
                                                <a href="{{ route('decision-os.business.create') }}" class="btn btn-primary btn-sm">
                                                    <i class="ri-add-line me-1"></i> إضافة أول أصل
                                                </a>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
