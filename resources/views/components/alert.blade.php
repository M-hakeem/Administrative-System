    <div>
        <span id="alert-message" data-message="{{ session('message') }}"
            data-exist="{{ session()->has('message') }}"></span>
    </div>
    <script>
        const message = document.getElementById('alert-message')
        const exist = message.getAttribute('data-exist')
        if (exist == 1) {
            alert(message.getAttribute('data-message'))
        }
    </script>
