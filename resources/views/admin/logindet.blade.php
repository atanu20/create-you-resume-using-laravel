<x-layout>
    <x-slot name="title">Update Register Details</x-slot>
    <x-slot name="content">
        @include('includes.navbar')
       <div class="login">
           <div class="container">
               <div class="row">
                   <div class="col-md-6 col-12 mx-auto">
                       <div class="card p-3">
                           <h3 class="text-center">Change Password</h3>
                            
                           @if(count($users))
                           @foreach($users as $user)
                           <form action="" method="POST">
                               @csrf
                           <div class="form-group">
                                    <label for="">Name:</label>
                                    <input type="text" class="form-control" value="{{$user->name}}" placeholder="Enter Full Name" name="name" readonly required>
                          </div>
                           <div class="form-group">
                                    <label for="">Email address:</label>
                                    <input type="email" class="form-control" value="{{$user->email}}" placeholder="Enter email" name="email" readonly required>
                          </div>
                          <div class="form-group">
                            <label for="">Password:</label>
                            <input type="text" class="form-control"  placeholder="New password" name="password" required>
                        </div>

                        <div class="formbox">
                            <p></p>
                            <button type="submit" class="btn btn-dark">Update</button>
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