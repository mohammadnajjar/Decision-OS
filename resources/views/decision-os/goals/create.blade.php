@extends('partials.layouts.master')

@section('title', 'إضافة هدف جديد | Decision OS')
@section('pagetitle', 'إضافة هدف جديد')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header">
                    <h6 class="mb-0"><i class="bi bi-bullseye me-2"></i>إضافة هدف لعام {{ now()->year }}</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('decision-os.goals.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">عنوان الهدف <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control"
                                   placeholder="مثال: توفير 10,000$" required value="{{ old('title') }}">
                            @error('title')
                                <div class="text-danger fs-12 mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">الوصف (اختياري)</label>
                            <textarea name="description" class="form-control" rows="3"
                                      placeholder="تفاصيل إضافية عن الهدف...">{{ old('description') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">الفئة <span class="text-danger">*</span></label>
                            <select name="category" class="form-select" required>
                                @foreach($categories as $key => $label)
                                    <option value="{{ $key }}" {{ old('category') === $key ? 'selected' : '' }}>
                                        @switch($key)
                                            @case('personal') 🎯 @break
                                            @case('financial') 💰 @break
                                            @case('health') 💪 @break
                                            @case('career') 💼 @break
                                            @case('learning') 📚 @break
                                            @case('relationships') 🤝 @break
                                            @default 📌
                                        @endswitch
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">تاريخ الإنجاز المستهدف (اختياري)</label>
                            <input type="date" name="target_date" class="form-control" value="{{ old('target_date') }}">
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check-lg me-1"></i> إضافة الهدف
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
