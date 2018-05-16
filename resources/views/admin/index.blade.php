@extends('admin.layout')
@section('content')
<div class="row">
      <div class="col-12">
            <div class="card-box">
                  <div class="text-center mt-4 mb-4">
                  <div class="row">
                        <div class="col-xs-6 col-sm-3">
                              <div class="card-box widget-flat border-custom bg-custom text-white">
                              <i class="fi-tag"></i>
                              <h3 class="m-b-10">70</h3>
                              <p class="text-uppercase m-b-5 font-13 font-600">Leads</p>
                              </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                              <div class="card-box widget-flat border-success bg-success text-white">
                              <i class="fi-help"></i>
                              <h3 class="m-b-10">0</h3>
                              <p class="text-uppercase m-b-5 font-13 font-600">Emails sent</p>
                              </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                              <div class="card-box bg-danger widget-flat border-danger text-white">
                              <i class="fi-delete"></i>
                              <h3 class="m-b-10">0</h3>
                              <p class="text-uppercase m-b-5 font-13 font-600">Emails Opened</p>
                              </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                              <div class="card-box bg-primary widget-flat border-primary text-white">
                              <i class="fi-archive"></i>
                              <h3 class="m-b-10">50</h3>
                              <p class="text-uppercase m-b-5 font-13 font-600">Links Clicked</p>
                              </div>
                        </div>
                  </div>
                  </div>
            </div>
      </div>
</div>
<!-- end row -->
@endsection