<script src="{{ asset('js/app.js') }}"></script>
<script>
    @if(! is_null(session('errors')))
        @if(count(array_filter(array_keys(session('errors')->getBag('default')->toArray()))) < 1)
            iziToast.error({
                title: 'Error',
                message: "{{ session('errors')->first() }}"
            });
        @endif
    @elseif(! is_null(session('success')))
        iziToast.success({
            title: 'Sukses',
            message: "{{ session('success') }}"
        });
    @endif
</script>
@stack('js')
