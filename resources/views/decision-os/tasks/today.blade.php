@extends('partials.layouts.master')

@section('title', 'مهمة اليوم | Decision OS')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'Today One Thing')

@section('content')
<div class="row">
    <div class="col-12">
        {{-- Today One Thing Card --}}
        <div class="card mb-4 border-primary">
            <div class="card-header bg-primary text-white">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 class="card-title mb-0 text-white">
                        <i class="ri-focus-3-line me-2"></i>
                        Today One Thing - المهمة الأهم اليوم
                    </h5>
                    <span class="badge bg-light text-primary">{{ \Carbon\Carbon::parse($date)->translatedFormat('l، d F') }}</span>
                </div>
            </div>
            <div class="card-body p-4">
                @if($oneThing)
                    <div class="text-center py-4">
                        @if($oneThing->completed)
                            <div class="mb-3">
                                <span class="avatar-lg bg-success-subtle rounded-circle d-inline-flex align-items-center justify-content-center">
                                    <i class="ri-check-double-line text-success fs-2"></i>
                                </span>
                            </div>
                            <h3 class="text-decoration-line-through text-muted mb-3">{{ $oneThing->title }}</h3>
                            <p class="text-success mb-4">
                                <i class="ri-check-double-line"></i>
                                تم الإنجاز {{ $oneThing->completed_at ? $oneThing->completed_at->diffForHumans() : '' }}
                            </p>
                            <form action="{{ route('decision-os.tasks.reset', $oneThing) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-soft-warning">
                                    <i class="ri-refresh-line me-1"></i> إعادة فتح المهمة
                                </button>
                            </form>
                        @else
                            <div class="mb-3">
                                <span class="avatar-lg bg-primary-subtle rounded-circle d-inline-flex align-items-center justify-content-center">
                                    <i class="ri-focus-3-line text-primary fs-2"></i>
                                </span>
                            </div>
                            <h2 class="mb-4">{{ $oneThing->title }}</h2>
                            <form action="{{ route('decision-os.tasks.complete', $oneThing) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success btn-lg">
                                    <i class="ri-check-line me-1"></i> أنجزت المهمة ✓
                                </button>
                            </form>
                        @endif
                    </div>
                @else
                    <div class="text-center py-5">
                        <div class="mb-3">
                            <span class="avatar-lg bg-warning-subtle rounded-circle d-inline-flex align-items-center justify-content-center">
                                <i class="ri-question-line text-warning fs-2"></i>
                            </span>
                        </div>
                        <h4 class="text-muted mb-4">لم تحدد مهمة اليوم بعد</h4>
                        <form action="{{ route('decision-os.tasks.store') }}" method="POST" class="mx-auto" style="max-width: 500px;">
                            @csrf
                            <input type="hidden" name="type" value="one_thing">
                            <input type="hidden" name="date" value="{{ $date }}">
                            <div class="input-group input-group-lg">
                                <input type="text" name="title" class="form-control"
                                       placeholder="ما هي المهمة الأهم التي يجب إنجازها اليوم؟" required autofocus>
                                <button type="submit" class="btn btn-primary">
                                    <i class="ri-arrow-left-line"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>

        {{-- Top 3 Tasks --}}
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">
                    <i class="ri-list-check-2 me-2"></i>
                    Top 3 - أهم 3 مهام إضافية
                </h5>
                <span class="badge {{ $topTasks->count() >= 3 ? 'bg-success' : 'bg-warning' }}">
                    {{ $topTasks->count() }}/3
                </span>
            </div>
            <div class="card-body">
                @forelse($topTasks as $index => $task)
                    <div class="d-flex align-items-center justify-content-between p-3 {{ !$loop->last ? 'border-bottom' : '' }}">
                        <div class="d-flex align-items-center gap-3">
                            <span class="avatar-sm bg-secondary-subtle text-secondary rounded-circle d-inline-flex align-items-center justify-content-center">
                                {{ $index + 1 }}
                            </span>
                            @if($task->completed)
                                <div>
                                    <span class="text-decoration-line-through text-muted">{{ $task->title }}</span>
                                    <small class="d-block text-success">
                                        <i class="ri-check-line"></i> تم
                                    </small>
                                </div>
                            @else
                                <span>{{ $task->title }}</span>
                            @endif
                        </div>
                        <div class="d-flex gap-2">
                            @if($task->completed)
                                <form action="{{ route('decision-os.tasks.reset', $task) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-soft-warning btn-sm">
                                        <i class="ri-refresh-line"></i>
                                    </button>
                                </form>
                            @else
                                <form action="{{ route('decision-os.tasks.complete', $task) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-soft-success btn-sm">
                                        <i class="ri-check-line"></i>
                                    </button>
                                </form>
                            @endif
                            <form action="{{ route('decision-os.tasks.destroy', $task) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-soft-danger btn-sm" onclick="return confirm('هل أنت متأكد؟')">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <p class="text-muted text-center my-4">
                        <i class="ri-list-check-2 fs-3 d-block mb-2"></i>
                        لا توجد مهام إضافية
                    </p>
                @endforelse

                @if($topTasks->count() < 3)
                    <form action="{{ route('decision-os.tasks.store') }}" method="POST" class="mt-3 pt-3 border-top">
                        @csrf
                        <input type="hidden" name="type" value="top_3">
                        <input type="hidden" name="date" value="{{ $date }}">
                        <div class="input-group">
                            <input type="text" name="title" class="form-control" placeholder="إضافة مهمة جديدة..." required>
                            <button type="submit" class="btn btn-outline-primary">
                                <i class="ri-add-line me-1"></i> إضافة
                            </button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>

{{-- Quick Actions --}}
<div class="row mt-4">
    <div class="col-12">
        <div class="d-flex justify-content-between">
            <a href="{{ route('decision-os.dashboard') }}" class="btn btn-outline-secondary">
                <i class="ri-arrow-right-line me-1"></i> العودة للوحة التحكم
            </a>
            <a href="{{ route('decision-os.tasks.index') }}" class="btn btn-outline-primary">
                <i class="ri-history-line me-1"></i> عرض جميع المهام
            </a>
        </div>
    </div>
</div>
@endsection
