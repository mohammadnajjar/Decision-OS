@extends('partials.layouts.master')

@section('title', 'المهام | Decision OS')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'نظام التركيز')

@section('content')
<div class="row">
    <div class="col-12">
        {{-- Today One Thing --}}
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">
                    <i class="ri-focus-3-line me-2"></i>
                    Today One Thing - المهمة الأهم اليوم
                </h5>
            </div>
            <div class="card-body">
                @if($oneThing)
                    <div class="d-flex align-items-center justify-content-between p-3 bg-light rounded">
                        <div class="d-flex align-items-center">
                            @if($oneThing->completed)
                                <i class="ri-checkbox-circle-fill text-success fs-3 me-3"></i>
                            @else
                                <form action="{{ route('decision-os.tasks.complete', $oneThing) }}" method="POST" class="me-3">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-outline-success btn-sm rounded-circle" title="إنجاز">
                                        <i class="ri-check-line"></i>
                                    </button>
                                </form>
                            @endif
                            <div>
                                <h5 class="mb-0 {{ $oneThing->completed ? 'text-decoration-line-through text-muted' : '' }}">
                                    {{ $oneThing->title }}
                                </h5>
                                @if($oneThing->completed)
                                    <small class="text-success">
                                        <i class="ri-check-double-line"></i> تم الإنجاز {{ $oneThing->completed_at->diffForHumans() }}
                                    </small>
                                @endif
                            </div>
                        </div>
                        @if($oneThing->completed)
                            <form action="{{ route('decision-os.tasks.reset', $oneThing) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-soft-warning btn-sm">
                                    <i class="ri-refresh-line me-1"></i> إعادة
                                </button>
                            </form>
                        @endif
                    </div>
                @else
                    <form action="{{ route('decision-os.tasks.set-today') }}" method="POST">
                        @csrf
                        <input type="hidden" name="type" value="one_thing">
                        <div class="input-group">
                            <input type="text" name="title" class="form-control form-control-lg"
                                   placeholder="ما هي المهمة الأهم التي يجب إنجازها اليوم؟" required>
                            <button type="submit" class="btn btn-primary">
                                <i class="ri-add-line me-1"></i> تحديد
                            </button>
                        </div>
                    </form>
                @endif
            </div>
        </div>

        {{-- Top 3 Tasks --}}
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">
                    <i class="ri-list-check-2 me-2"></i>
                    Top 3 - أهم 3 مهام
                </h5>
                <span class="badge bg-primary">{{ $topTasks->count() }}/3</span>
            </div>
            <div class="card-body">
                {{-- Existing Tasks --}}
                @forelse($topTasks as $task)
                    <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                        <div class="d-flex align-items-center">
                            @if($task->completed)
                                <i class="ri-checkbox-circle-fill text-success fs-4 me-3"></i>
                            @else
                                <form action="{{ route('decision-os.tasks.complete', $task) }}" method="POST" class="me-3">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-outline-success btn-sm rounded-circle">
                                        <i class="ri-check-line"></i>
                                    </button>
                                </form>
                            @endif
                            <span class="{{ $task->completed ? 'text-decoration-line-through text-muted' : '' }}">
                                {{ $task->title }}
                            </span>
                        </div>
                        @if($task->completed)
                            <form action="{{ route('decision-os.tasks.reset', $task) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-soft-warning btn-sm">
                                    <i class="ri-refresh-line"></i>
                                </button>
                            </form>
                        @endif
                    </div>
                @empty
                    <p class="text-muted text-center my-3">لا توجد مهام إضافية</p>
                @endforelse

                {{-- Add New Task --}}
                @if($topTasks->count() < 3)
                    <form action="{{ route('decision-os.tasks.set-today') }}" method="POST" class="mt-3">
                        @csrf
                        <input type="hidden" name="type" value="top_3">
                        <div class="input-group">
                            <input type="text" name="title" class="form-control"
                                   placeholder="إضافة مهمة..." required>
                            <button type="submit" class="btn btn-outline-primary">
                                <i class="ri-add-line"></i>
                            </button>
                        </div>
                    </form>
                @endif
            </div>
        </div>

        {{-- Back to Dashboard --}}
        <div class="mt-4 text-center">
            <a href="{{ route('decision-os.dashboard') }}" class="btn btn-soft-primary">
                <i class="ri-arrow-right-line me-1"></i> العودة للـ Dashboard
            </a>
        </div>
    </div>
</div>
@endsection
