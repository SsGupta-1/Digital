@extends('adminlayout')


@section('content')
<div class="content-wrapper">
	
					
	<form action="/send-notification" method="post" class="row px-3 profile-card mb-3 mt-2"  enctype="multipart/form-data">
			@csrf
			
					
        <div class="col-sm-4  mb-3">
            <div class="card xs-shadow border-radius-xs">
                <div class="card-body px-4 pt-4 py-2">
                    <h6 class="text-black mb-1">Sender id</h6>
                    <input type="text" class="h4 text-black no-border w-100"  name="senderid"  >
                </div>
            </div>
        </div>

        <div class="col-sm-4 mb-3">
            <div class="card xs-shadow border-radius-xs">
                <div class="card-body px-4 pt-4 py-2">
                    <h6 class="text-black mb-1">Receiver id</h6>
                    <input type="text" class="h4 text-black no-border w-100"  name="receiverid" >
                </div>
            </div>
        </div>
        
        <div class="col-sm-4 mb-3">
            <div class="card xs-shadow border-radius-xs">
                <div class="card-body px-4 pt-4 py-2 ">
                    <h6 class="text-black mb-1">Url</h6>
                    <input type="text" class="h4 text-black no-border w-100"  name="url"  >
                </div>
            </div>
        </div>
        <div class="col-sm-4 mb-3">
            <div class="card xs-shadow border-radius-xs">
                <div class="card-body px-4 pt-4 py-2 ">
                    <h6 class="text-black mb-1">Message</h6>
                    <textarea class="h4 text-black no-border w-100"  name="message" rows="3"> </textarea>
                </div>
            </div>
        </div>
        <div class="float-md-right">
            <button type="submit" class="btn btn-primary  ">Send</button>
        </div>
    </form>
</div>

				
@endsection
