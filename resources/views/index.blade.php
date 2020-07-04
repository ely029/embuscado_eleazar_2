<!DOCTYPE html>
<html>
<head>
	<title>Job Order</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>

	<body>
		<table class="table">
	        <tr>
	        	 <td colspan="3" style="text-align: center;"><h3><b>Job Order</b></h3></td>
	        </tr>
			<tr>
				<th>Title</th>
				<th>Location</th>
				<th>Date</th>
			</tr>
        		@foreach($data as $datas)
             <tr>
            	<td><a href="#"  data-toggle="modal" data-target="#job-order-{{ $datas->id }}">{{ $datas->title }}</a></td>
            	<td>{{ $datas->location }}</td>
            	<td>{{ $datas->date }}</td>
             </tr>
            @endforeach
		</table>
		@foreach($data as $datas)
		<div class="modal fade" id="job-order-{{ $datas->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLongTitle">Job Order</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			          <table class="table">
			          	<tr>
			          		<th>Title</th>
			          		<th>Description</th>
			          		<th>Location</th>
			          		<th>Date</th>
			          		<th>Applicants</th>
			          	</tr>
			          	<tr>
			          		 <td>{{ $datas->title }}</td>
			          		 <td>{{ $datas->description }}</td>
			          		 <td>{{ $datas->location }}</td>
			          		 <td>{{ $datas->date }}</td>
			          		 <td>{{ $datas->applicants }}</td>
			          	</tr>
			          </table>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Click to Close</button>
			      </div>
			    </div>
			  </div>
       </div>
		@endforeach
		<script
			  src="https://code.jquery.com/jquery-1.12.4.min.js"
			  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
			  crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
	</body>
</html>