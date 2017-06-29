<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

{{-- font awesome --}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



<div class="row">
    {{ Form::open(['action' => 'SyllabusController@store', 'method'=>'POST']) }}
        {{-- <div class="col-sm-2">
            <div class="form-group">
                <select name="department" class="form-control">
                    <option value="-1">All</option>
                    <option value="Information Technology">Information Technology</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Electronics">Electronics</option>
                    <option value="EXTC">EXTC</option>
                    <option value="Intrumentation">Intrumentation</option>
                    <option value="MCA">MCA</option>
                    <option value="H and S">H and S</option>
                </select>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <select name="staffType" class="form-control">
                    <option value="-1">All</option>
                    <option value="1">Teaching</option>
                    <option value="0">Non-Teaching</option>
                </select>
            </div>
        </div>
        
        <div class="col-sm-2">
            <div class="form-group">
                <select name="contractType" class="form-control">
                    <option value="-1">All</option>
                    <option value="1">Permanent</option>
                    <option value="0">Adhoc</option>
                </select>
            </div>
        </div> --}}
        <div class="col-sm-2">
            <div class="form-group">
                {{Form::number('year', '', ['class'=> 'form-control', 'placeholder'=>'N years'])}}
            </div>
        </div>

        {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
    {{ Form::close() }}
</div>

