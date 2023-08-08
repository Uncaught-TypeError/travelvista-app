document.getElementById('all-tours-button').addEventListener('click', function() {
    window.location.href = "{{ route('admin.tours.index') }}";
});

document.getElementById('available-tours-button').addEventListener('click', function() {
    window.location.href = "{{ route('admin.tours.filter', ['status' => 'available']) }}";
});

document.getElementById('unavailable-tours-button').addEventListener('click', function() {
    window.location.href = "{{ route('admin.tours.filter', ['status' => 'unavailable']) }}";
});
