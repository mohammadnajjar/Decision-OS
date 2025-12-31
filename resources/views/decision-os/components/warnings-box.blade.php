{{-- Warnings Box Component --}}
<div class="card border-warning">
    <div class="card-header bg-warning-subtle">
        <h5 class="card-title mb-0 text-warning">
            <i class="ri-alarm-warning-line me-2"></i>
            تحذيرات مهمة
        </h5>
    </div>
    <div class="card-body p-0">
        <ul class="list-group list-group-flush">
            @foreach($warnings as $warning)
                <li class="list-group-item d-flex align-items-center gap-3 py-3">
                    @if($warning['severity'] === 'red')
                        <span class="badge bg-danger rounded-circle p-2">
                            <i class="ri-error-warning-line fs-5"></i>
                        </span>
                    @else
                        <span class="badge bg-warning rounded-circle p-2">
                            <i class="ri-alert-line fs-5"></i>
                        </span>
                    @endif
                    <div class="flex-grow-1">
                        <div class="fw-medium {{ $warning['severity'] === 'red' ? 'text-danger' : 'text-warning' }}">
                            {{ $warning['message'] }}
                        </div>
                        <small class="text-muted">
                            {{ $warning['module_label'] ?? '' }}
                        </small>
                    </div>
                    @if(isset($warning['action']))
                        <a href="{{ $warning['action'] }}" class="btn btn-sm btn-outline-primary">
                            إصلاح
                        </a>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>
