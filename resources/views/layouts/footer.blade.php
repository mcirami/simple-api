<footer>
    <p>Copyright Rock Phase LLC | rockphase.com | All rights reserved.</p>
    <ul>
        <li @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'home') id="active" @endif>
            <a href="{{ route('home') }}">Home</a>
        </li>
        <li @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'about') id="active" @endif>
            <a href="{{ route('about') }}">About Us</a>
        </li>
        <li @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'contact') id="active" @endif class="reset">
            <a href="{{ route('contact') }}">Contact Us</a>
        </li>
    </ul>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<!--footer-->


<script src="{{ asset('js/aos.js') }}"></script>

<script type="text/javascript">
    AOS.init({
        easing: 'ease-out-back'
    });

    $(function () {

        let table = $('.yajra-datatable');

        table.DataTable({
            processing: true,
            serverSide: true,
            pageLength: 50,
            order: [[ 5, 'desc' ]],
            ajax: "{{ route('data.show') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'ip', name: 'ip'},
                {data: 'email', name: 'email'},
                {data: 'source_id', name: 'source_id'},
                {data: 'tracking_id', name: 'tracking_id'},
                {data: 'time_stamp', name: 'time_stamp'},
                /*{data: 'action', name: 'action',orderable: false, searchable: false},*/
            ]
        })

    });

</script>
