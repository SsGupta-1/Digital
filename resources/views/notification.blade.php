
@extends('adminlayout')
@section('content')
<div class="content-wrapper">
						<div class="heading mt-3 mb-3 d-flex align-items-center justify-content-between">
							<h3 class="text-default weight-700 my-0">Notifications</h3>
                            <h3 class="text-default weight-700 my-0">{{$notificationCount}}</h3>
						</div>
						<div class="card mb-4">
							<div class="card-body py-4 tab-pane fade show active" id="tab1" role="tabpanel">
								<table class="table">
									<thead>
										<tr>
											<th width="80"><b>S.No</b></th>
											<th width="125"><b>Date</b></th>
											<th width="225"><b>Notification</b></th>
										</tr>
									</thead>
									<tbody>
										@foreach($notifications as $key=>$row)
										<tr>
											<td>{{$key+1}}</td>
											<td>{{$row->created_at}}</td>
											<td>{{$row->message}}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
				</div>
@endsection                