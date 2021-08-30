<x-layout>
    <x-slot name="title">Education Details</x-slot>
    <x-slot name="content">
        @include('includes.navbar')
        <div class="box">
            <div class="container">
                
                <div class="card">
                @if(count($edus))
@foreach($edus as $edu)
                    <form action="" method="POST">
                        @csrf

                <h2 class="text-center p-3">Eductaion Details</h2>
                <div class="row pb-3">

<div class="col-md-6 col-12 mx-auto">
    <div class="form-group">
        <label for="">Degree:</label>
        <input type="text" class="form-control" value="{{$edu->degree}}" placeholder="Enter Degree like(Bachelor of Technology)" name="degree" required>
    </div>
    <div class="form-group">
        <label for="">Institute:</label>
        <input type="text" class="form-control" value="{{$edu->institute}}" placeholder="Enter institute" name="institute" required>
    </div>
    <div class="form-group">
        <label for="">Start on:</label>
        <input type="date" class="form-control" value="{{$edu->sdate}}" placeholder="Enter date" name="sdate" required>
    </div>
   
</div>

<div class="col-md-6 col-12 mx-auto">
<div class="form-group">
        <label for="">End on:</label>
        <input type="date" class="form-control" value="{{$edu->edate}}" placeholder="Enter date" name="edate" required>
    </div>
<div class="form-group">
  <label for="">Description:</label>
  <textarea class="form-control" rows="5" name="desc" placeholder="Write Something about your Institute" required>
      {{$edu->desc}}
  </textarea>
</div>
<button type="submit" class="btn btn-info btn-block">Save Details</button>
</div>

</div>
</form>
@endforeach
     @endif            
</div>
                
            </div>
        </div>
    </x-slot>

</x-layout>