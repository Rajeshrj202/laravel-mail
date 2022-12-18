@extends('layouts.master')
@section('content')
@section('title','Manage Mail Box')

<div class="card card-body shadow border-0 table-wrapper table-responsive">
	<form action="{{route('subscriber.dispatch-mail')}}" method="POST">
		@csrf
	<div class="d-flex mb-3">
		<select class="form-select fmxw-200 @if($errors->has('email_type_id')) is-invalid @endif" name="email_type_id"  aria-label="Message select example">
            <option value="">Choose Email Type</option>
            @if(isset($emailtemplates) && count($emailtemplates)>0)
            @foreach($emailtemplates as $data)
            
            <option value="{{$data->email_type_id}}">{{$data->name}}</option>
            
            @endforeach
            @endif
        </select>
		
		<button class="btn btn-sm px-3 btn-secondary ms-3" type="submit">Send Email to Active Subscribers</button>
		
	</div>
	

	<table class="table user-table table-hover table-bordered align-items-center">
        <thead>
            <tr>
                <th class="border-bottom px-5">Sr.No</th>
                <th class="border-bottom px-5">Name</th>
                <th class="border-bottom px-5">Email</th>
                <th class="border-bottom px-5">Status</th>
            </tr>
        </thead>
        <tbody>
        	@if(isset($subscriber) && count($subscriber)>0)
        	@foreach($subscriber as $key=>$subscriberdata)
            <tr>
            	<td class="text-center">{{$key+1}}</td>
                <td class="px-3 d-flex align-items-center">
                    
                        <img src="{{asset('images/profile.png')}}" class="avatar rounded-circle" alt="Avatar">
                        
                        <span class="fw-bold   ms-3">{{$subscriberdata->name}}</span>
                           
                       
                   
                </td>
                <td class="px-3"><span class="fw-normal">{{$subscriberdata->email}}</span></td>
                <td class="px-3">
                	<span class="fw-normal d-flex align-items-center">
	                	
	                	@if($subscriberdata->isactive==1)

		                			 <svg class="icon icon-xxs text-success ms-3 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
						            </svg> Active

	                		
	                		@else

	                				<svg class="icon icon-xxs text-danger ms-3 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
						            </svg> In Active

	           			@endif
        			</span>
        		</td>
                
            </tr>
            @endforeach
            
            @endif
        </tbody>
    </table>
    @if ($subscriber->links()->paginator->hasPages())
    		<div class="row">
    		<div class=" mt-3 ms-2 p-2 col-lg-4 col-sm-6">
    			Showing {{ $subscriber->firstItem() }} - {{$subscriber->lastItem()}} of {{$subscriber->total()}}
    		</div>
            <div class="mt-1 p-2 col-lg-7 col-sm-6">
                {{ $subscriber->onEachSide(1)->links() }}
            </div>
        	</div>
           
    @endif
	</form>
	
</div>
@endsection