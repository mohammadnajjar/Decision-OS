{{-- Today One Thing Component --}}
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div>
            <h5 class="card-title mb-0">
                <i class="ri-focus-2-line me-2 text-primary"></i>
                مهمة اليوم الأساسية
            </h5>
            <small class="text-muted">Today One Thing</small>
        </div>
        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addTaskModal">
            <i class="ri-add-line"></i>
        </button>
    </div>
    <div class="card-body">
        @if($task)
            <div class="d-flex align-items-center justify-content-between p-3 rounded-3 {{ $task->completed ? 'bg-success-subtle' : 'bg-primary-subtle' }}">
                <div class="d-flex align-items-center gap-3">
                    <form action="{{ route('decision-os.tasks.toggle', $task) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-sm {{ $task->completed ? 'btn-success' : 'btn-outline-primary' }} rounded-circle" style="width: 40px; height: 40px;">
                            <i class="ri-check-line"></i>
                        </button>
                    </form>
                    <div>
                        <h5 class="mb-0 {{ $task->completed ? 'text-decoration-line-through text-muted' : '' }}">
                            {{ $task->title }}
                        </h5>
                        @if($task->completed)
                            <small class="text-success">✓ مكتملة</small>
                        @endif
                    </div>
                </div>
                <form action="{{ route('decision-os.tasks.destroy', $task) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-danger">
                        <i class="ri-delete-bin-line"></i>
                    </button>
                </form>
            </div>
        @else
            <div class="text-center py-4">
                <i class="ri-checkbox-blank-circle-line fs-1 text-muted"></i>
                <p class="text-muted mt-2">لم تحدد مهمة اليوم بعد</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTaskModal">
                    <i class="ri-add-line me-1"></i> أضف مهمة اليوم
                </button>
            </div>
        @endif

        {{-- Top 3 Tasks --}}
        @if($topTasks->isNotEmpty())
            <hr class="my-3">
            <h6 class="text-muted mb-3">
                <i class="ri-list-ordered me-1"></i> Top 3 (اختياري)
            </h6>
            <ul class="list-group list-group-flush">
                @foreach($topTasks as $topTask)
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <div class="d-flex align-items-center gap-2">
                            <form action="{{ route('decision-os.tasks.toggle', $topTask) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-sm {{ $topTask->completed ? 'btn-success' : 'btn-outline-secondary' }}" style="width: 30px; height: 30px; padding: 0;">
                                    <i class="ri-check-line"></i>
                                </button>
                            </form>
                            <span class="{{ $topTask->completed ? 'text-decoration-line-through text-muted' : '' }}">
                                {{ $topTask->title }}
                            </span>
                        </div>
                        <form action="{{ route('decision-os.tasks.destroy', $topTask) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm text-danger p-0">
                                <i class="ri-close-line"></i>
                            </button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>

{{-- Add Task Modal --}}
<div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('decision-os.tasks.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="addTaskModalLabel">إضافة مهمة</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="taskTitle" class="form-label">عنوان المهمة</label>
                        <input type="text" class="form-control" id="taskTitle" name="title" required placeholder="ما هي المهمة؟">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">نوع المهمة</label>
                        <div class="d-flex gap-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="typeOneThing" value="one_thing" checked>
                                <label class="form-check-label" for="typeOneThing">
                                    مهمة اليوم الأساسية
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="typeTop3" value="top_3">
                                <label class="form-check-label" for="typeTop3">
                                    Top 3
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                    <button type="submit" class="btn btn-primary">إضافة</button>
                </div>
            </form>
        </div>
    </div>
</div>
