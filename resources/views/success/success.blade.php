<!-- resources/views/success/success.blade.php -->

@if (session('status'))
    <div class="alert alert-success">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	        <span aria-hidden="true">&times;</span>
	    </button>
        <strong>Todo salio bien!</strong>

        <br><br>

        <ul>
            <li>{{ session('status') }}</li>
        </ul>
    </div>
@endif