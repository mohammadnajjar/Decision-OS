@extends('partials.layouts.master')

@section('title', 'تفاصيل العميل | Decision OS')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'صحة العملاء')

@section('content')
<div class="row">
    <div class="col-lg-10 mx-auto">
        {{-- Client Header --}}
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <h4 class="mb-1">{{ $client->name }}</h4>
                        @if($client->company)
                            <p class="text-muted mb-0">
                                <i class="ri-building-line me-1"></i>
                                {{ $client->company }}
                            </p>
                        @endif
                    </div>
                    <div class="text-end">
                        @php
                            $statusColors = [
                                'green' => ['bg' => 'bg-success', 'text' => 'عميل ممتاز'],
                                'yellow' => ['bg' => 'bg-warning', 'text' => 'يحتاج متابعة'],
                                'red' => ['bg' => 'bg-danger', 'text' => 'مشكلة'],
                            ];
                            $statusInfo = $statusColors[$client->status] ?? $statusColors['yellow'];
                        @endphp
                        <span class="badge {{ $statusInfo['bg'] }} fs-6">{{ $statusInfo['text'] }}</span>
                        <a href="{{ route('decision-os.clients.edit', $client) }}" class="btn btn-soft-primary btn-sm ms-2">
                            <i class="ri-edit-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Stats Row --}}
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card bg-success-subtle text-success">
                    <div class="card-body text-center">
                        <h3 class="mb-0">${{ number_format($client->total_revenue, 2) }}</h3>
                        <p class="mb-0 small">إجمالي الإيرادات</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card {{ $client->late_payments > 0 ? 'bg-danger-subtle text-danger' : 'bg-secondary-subtle' }}">
                    <div class="card-body text-center">
                        <h3 class="mb-0">{{ $client->late_payments }}</h3>
                        <p class="mb-0 small">دفعات متأخرة</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-info-subtle text-info">
                    <div class="card-body text-center">
                        <h3 class="mb-0">{{ $client->effort_score }}/5</h3>
                        <p class="mb-0 small">مستوى الجهد</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-primary-subtle text-primary">
                    <div class="card-body text-center">
                        <h3 class="mb-0">{{ $client->communication_score }}/5</h3>
                        <p class="mb-0 small">جودة التواصل</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Contact Info --}}
        <div class="card mb-4">
            <div class="card-header">
                <h6 class="mb-0"><i class="ri-contacts-line me-1"></i> معلومات التواصل</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    @if($client->email)
                    <div class="col-md-6 mb-3">
                        <label class="text-muted small">البريد الإلكتروني</label>
                        <p class="mb-0">
                            <a href="mailto:{{ $client->email }}">{{ $client->email }}</a>
                        </p>
                    </div>
                    @endif
                    @if($client->phone)
                    <div class="col-md-6 mb-3">
                        <label class="text-muted small">الهاتف</label>
                        <p class="mb-0">
                            <a href="tel:{{ $client->phone }}">{{ $client->phone }}</a>
                        </p>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        {{-- Client Insight --}}
        @php $insight = $client->getInsight(); @endphp
        @if($insight)
        <div class="alert {{ $client->status === 'red' ? 'alert-danger' : ($client->status === 'yellow' ? 'alert-warning' : 'alert-success') }} mb-4">
            <i class="ri-lightbulb-line me-2"></i>
            {{ $insight }}
        </div>
        @endif

        {{-- Projects --}}
        @if($client->projects->isNotEmpty())
        <div class="card mb-4">
            <div class="card-header">
                <h6 class="mb-0"><i class="ri-folder-line me-1"></i> المشاريع</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>المشروع</th>
                                <th>الإيرادات</th>
                                <th>الساعات</th>
                                <th>$/ساعة</th>
                                <th>الحالة</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($client->projects as $project)
                            <tr>
                                <td>
                                    <a href="{{ route('decision-os.projects.show', $project) }}">
                                        {{ $project->name }}
                                    </a>
                                </td>
                                <td>${{ number_format($project->total_revenue, 2) }}</td>
                                <td>{{ round($project->total_hours / 60, 1) }}h</td>
                                <td>
                                    @php $status = $project->profitability_status; @endphp
                                    <span class="badge {{ $status === 'green' ? 'bg-success' : ($status === 'yellow' ? 'bg-warning' : 'bg-danger') }}">
                                        ${{ number_format($project->revenue_per_hour, 2) }}
                                    </span>
                                </td>
                                <td>
                                    <span class="badge bg-secondary-subtle text-secondary">
                                        {{ $project->status === 'active' ? 'نشط' : 'مكتمل' }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif

        {{-- Notes --}}
        @if($client->notes)
        <div class="card mb-4">
            <div class="card-header">
                <h6 class="mb-0"><i class="ri-sticky-note-line me-1"></i> ملاحظات</h6>
            </div>
            <div class="card-body">
                {!! nl2br(e($client->notes)) !!}
            </div>
        </div>
        @endif

        {{-- Back --}}
        <div class="text-center">
            <a href="{{ route('decision-os.clients.index') }}" class="btn btn-soft-primary">
                <i class="ri-arrow-right-line me-1"></i> العودة للعملاء
            </a>
        </div>
    </div>
</div>
@endsection
