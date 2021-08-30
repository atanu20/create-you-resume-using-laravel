<x-layout>
    <x-slot name="title">Update Skil Details</x-slot>
    <x-slot name="content">
        @include('includes.navbar')
       <div class="login">
           <div class="container">
               <div class="row">
                   <div class="col-md-6 col-12 mx-auto">
                       <div class="card p-3">
                       @if(session('error'))
                            <div class="alert alert-info alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                {{session('error')}}
                            </div>
                            @endif
                           <h3 class="text-center">Skil Details</h3>

                           @if(count($skils))
                           @foreach($skils as $skil)
                           <form action="" method="POST">
                               @csrf
                           <div class="form-group">
                                    <label for="">Technology:</label>
                                    <input type="text" class="form-control" value="{{$skil->skil}}" placeholder="Enter technology" name="skil" required>
                          </div>
                           <div class="form-group">
                                    <label for="">Experienced On this Technology:</label>
                                    <input type="number" class="form-control" value="{{$skil->percentage}}" placeholder="Enter Percentage" name="percentage" required>
                          </div>
                          

                        <div class="formbox">
                            <p></p>
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </div>


                           </form>
                           @endforeach
                           @endif

                       </div>
                   </div>
               </div>
           </div>
       </div>
    </x-slot>
   
</x-layout>