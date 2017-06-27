<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

{{-- font awesome --}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
		
	<div class="h1 text-danger">
		General Statistics <hr>
	</div>

	{{-- row --}}
	<div class="row">
        <div class="col-sm-3">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-3">
                            <i class="fa fa-group fa-5x"></i>
                        </div>
                        <div class="col-sm-9 text-right">
                            <div class="h1 fa-5x">80</div>
                            <div class="h3">Total Faculty</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
        	@for($i = 1; $i < 9;$i++)
        		<div class="col-sm-3">
	        		<div class="panel panel-info">
		                <div class="panel-heading">
		                    <div class="row">
		                        <div class="col-sm-3">
		                            <i class="fa fa-user fa-3x"></i>
		                        </div>
		                        <div class="col-sm-9 text-right">
		                            <div class="h2">10</div>
		                            <div class="h5">Department {{$i}}</div>
		                        </div>
		                    </div>
		                </div>
		            </div>		
	        	</div>
        	@endfor
        </div>
    </div>
    {{-- end row --}}
    <hr>
    {{-- row --}}
    <div class="row">
        <div class="col-sm-3">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-3">
                            <i class="fa fa-university fa-5x"></i>
                        </div>
                        <div class="col-sm-9 text-right">
                            <div class="h1 fa-5x">40</div>
                            <div class="h3">Teaching Staff</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
        	@for($i = 1; $i < 9;$i++)
        		<div class="col-sm-3">
	        		<div class="panel panel-info">
		                <div class="panel-heading">
		                    <div class="row">
		                        <div class="col-sm-3">
		                            <i class="fa fa-wikipedia-w fa-3x"></i>
		                        </div>
		                        <div class="col-sm-9 text-right">
		                            <div class="h2">5</div>
		                            <div class="h5">Department {{$i}}</div>
		                        </div>
		                    </div>
		                </div>
		            </div>		
	        	</div>
        	@endfor
        </div>
    </div>
    {{-- end row --}}
    <hr>
    {{-- row --}}
    <div class="row">
        <div class="col-sm-3">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-3">
                            <i class="fa fa-id-badge fa-5x"></i>
                        </div>
                        <div class="col-sm-9 text-right">
                            <div class="h1 fa-5x">40</div>
                            <div class="h3">Non-Teaching Staff</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
        	@for($i = 1; $i < 9;$i++)
        		<div class="col-sm-3">
	        		<div class="panel panel-info">
		                <div class="panel-heading">
		                    <div class="row">
		                        <div class="col-sm-3">
		                            <i class="fa fa-cogs fa-3x"></i>
		                        </div>
		                        <div class="col-sm-9 text-right">
		                            <div class="h2">5</div>
		                            <div class="h5">Department {{$i}}</div>
		                        </div>
		                    </div>
		                </div>
		            </div>		
	        	</div>
        	@endfor
        </div>
    </div>
</div>
