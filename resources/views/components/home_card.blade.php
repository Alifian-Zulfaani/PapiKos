<div class="col-lg-3">
    <div class="item">
        <a href="{{ route('landing.details', 'coral-pik-seven') }}">
            <img src="{{ asset($cover) }}" alt="" class="img-fluid">
        </a>
        <div class="info">
            <a href="{{ route('landing.details', 'coral-pik-seven') }}">
                <h3 class="small-header mb-2">
                    {{ $title }}
                </h3>
            </a>
            <div class="footer">
                <div class="location d-flex flex-row ">
                    <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                    <p class="small-paragraph mb-0">
                        {{ $location }} - 
                        <span class="text-warning">
                            @isset($rating) {{ $rating }} @endisset
                        </span>
                    </p>
                </div>
                @php
                    $hasBooked = false;
                @endphp
                <div class="price">
                    <p class="mb-0">
                        ${{ $hasBooked ? 'Sold Out' : $price }}<span class="extra-small-paragraph">
                            {{ $hasBooked ? '' : '/mo' }}</span>
                    </p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>