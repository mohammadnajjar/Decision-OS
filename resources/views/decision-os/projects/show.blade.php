@extends('partials.layouts.master')

@section('title', 'تفاصيل المشروع | Decision OS')
@section('title-sub', 'Decision OS')
@section('pagetitle', $project->name)

@section('content')
<div class="row">
    <div class="col-lg-10 mx-auto">
        {{-- Project Header --}}
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start flex-wrap gap-3">
                    <div>
                        <h4 class="mb-1">{{ $project->name }}</h4>
                        @if($project->client)
                            <p class="text-muted mb-2">
                                <i class="ri-user-line me-1"></i>
                                {{ $project->client->name }}
                            </p>
                        @endif
                        <div class="d-flex gap-2 flex-wrap">
                            <span class="badge bg-{{ $project->status_color }}-subtle text-{{ $project->status_color }}">
                                {{ $project->status_label }}
                            </span>
                            <span class="badge bg-{{ $project->priority_color }}-subtle text-{{ $project->priority_color }}">
                                {{ $project->priority_label }}
                            </span>
                            @if($project->start_date)
                                <span class="badge bg-light text-muted">
                                    <i class="ri-calendar-line"></i> {{ $project->start_date->format('M d, Y') }}
                                    @if($project->end_date) - {{ $project->end_date->format('M d, Y') }} @endif
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="{{ route('decision-os.projects.kanban', $project) }}" class="btn btn-outline-primary btn-sm">
                            <i class="ri-layout-column-line me-1"></i> Kanban
                        </a>
                        <a href="{{ route('decision-os.projects.edit', $project) }}" class="btn btn-outline-secondary btn-sm">
                            <i class="ri-edit-line me-1"></i> تعديل
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Stats Row --}}
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card bg-success-subtle text-success">
                    <div class="card-body text-center">
                        <h3 class="mb-0">${{ number_format($project->total_revenue, 2) }}</h3>
                        <p class="mb-0">إجمالي الإيرادات</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-info-subtle text-info">
                    <div class="card-body text-center">
                        <h3 class="mb-0">{{ round($project->total_hours / 60, 1) }}h</h3>
                        <p class="mb-0">ساعات العمل</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-primary-subtle text-primary">
                    <div class="card-body text-center">
                        <h3 class="mb-0">{{ $project->total_pomodoros ?? 0 }}</h3>
                        <p class="mb-0">جلسات Pomodoro</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            {{-- Update Revenue --}}
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <h6 class="mb-0"><i class="ri-money-dollar-circle-line me-1"></i> تحديث الإيرادات</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('decision-os.projects.update-revenue', $project) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">إجمالي الإيرادات ($)</label>
                                <input type="number" name="revenue" class="form-control"
                                       value="{{ $project->total_revenue }}" step="0.01" min="0" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">
                                <i class="ri-save-line me-1"></i> حفظ
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Log Hours --}}
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <h6 class="mb-0"><i class="ri-time-line me-1"></i> تسجيل ساعات</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('decision-os.projects.log-hours', $project) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">ساعات إضافية</label>
                                <input type="number" name="hours" class="form-control"
                                       step="0.25" min="0.25" placeholder="0.5" required>
                            </div>
                            <button type="submit" class="btn btn-info w-100">
                                <i class="ri-add-line me-1"></i> إضافة
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- Description --}}
        @if($project->description)
        <div class="card mb-4">
            <div class="card-header">
                <h6 class="mb-0">الوصف</h6>
            </div>
            <div class="card-body">
                {!! nl2br(e($project->description)) !!}
            </div>
        </div>
        @endif

        {{-- Pomodoro Sessions --}}
        @if($project->pomodoroSessions->isNotEmpty())
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0"><i class="ri-timer-line me-1"></i> جلسات Pomodoro</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>التاريخ</th>
                                <th>المدة</th>
                                <th>الحالة</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($project->pomodoroSessions->take(10) as $session)
                            <tr>
                                <td>{{ $session->created_at->format('Y/m/d H:i') }}</td>
                                <td>{{ round($session->duration / 60) }} دقيقة</td>
                                <td>
                                    <span class="badge {{ $session->status === 'completed' ? 'bg-success-subtle text-success' : 'bg-danger-subtle text-danger' }}">
                                        {{ $session->status === 'completed' ? 'مكتملة' : 'مقاطعة' }}
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

        {{-- Attachments --}}
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="mb-0"><i class="ri-attachment-line me-1"></i> المرفقات</h6>
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModal">
                    <i class="ri-upload-2-line me-1"></i> رفع ملف
                </button>
            </div>
            <div class="card-body">
                @if($project->attachments && $project->attachments->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>الملف</th>
                                    <th>الحجم</th>
                                    <th>ملاحظات</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($project->attachments as $attachment)
                                <tr>
                                    <td>
                                        <i class="{{ $attachment->file_icon }} me-2"></i>
                                        {{ $attachment->name }}
                                    </td>
                                    <td>{{ $attachment->file_size_human }}</td>
                                    <td>{{ Str::limit($attachment->notes, 30) }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('decision-os.projects.download-attachment', [$project, $attachment]) }}"
                                           class="btn btn-sm btn-outline-primary">
                                            <i class="ri-download-line"></i>
                                        </a>
                                        <form action="{{ route('decision-os.projects.delete-attachment', [$project, $attachment]) }}"
                                              method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                                    onclick="return confirm('هل أنت متأكد من الحذف؟')">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-muted text-center mb-0">لا توجد مرفقات</p>
                @endif
            </div>
        </div>

        {{-- Back --}}
        <div class="mt-4 text-center">
            <a href="{{ route('decision-os.projects.index') }}" class="btn btn-soft-primary">
                <i class="ri-arrow-right-line me-1"></i> العودة للمشاريع
            </a>
        </div>
    </div>
</div>

{{-- Upload Modal --}}
<div class="modal fade" id="uploadModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('decision-os.projects.upload-attachment', $project) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">رفع ملف مرفق</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">الملف <span class="text-danger">*</span></label>
                        <input type="file" name="file" class="form-control" required>
                        <small class="text-muted">الحد الأقصى 10 ميجابايت</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">اسم الملف (اختياري)</label>
                        <input type="text" name="name" class="form-control" placeholder="سيستخدم اسم الملف الأصلي إذا ترك فارغاً">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ملاحظات</label>
                        <textarea name="notes" class="form-control" rows="2"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                    <button type="submit" class="btn btn-primary">رفع</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
