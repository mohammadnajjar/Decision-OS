{{-- Decisions Due Component --}}
{{-- عرض القرارات المعلقة للمراجعة --}}

@if($decisions->isNotEmpty())
<div class="card border-warning">
    <div class="card-header bg-warning-subtle">
        <div class="d-flex justify-content-between align-items-center">
            <h6 class="card-title mb-0 text-warning">
                <i class="ri-lightbulb-flash-line me-2"></i>
                قرارات تحتاج مراجعة ({{ $decisions->count() }})
            </h6>
            <a href="{{ route('decision-os.decisions.index') }}" class="btn btn-soft-warning btn-sm">
                عرض الكل
            </a>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <tbody>
                    @foreach($decisions as $decision)
                    <tr>
                        <td class="ps-3">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm bg-warning-subtle text-warning rounded-circle d-flex align-items-center justify-content-center me-3">
                                    <i class="ri-question-line"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 text-truncate" style="max-width: 200px;">
                                        {{ $decision->title }}
                                    </h6>
                                    <small class="text-muted">
                                        @php
                                            $contexts = [
                                                'financial' => 'مالي',
                                                'work' => 'عمل',
                                                'client' => 'عميل',
                                                'personal' => 'شخصي',
                                                'business' => 'أعمال',
                                            ];
                                        @endphp
                                        {{ $contexts[$decision->context] ?? $decision->context }}
                                    </small>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-warning-subtle text-warning">
                                <i class="ri-calendar-line me-1"></i>
                                {{ $decision->review_date->format('m/d') }}
                            </span>
                        </td>
                        <td class="text-end pe-3">
                            <a href="{{ route('decision-os.decisions.review', $decision) }}" 
                               class="btn btn-warning btn-sm">
                                <i class="ri-edit-line me-1"></i> مراجعة
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif
