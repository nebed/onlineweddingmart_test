@extends('baseprofile')

@section('content')
        <!--Profile Content -->
        <div class="container-fluid m-3">
            <div class="col-md-9 mx-auto">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card text-white bg1" style="min-width: 18rem;">
                      <div class="card-header">
                        <h5>Profile</h5>
                      </div>
                      <div class="card-body text-center">
                        <a href="{{route('vendor.profile')}}"><strong class="card-text">Information</strong></a><hr>
                        <a href="{{route('vendor.projects')}}"><strong class="card-text">Projects</strong></a><hr>
                        <a href="{{route('vendor.reviews')}}"><strong class="card-text">Reviews</strong></a><hr>
                      </div>
                    </div>
                </div>
                <div class="col-md-9">
                    @include('partials.messages')
                    <div class="card block">
                      <div class="card-header text-white bg1">
                        <h5>Personal Information</h5>
                      </div>
                      <div class="card-body text-center">
                        {!! Form::model($vendor, ['route'=>['vendor.update', $vendor->id], 'method' => 'PUT']) !!}

                    <div class="form-group row">
                        {{ Form::label('title', 'Login Email ID:', ['for'=>'email','class'=>'col-12 col-sm-3 col-form-label text-md-right'])}}
                      <div class="col-12 col-sm-8 col-md-8">
                        {{Form::email('email', null, ['class'=>'form-control','type'=>'text','readonly'=>'readonly'])}}
                      </div>
                    </div>
                    <div class="form-group row">
                        {{ Form::label('title', 'Brand Name', ['for'=>'brand_name','class'=>'col-12 col-sm-3 col-form-label text-md-right'])}}
                      <div class="col-12 col-sm-8 col-md-8">
                        {{Form::text('brand_name', null, ['class'=>'form-control','type'=>'text','readonly'=>'readonly'])}}
                      </div>
                    </div>
                    <div class="form-group row">
                      {{ Form::label('title', 'Category', ['for'=>'service_id','class'=>'col-12 col-sm-3 col-form-label text-md-right'])}}
                      <div class="col-12 col-sm-8 col-md-8">
                        {{Form::select('service_id',$services, null, ['class'=>'form-control','type'=>'text','readonly'=>'readonly'])}}
                      </div>
                    </div>
                    <div class="form-group row">
                      {{ Form::label('title', 'City', ['for'=>'location_id','class'=>'col-12 col-sm-3 col-form-label text-md-right'])}}
                      <div class="col-12 col-sm-8 col-md-8">
                        {{Form::select('location_id',$locations, null, ['class'=>'form-control','type'=>'text','readonly'=>'readonly'])}}
                      </div>
                    </div>
                    <div class="form-group row">
                      {{ Form::label('title', 'Contact Person', ['for'=>'contact_person','class'=>'col-12 col-sm-3 col-form-label text-md-right'])}}
                      <div class="col-12 col-sm-8 col-md-8">
                        {{Form::text('contact_person', null, ['class'=>'form-control'])}}
                      </div>
                    </div>
                    <div class="form-group row">
                       {{ Form::label('title', 'Contact Number', ['for'=>'contact_number','class'=>'col-12 col-sm-3 col-form-label text-md-right'])}}
                      <div class="col-12 col-sm-8 col-md-8">
                        {{Form::text('contact_number', null, ['class'=>'form-control'])}}
                      </div>
                    </div>
                    <div class="form-group row">
                      {{ Form::label('title', 'Website', ['for'=>'website','class'=>'col-12 col-sm-3 col-form-label text-md-right'])}}
                      <div class="col-12 col-sm-8 col-md-8">
                        {{Form::text('website', null, ['class'=>'form-control'])}}
                      </div>
                    </div>
                    <div class="form-group row">
                      {{ Form::label('title', 'Youtube', ['for'=>'youtube_url','class'=>'col-12 col-sm-3 col-form-label text-md-right'])}}
                      <div class="col-12 col-sm-8 col-md-8">
                        {{Form::text('youtube_url', null, ['class'=>'form-control'])}}
                      </div>
                    </div>
                    <div class="form-group row">
                      {{ Form::label('title', 'Instagram', ['for'=>'instagram_url','class'=>'col-12 col-sm-3 col-form-label text-md-right'])}}
                      <div class="col-12 col-sm-8 col-md-8">
                        {{Form::text('instagram_url', null, ['class'=>'form-control'])}}
                      </div>
                    </div>
                    <div class="form-group row">
                      {{ Form::label('title', 'Facebook', ['for'=>'facebook_url','class'=>'col-12 col-sm-3 col-form-label text-md-right'])}}
                      <div class="col-12 col-sm-8 col-md-8">
                        {{Form::text('facebook_url', null, ['class'=>'form-control'])}}
                      </div>
                    </div>
                    <div class="form-group row">
                      {{ Form::label('title', 'Additional Information', ['for'=>'additional_info','class'=>'col-12 col-sm-3 col-form-label text-md-right'])}}
                      <div class="col-12 col-sm-8 col-md-8">
                        {{Form::textarea('additional_info', null, ['class'=>'form-control'])}}
                      </div>
                    </div>
                    <div class="form-group row row justify-content-end">
                    <div class="col-12 .offset-md-3 col-sm-8 col-md-8">
                    {!!Form::submit('Save Changes', array('class' => 'submit btn btn-primary'))!!}
                    </div>
                    </div>
                  {!! Form::close() !!}
                      </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
