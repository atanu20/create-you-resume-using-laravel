<x-layout>
    <x-slot name="title">Work Details</x-slot>
    <x-slot name="content">
        @include('includes.navbar')
        <div class="box">
            <div class="container">
                
                <div class="card">
                    <form action="" method="POST">
                        @csrf

                <h2 class="text-center p-3">Work Details</h2>
                <div class="row pb-3">

<div class="col-md-6 col-12 mx-auto">
    <div class="form-group">
        <label for="">Work as a?:</label>
        <input type="text" class="form-control" placeholder="Work Category (like Web Development, Marketing)" name="work" required>
    </div>
    <div class="form-group">
        <label for="">Company:</label>
        <input type="text" class="form-control" placeholder="Company" name="company" required>
    </div>
    <div class="form-group">
        <label for="">Start on:</label>
        <input type="date" class="form-control" placeholder="Enter date" name="sdate" required>
    </div>
   
</div>

<div class="col-md-6 col-12 mx-auto">
<div class="form-group">
        <label for="">End on:</label>
        <input type="date" class="form-control" placeholder="Enter date" name="edate" required>
    </div>
<div class="form-group">
  <label for="">Description:</label>
  <textarea class="form-control" rows="5" name="desc" placeholder="Write description" required></textarea>
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