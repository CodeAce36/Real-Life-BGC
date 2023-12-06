@include('partials.header')

<!-- ======= FAQ Section ======= -->

<section id="contact" class="contact">
    <div class="container">
        <div class="section-title">
            <h2>ANNOUNCEMENT</h2>
        </div>
        <div class="container">
            @foreach($announcement as $announce)
                <div class="card shadow-sm mt-4" style="margin-left: 90px; margin-right: 90px; font-size: 13px;">
                    <div class="card-body">{!! nl2br($announce->caption) !!}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@include('partials.footer')