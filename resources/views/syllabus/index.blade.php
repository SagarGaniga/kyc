<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

{{-- font awesome --}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<br>




<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Add</button>
            <div id="demo" class="collapse">
                {{ Form::open(['action' => 'SyllabusController@load', 'method'=>'POST']) }}
                    <div class="col-sm-4">
                        <div class="form-group">
                            {{Form::number('term', '', ['class'=> 'form-control', 'placeholder'=>'Term ID'])}}
                        </div>    
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <select name="contractType" class="form-control">
                                <option value="-1">16055</option>
                                <option value="1">16155</option>
                                <option value="0">16255</option>
                            </select>
                        </div>
                    </div>
                    {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
                {{ Form::close() }}    
            </div>    
        </div>






        <div class="col-sm-4">
            {{ Form::open(['action' => 'SyllabusController@search', 'method'=>'POST']) }}
                <div class="col-sm-4">
                    <div class="form-group">
                        {{Form::number('term', '', ['class'=> 'form-control', 'placeholder'=>'Term ID'])}}
                    </div>
                </div>
                {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
            {{ Form::close() }}    
        </div>
    </div>
</div>

@if(isset($data))
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>E_id</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Department</th>
                    <th>Staff Type</th>
                    <th>E-Mail</th>
                    <th>Contract Type</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
@endif

@if(isset($load))
    <div class="form-group container">
        {{ Form::open(['action' => 'SyllabusController@load', 'method'=>'POST']) }}
            <p>prev year schema</p>

            {{Form::submit('Add', ['class'=>'btn btn-success'])}}
        {{ Form::close() }}
    </div>
@endif

