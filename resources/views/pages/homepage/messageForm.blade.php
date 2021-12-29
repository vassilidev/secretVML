<div class="card mb-4">
    <div class="card-body">
        <h2 class="card-title">Message du jour</h2>
        <form action="{{ route('message.update', $messages['today']) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="my-2">
                <textarea name="message" id="message">{{ $messages['today']->message }}</textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary fw-bolder">
                    Publier mon message
                </button>
            </div>
        </form>
    </div>
</div>
