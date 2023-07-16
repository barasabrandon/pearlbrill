<form wire:submit.prevent="submit" id="contact-form">
    @csrf
    <div class="row">
        <div class="col-lg-6 mb-35 col-md-12">
            <input class="from-control" type="text" id="name" name="name" placeholder="Name"
               />
        </div>
        <div class="col-lg-6 mb-35 col-md-12">
            <input class="from-control" type="text" id="email" name="email" placeholder="Email"
                />
        </div>
        <div class="col-lg-6 mb-35 col-md-12">
            <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone"
                />
        </div>
        <div class="col-lg-6 mb-35 col-md-12">
            <input class="from-control" type="text" id="subject" name="title"
                placeholder="Subject"/>
        </div>

        <div class="col-lg-12 mb-50">
            <textarea class="from-control" id="message" name="message" placeholder=" Message" required></textarea>
        </div>
    </div>
    @if ($successMessage )
    <div class="alert alert-success mt-3">
        {{ $successMessage }}
    </div>
    @endif
    <div class="form-group mb-0">
        <input class="btn-send" type="submit" value="Submit Now">
    </div>
</form>
