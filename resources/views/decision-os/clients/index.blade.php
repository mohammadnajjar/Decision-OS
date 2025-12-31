@extends('partials.layouts.master')

@section('title', 'Decision OS | العملاء')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'العملاء - Client Health')

@section('content')
<div id="layout-wrapper">
    <div class="container-fluid">

        {{-- Header --}}
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h4 class="mb-1">العملاء</h4>
                        <p class="text-muted mb-0">تقييم صحة العلاقة مع كل عميل</p>
                    </div>
                    <a href="{{ route('decision-os.clients.create') }}" class="btn btn-primary">
                        <i class="ri-user-add-line me-1"></i> عميل جديد
                    </a>
                </div>
            </div>
        </div>

        {{-- Stats Cards --}}
        <div class="row mb-4">
            <div class="col-6 col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="mb-0">{{ $stats['total'] }}</h3>
                        <span class="text-muted">إجمالي</span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card text-center border-success">
                    <div class="card-body">
                        <h3 class="mb-0 text-success">{{ $stats['green'] }}</h3>
                        <span class="text-muted">🟢 ممتاز</span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card text-center border-warning">
                    <div class="card-body">
                        <h3 class="mb-0 text-warning">{{ $stats['yellow'] }}</h3>
                        <span class="text-muted">🟡 تحذير</span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card text-center border-danger">
                    <div class="card-body">
                        <h3 class="mb-0 text-danger">{{ $stats['red'] }}</h3>
                        <span class="text-muted">🔴 إشكالي</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Clients List --}}
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th>العميل</th>
                                <th>الإيرادات</th>
                                <th>التأخيرات</th>
                                <th>الجهد</th>
                                <th>التواصل</th>
                                <th>الحالة</th>
                                <th>الإجراء</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($clients as $client)
                            <tr class="{{ $client->status === 'red' ? 'table-danger' : '' }}">
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm bg-{{ $client->status }}-subtle text-{{ $client->status }} rounded-circle d-flex align-items-center justify-content-center me-2">
                                            <i class="ri-user-line"></i>
                                        </div>
                                        <div>
                                            <strong>{{ $client->name }}</strong>
                                            @if($client->company)
                                                <small class="d-block text-muted">{{ $client->company }}</small>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="fw-medium">${{ number_format($client->total_revenue) }}</span>
                                    <small class="d-block text-muted">{{ $client->projects_count }} مشاريع</small>
                                </td>
                                <td>
                                    @if($client->late_payments > 0)
                                        <span class="badge bg-danger">{{ $client->late_payments }}</span>
                                    @else
                                        <span class="text-success">0</span>
                                    @endif
                                </td>
                                <td>
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="ri-fire-{{ $i <= $client->effort_score ? 'fill text-warning' : 'line text-muted' }}"></i>
                                    @endfor
                                </td>
                                <td>
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="ri-star-{{ $i <= $client->communication_score ? 'fill text-info' : 'line text-muted' }}"></i>
                                    @endfor
                                </td>
                                <td>
                                    <span class="badge bg-{{ $client->status }}">
                                        @if($client->status === 'green') ممتاز
                                        @elseif($client->status === 'yellow') تحذير
                                        @else إشكالي
                                        @endif
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('decision-os.clients.edit', $client) }}"
                                       class="btn btn-sm btn-outline-primary">
                                        <i class="ri-edit-line"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center py-5">
                                    <i class="ri-user-line fs-1 text-muted"></i>
                                    <p class="text-muted mt-2">لا يوجد عملاء</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Pagination --}}
        @if($clients->hasPages())
        <div class="d-flex justify-content-center mt-4">
            {{ $clients->links() }}
        </div>
        @endif

    </div>
</div>
@endsection
