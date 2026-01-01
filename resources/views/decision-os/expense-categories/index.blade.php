@extends('partials.layouts.master')

@section('title', 'إدارة فئات المصروفات | Decision OS')
@section('pagetitle', 'فئات المصروفات')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Add Form -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header">
                    <h6 class="mb-0"><i class="bi bi-plus-circle me-2"></i>إضافة فئة جديدة</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('decision-os.expense-categories.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">اسم الفئة <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="مثال: سفر" required value="{{ old('name') }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">الأيقونة (إيموجي)</label>
                            <input type="text" name="icon" class="form-control" placeholder="✈️" value="{{ old('icon', '📁') }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">اللون</label>
                            <input type="color" name="color" class="form-control form-control-color" value="{{ old('color', '#607D8B') }}">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            <i class="bi bi-check-lg me-1"></i> إضافة
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Categories List -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">الفئات الحالية</h6>
                    <a href="{{ route('decision-os.expenses.index') }}" class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-arrow-right me-1"></i> العودة للمصروفات
                    </a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>الأيقونة</th>
                                    <th>الاسم</th>
                                    <th>النوع</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>
                                            <span class="fs-4">{{ $category->icon }}</span>
                                        </td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            @if($category->is_system)
                                                <span class="badge bg-secondary">نظام</span>
                                            @elseif($category->is_default)
                                                <span class="badge bg-info">افتراضي</span>
                                            @else
                                                <span class="badge bg-success">مخصص</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="{{ route('decision-os.expense-categories.edit', $category) }}" class="btn btn-sm btn-link text-primary p-0">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                                @if(!$category->is_system)
                                                    <form action="{{ route('decision-os.expense-categories.destroy', $category) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-link text-danger p-0" onclick="return confirm('حذف هذه الفئة؟')">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
