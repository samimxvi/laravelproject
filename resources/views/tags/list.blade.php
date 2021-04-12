@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
  <h3>Tags</h3>
  <a href="{{ route('tag.create') }}" class="btn btn-success btn-lg shadow align-self-center">Create New</a>
</div>

<table id="table" class="table table-hover shadow" style="width:100%">
  <thead class=" bg-primary text-white">
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Category</th>
      <th style="width: 120px;">Actions</th>
    </tr>
  </thead>
  <tbody class="bg-white">
    @foreach ($tags as $tag)

    <tr>
      <td class="align-middle">{{ $tag->id }}</td>
      <td class="align-middle">{{ $tag->name }}</td>
      <td class="align-middle">{{ $tag->category->name }}</td>
      <td class="d-flex justify-content-between">
        <a href="{{ route('tag.edit', $tag->id) }}" class="btn btn-primary">Edit</a>
        <button type="button" data-id="{{ $tag->id }}" data-toggle="modal" data-target="#deleteModal"
          class="btn btn-danger">Delete</button>
      </td>
    </tr>

    @endforeach
  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLongTitle">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete selected tag?
      </div>
      <div class="modal-footer">
        <form method="POST">
          @csrf
          @method('DELETE')

          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@section('script')
<script>
  $(document).ready(function () {
    $('#table').DataTable();

    $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var modal = $(this);

        modal.find('.modal-footer form').attr("action", "/admin/tag/" + id);
    });
  });
</script>

@if($isCreated)
<script>
  toastr.success("Tag created successfully");
</script>
@endif

@if($isDeleted)
<script>
  toastr.success("Tag deleted successfully");
</script>
@endif
@endsection

@endsection