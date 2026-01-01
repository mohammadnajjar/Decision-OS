@extends('partials.layouts.master')

@section('title', 'تعديل المشروع | Decision OS')
@section('pagetitle', 'تعديل المشروع')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="ri-edit-line me-2"></i> تعديل: {{ $project->name }}
                    </h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('decision-os.projects.update', $project) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">اسم المشروع <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                       value="{{ old('name', $project->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">العميل</label>
                                <select name="client_id" class="form-select">
                                    <option value="">-- بدون عميل --</option>
                                    @foreach($clients as $client)
                                        <option value="{{ $client->id }}" {{ old('client_id', $project->client_id) == $client->id ? 'selected' : '' }}>
                                            {{ $client->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">الحالة <span class="text-danger">*</span></label>
                                <select name="status" class="form-select" required>
                                    @foreach(\App\Models\Project::STATUSES as $value => $label)
                                        <option value="{{ $value }}" {{ old('status', $project->status) === $value ? 'selected' : '' }}>
                                            {{ $label }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">الأولوية <span class="text-danger">*</span></label>
                                <select name="priority" class="form-select" required>
                                    @foreach(\App\Models\Project::PRIORITIES as $value => $label)
                                        <option value="{{ $value }}" {{ old('priority', $project->priority) === $value ? 'selected' : '' }}>
                                            {{ $label }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">تاريخ البدء</label>
                                <input type="date" name="start_date" class="form-control"
                                       value="{{ old('start_date', $project->start_date?->format('Y-m-d')) }}">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">تاريخ الانتهاء</label>
                                <input type="date" name="end_date" class="form-control"
                                       value="{{ old('end_date', $project->end_date?->format('Y-m-d')) }}">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">الوصف</label>
                            <textarea name="description" class="form-control" rows="4">{{ old('description', $project->description) }}</textarea>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="ri-save-line me-1"></i> حفظ التغييرات
                            </button>
                            <a href="{{ route('decision-os.projects.show', $project) }}" class="btn btn-secondary">إلغاء</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
