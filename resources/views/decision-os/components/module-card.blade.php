{{-- Module Card Component --}}
@php
    $statusColors = [
        'green' => ['bg' => 'bg-success', 'text' => 'text-success', 'subtle' => 'bg-success-subtle', 'icon' => 'ri-checkbox-circle-line'],
        'yellow' => ['bg' => 'bg-warning', 'text' => 'text-warning', 'subtle' => 'bg-warning-subtle', 'icon' => 'ri-error-warning-line'],
        'red' => ['bg' => 'bg-danger', 'text' => 'text-danger', 'subtle' => 'bg-danger-subtle', 'icon' => 'ri-close-circle-line'],
    ];
    $colors = $statusColors[$status] ?? $statusColors['yellow'];
@endphp

<div class="col-xl-3 col-md-6">
    <a href="{{ $link }}" class="text-decoration-none">
        <div class="card card-hover overflow-hidden">
            <div class="card-body position-relative">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="badge {{ $colors['subtle'] }} {{ $colors['text'] }} rounded-pill px-3 py-2">
                                <i class="{{ $colors['icon'] }} me-1"></i>
                                @if($status === 'green')
                                    جيد
                                @elseif($status === 'yellow')
                                    تحذير
                                @else
                                    خطر
                                @endif
                            </span>
                        </div>
                        <h5 class="mb-0">{{ $title }}</h5>
                    </div>
                    <div class="avatar-md d-flex justify-content-center align-items-center rounded-circle {{ $colors['subtle'] }} {{ $colors['text'] }} fs-3">
                        <i class="{{ $icon }}"></i>
                    </div>
                </div>
            </div>
            <div class="progress" style="height: 4px;">
                <div class="progress-bar {{ $colors['bg'] }}" role="progressbar" style="width: {{ $status === 'green' ? '100' : ($status === 'yellow' ? '50' : '20') }}%"></div>
            </div>
        </div>
    </a>
</div>
