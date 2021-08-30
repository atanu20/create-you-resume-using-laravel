<x-layout>
    <x-slot name="title">Link Details</x-slot>
    <x-slot name="content">
        @include('includes.navbar')
       <div class="login">
           <div class="container">
               <div class="row">
                   <div class="col-md-6 col-12 mx-auto">
                       <div class="card p-3">
                           <h3 class="text-center">Link Details</h3>
@if(count($links))
@foreach($links as $link)
                           <form action="" method="POST">
                               @csrf
                           <div class="form-group">
                                    <label for="">Facebook Link:</label>
                                    <input type="text" class="form-control" value="{{$link->facebook}}" placeholder="Enter Facebook Link"  name="facebook" >
                          </div>
                          <div class="form-group">
                                    <label for="">Github Link:</label>
                                    <input type="text" class="form-control" value="{{$link->github}}" placeholder="Enter Github Link" name="github" required>
                          </div>
                          <div class="form-group">
                                    <label for="">Linkedin Link:</label>
                                    <input type="text" class="form-control" value="{{$link->linkedin}}" placeholder="Enter Linkedin Link" name="linkedin" required>
                          </div>
                          <div class="form-group">
                                    <label for="">Twitter Link:</label>
                                    <input type="text" class="form-control" value="{{$link->twitter}}" placeholder="Enter Twitter Link" name="twitter" >
                          </div>
                           
                         

                        <div class="formbox">
                            <p></p>
                            <button type="submit" class="btn btn-info">Update Links</button>
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