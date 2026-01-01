@extends('partials.layouts.master')

@section('title', 'تعديل فئة | Decision OS')
@section('pagetitle', 'تعديل فئة')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header">
                    <h6 class="mb-0"><i class="bi bi-pencil me-2"></i>تعديل الفئة: {{ $category->name }}</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('decision-os.expense-categories.update', $category) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">اسم الفئة <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" required value="{{ old('name', $category->name) }}">
                            @error('name')
                                <div class="text-danger fs-12 mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">الأيقونة (إيموجي)</label>
                            <input type="text" name="icon" class="form-control" value="{{ old('icon', $category->icon) }}">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">اللون</label>
                            <input type="color" name="color" class="form-control form-control-color" value="{{ old('color', $category->color) }}">
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check-lg me-1"></i> حفظ
                            </button>
                            <a href="{{ route('decision-os.expense-categories.index') }}" class="btn btn-outline-secondary">
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
