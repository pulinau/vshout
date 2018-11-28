<form action="/charge/{{ $event->id }}" method="POST">
    @csrf
    <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="{{ env('STRIPE_PUB_KEY') }}"
        data-amount="999"
        data-name="Make a donation"
        data-description="Enter card details to make a donation"
        data-image="http://pngimg.com/uploads/donate/donate_PNG12.png"
        data-locale="auto"
        data-zip-code="true">
    </script>
</form>
