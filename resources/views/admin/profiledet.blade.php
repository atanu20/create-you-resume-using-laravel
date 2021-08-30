<x-layout>
    <x-slot name="title">Profile Details</x-slot>
    <x-slot name="content">
        @include('includes.navbar')
        <div class="box">
            <div class="container">
                
                <div class="card">
                @if(session('error'))
                            <div class="alert alert-info alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                {{session('error')}}
                            </div>
                            @endif

                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf

                <h2 class="text-center p-3">Profile Details</h2>
                <div class="row pb-3">

<div class="col-md-6 col-12 mx-auto">
    <div class="form-group">
        <label for="">Title Text:</label>
        <input type="text" class="form-control" placeholder="Title text" name="title" required>
    </div>
    <div class="form-group">
        <label for="">Profile Image:</label>
        <input type="file"  accept=".png,.jpeg,.jpg" class="form-control" placeholder="" name="profileimg" required>
    </div>
    <div class="form-group">
        <label for="">Age:</label>
        <input type="number" class="form-control" placeholder="Enter Age" name="age" required>
    </div>
    <div class="form-group">
        <label for="">Phone:</label>
        <input type="number" class="form-control" placeholder="Enter Phone" name="phone" required>
    </div>
</div>

<div class="col-md-6 col-12 mx-auto">
<div class="form-group">
  <label for="">Address:</label>
  <textarea class="form-control" rows="2" name="address" placeholder="Write address" required></textarea>
</div>
<div class="form-group">
  <label for="">About Me:</label>
  <textarea class="form-control" rows="5" name="aboutme" placeholder="Write About yourself" required></textarea>
</div>
<button type="submit" class="btn btn-info btn-block">Save Details</button>
</div>

</div>
</form>
                </div>
                
            </div>
        </div>
    </x-slot>

</x-layout>