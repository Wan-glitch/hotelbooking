<!-- Rest of your code -->

@if (auth()->user()->admin === 1)
<div style="padding-right: 5px">
    <form action="{{ route('createlist') }}" method="GET">
        @csrf
        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteModal">List</button>
    </form>
</div>
@endif

<!-- The Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Hotel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this hotel?</p>
            </div>
            <div class="modal-footer">
                <!-- Add a form to handle the deletion -->
                <form method="POST" action="{{ route('delete.hotel') }}">
                    @csrf
                    <!-- Add an input field to hold the hotel ID to be deleted -->
                    <input type="hidden" name="hotel_id" id="hotel_id" value="">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Rest of your table code -->
<div class="modal-body">
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>Hotel</th>
                <th>Location</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hotels as $hotel) <!-- Assuming you have a variable $hotels containing the list of hotels -->
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-3">
                            <p class="fw-bold mb-1">{{ $hotel->name }}</p>
                            <p class="text-muted mb-0">{{ $hotel->location }}</p>
                        </div>
                    </div>
                </td>
                <td>
                    <a href="#!"><i class="fas fa-times"></i></a>
                </td>
                <td>
                    <!-- Add a button to open the delete modal for each hotel -->
                    <button type="button" class="btn btn-link btn-sm btn-rounded" data-bs-toggle="modal"
                        data-bs-target="#deleteModal" data-hotel-id="{{ $hotel->id }}">
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
