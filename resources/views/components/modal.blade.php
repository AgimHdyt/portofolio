@props([
    'id' => 'modalId',
    'title' => 'Modal Title',
    'size' => '',
    'footer' => true,
    'form_action' => null,
    'form_method' => 'POST',
    'form_data' => false,
])

<div class="modal" id="{{ $id }}">
    <div class="modal-content">
        <span class="close">&times;</span>

        @if ($form_action)
            @php
                $method = strtoupper($form_method);
                $hasUncommonMethod = $method != 'POST' && $method != 'GET';
            @endphp
            <form action="{{ $form_action }}" method="{{ $hasUncommonMethod ? 'POST' : $method }}"
                {{ $form_data ? 'enctype=multipart/form-data' : '' }}>
                @csrf
                @if ($hasUncommonMethod)
                    @method($method)
                @endif
        @endif
        <div class="modal-body">
            {{ $slot }}
        </div>

        @if ($footer)
            <div class="modal-footer row">
                <button type="submit" class="btn btn-primary col-6 padd-15">Simpan</button>
            </div>
        @endif

        @if ($form_action)
            </form>
        @endif
    </div>
</div>

<!-- Modal -->
{{-- <div class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p class="modal-text"></p>
        <div class="modal-body">
            <form action="">
                <div class="form-item col-12 padd-15">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                </div>
                <div class="form-item col-12 padd-15">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-item col-12 padd-15">
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                </div>
                <div class="form-item col-12 padd-15">
                    <div class="form-group">
                        <input type="file" name="file" id="" class="form-control">
                    </div>
                </div>
                <div class="form-item col-12 padd-15">
                    <div class="form-group">
                        <textarea name="message" id="" class="form-control" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="form-item col-12 padd-15">
                    <button type="submit" class="btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}
