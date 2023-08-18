<div class="text-center">
    <ul class="pagination pagination-sm justify-content-end">
        <li class="page-item{{ $data->currentPage() === 1 ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $data->previousPageUrl() }}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        @for ($i = 1; $i <= $data->lastPage(); $i++)
            <li class="page-item{{ $i === $data->currentPage() ? ' active' : '' }}">
                <a class="page-link" href="{{ $data->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="page-item{{ $data->currentPage() === $data->lastPage() ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $data->nextPageUrl() }}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</div>
