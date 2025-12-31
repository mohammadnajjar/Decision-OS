@extends('partials.layouts.master')

@section('title', 'إضافة مهمة | Decision OS')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'إضافة مهمة جديدة')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="ri-add-circle-line me-2"></i>
                    إضافة مهمة جديدة
                </h5>
            </div>
            <div class="card-body">
                <form action="{{ route('decision-os.tasks.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label fw-medium">عنوان المهمة</label>
                        <input type="text" name="title" class="form-control form-control-lg @error('title') is-invalid @enderror"
                               placeholder="اكتب عنوان المهمة هنا..." required value="{{ old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-medium">نوع المهمة</label>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="type" id="type-one-thing" value="one_thing" checked>
                                    <label class="form-check-label p-3 d-block border rounded" for="type-one-thing">
                                        <span class="fs-16 fw-semibold d-block mb-1">
                                            <i class="ri-focus-3-line me-1 text-primary"></i>
                                            Today One Thing
                                        </span>
                                        <span class="text-muted fs-13">المهمة الأهم والأولى في اليوم</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="type" id="type-top-3" value="top_3">
                                    <label class="form-check-label p-3 d-block border rounded" for="type-top-3">
                                        <span class="fs-16 fw-semibold d-block mb-1">
                                            <i class="ri-list-check-2 me-1 text-success"></i>
                                            Top 3
                                        </span>
                                        <span class="text-muted fs-13">إحدى المهام الثلاث المهمة</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-medium">التاريخ</label>
                        <input type="date" name="date" class="form-control" value="{{ $date }}">
                    </div>

                    <div class="d-flex justify-content-between pt-3 border-top">
                        <a href="{{ route('decision-os.tasks.index') }}" class="btn btn-outline-secondary">
                            <i class="ri-arrow-right-line me-1"></i> رجوع
                        </a>
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="ri-save-line me-1"></i> حفظ المهمة
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
