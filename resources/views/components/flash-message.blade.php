{{-- Flash message --}}
@if (session()->has('success'))
    <div class="bg-green-500 text-white p-4 rounded-lg mb-6 text-center">
        <p>
        {{ session('success') }}
        </p>
    </div>
@endif