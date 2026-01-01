@extends('partials.layouts.master')

@section('title', 'تعديل الهدف | Decision OS')
@section('pagetitle', 'تعديل الهدف')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header">
                    <h6 class="mb-0"><i class="bi bi-pencil me-2"></i>تعديل الهدف</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('decision-os.goals.update', $goal) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">عنوان الهدف <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" required
                                   value="{{ old('title', $goal->title) }}">
                            @error('title')
                                <div class="text-danger fs-12 mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">الوصف (اختياري)</label>
                            <textarea name="description" class="form-control" rows="3">{{ old('description', $goal->description) }}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">الفئة <span class="text-danger">*</span></label>
                                <select name="category" class="form-select" required>
                                    @foreach($categories as $key => $label)
                                        <option value="{{ $key }}" {{ old('category', $goal->category) === $key ? 'selected' : '' }}>
                                            {{ $label }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">الحالة <span class="text-danger">*</span></label>
                                <select name="status" class="form-select" required>
                                    @foreach($statuses as $key => $label)
                                        <option value="{{ $key }}" {{ old('status', $goal->status) === $key ? 'selected' : '' }}>
                                            {{ $label }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">نسبة التقدم: <strong id="progress-value">{{ old('progress', $goal->progress) }}%</strong></label>
                            <input type="range" name="progress" class="form-range" min="0" max="100" step="5"
                                   value="{{ old('progress', $goal->progress) }}"
                                   oninput="document.getElementById('progress-value').textContent = this.value + '%'">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">تاريخ الإنجاز المستهدف</label>
                            <input type="date" name="target_date" class="form-control"
                                   value="{{ old('target_date', $goal->target_date?->format('Y-m-d')) }}">
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check-lg me-1"></i> حفظ التغييرات
                            </button>
                            <a href="{{ route('decision-os.goals.index') }}" class="btn btn-outline-secondary">
                                إلغاء
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
