@extends('partials.layouts.master')

@section('title', 'Decision OS | عميل جديد')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'إضافة عميل جديد')

@section('content')
<div id="layout-wrapper">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            <i class="ri-user-add-line me-2 text-primary"></i>
                            إضافة عميل جديد
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('decision-os.clients.store') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label class="form-label fw-medium">اسم العميل <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" required
                                       placeholder="الاسم الكامل أو اسم الشركة">
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-medium">البريد الإلكتروني</label>
                                    <input type="email" class="form-control" name="email"
                                           placeholder="email@example.com">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-medium">رقم الهاتف</label>
                                    <input type="text" class="form-control" name="phone"
                                           placeholder="+966...">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-medium">الشركة</label>
                                <input type="text" class="form-control" name="company"
                                       placeholder="اسم الشركة (إن وجد)">
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-medium">ملاحظات</label>
                                <textarea class="form-control" name="notes" rows="3"
                                          placeholder="أي ملاحظات عن هذا العميل..."></textarea>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('decision-os.clients.index') }}" class="btn btn-outline-secondary">
                                    <i class="ri-arrow-right-line me-1"></i> رجوع
                                </a>
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="ri-save-line me-1"></i> إضافة العميل
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
