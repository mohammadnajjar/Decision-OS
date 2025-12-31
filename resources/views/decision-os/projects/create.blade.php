@extends('partials.layouts.master')

@section('title', 'Decision OS | مشروع جديد')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'إنشاء مشروع جديد')

@section('content')
<div id="layout-wrapper">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            <i class="ri-folder-add-line me-2 text-primary"></i>
                            مشروع جديد
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('decision-os.projects.store') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label class="form-label fw-medium">اسم المشروع <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" required
                                       placeholder="مثال: تصميم موقع شركة XYZ">
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-medium">العميل</label>
                                <select class="form-select" name="client_id">
                                    <option value="">-- بدون عميل --</option>
                                    @foreach($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                                    @endforeach
                                </select>
                                <small class="text-muted">
                                    <a href="{{ route('decision-os.clients.create') }}">+ إضافة عميل جديد</a>
                                </small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-medium">الوصف</label>
                                <textarea class="form-control" name="description" rows="3"
                                          placeholder="وصف مختصر للمشروع..."></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-medium">الإيراد المتوقع ($)</label>
                                    <input type="number" class="form-control" name="total_revenue"
                                           step="0.01" min="0" placeholder="0.00">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-medium">تاريخ البدء</label>
                                    <input type="date" class="form-control" name="start_date"
                                           value="{{ date('Y-m-d') }}">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('decision-os.projects.index') }}" class="btn btn-outline-secondary">
                                    <i class="ri-arrow-right-line me-1"></i> رجوع
                                </a>
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="ri-save-line me-1"></i> إنشاء المشروع
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
